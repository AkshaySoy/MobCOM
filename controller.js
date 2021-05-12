const dao = require("./dao.js")


module.exports.getAllProducts = async function (req, res){
    let test = await dao.getAllProducts();
    console.log('test: ',test)
    res.status(200).json({"message" : "C get all products was called"});
}

module.exports.addProductToCart = async function (req, res ){
    try{
        console.log('req.query : ', req.query)
        let user_id = parseInt(req.query.user_id)
        let product_id = parseInt(req.query.product_id)
        await dao.addProductToCart(user_id, product_id)
        res.status(200).json({"status" : true});
    }
    catch (err){
        res.status(400).json({"status": false});
    }
}