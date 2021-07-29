const dao = require("./dao.js")
const helper = require("./helper.js")

module.exports.getAllProducts = async function (req, res){
    let test = await dao.getAllProducts();
    //console.log('test: ',test)
    res.status(200).json({"message" : "C get all products was called"});
}

module.exports.addProductToCart = async function (req, res ){
    try{
        //console.log('ADDER req.query : ', req.query)
        let user_id = parseInt(req.query.user_id)
        let product_id = parseInt(req.query.product_id)
        await dao.addProductToCart(user_id, product_id)
        res.status(200).json({"status" : true});
    }
    catch (err){
        res.status(400).json({"status": false});
    }
}

module.exports.removeProductFromCart = async function (req, res ){
    try{
        //console.log('REMOVING req.query : ', req.query)
        let user_id = parseInt(req.query.user_id)
        let product_id = parseInt(req.query.product_id)
        let time_stamp = req.query.time_stamp
        await dao.removeProductFromCart(user_id, product_id, time_stamp)
        res.status(200).json({"status" : true});
    }
    catch (err){
        console.log(err)
        res.status(400).json({"status": false});
    }
}

//when user checks outs or buys a thing
module.exports.placeOrder = async function ( req, res ){
    try {
        let orderData = JSON.parse(req.query.data)
        orderData.address = orderData.address + " "+ orderData.address2 +" , PIN = " + orderData.pincode
        orderData.name = orderData.firstName +" "+ orderData.lastName
        let order_id = await helper.generateOrderId( orderData.user_id )
        orderData.order_id = order_id
        if (orderData.cart_id!=null){
            await dao.getCartDataByUserId(orderData, async function (err, result) {
                if (err) console.log("Database error!", err);
                else{
                    for (i in result){
                        orderData.product_id = result[i].product_id
                        await dao.placeOrder(orderData)
                        let time_stamp = await helper.getTimeStamp(result[i].time_stamp)
                        await dao.removeProductFromCart(orderData.user_id, result[i].product_id, time_stamp)
                    }
                }
            });
        }else if (orderData.product_id!=null){
            await dao.placeOrder(orderData)
        }else{
            console.log(' no product or cart Id')
        }
        res.status(200).json({"status" : true, order_id : order_id});
    }
    catch (err){
        console.log(err)
        res.status(400).json({"status": false});
    }
}

module.exports.getProductDetailsById = async function ( req ,res ){
    try {
        let productId = req.query.product_id
        console.log('pr : ', productId)

        await dao.getProductById(productId, async function (err, result) {
            if (err) console.log("Database error!", err);
            else{
                res.status(200).json({"status" : true, productData: result});  
            }
        });
    }
    catch (err){
        console.log(err)
        res.status(400).json({"status": false});
    }
}