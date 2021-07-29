const dbConfig = require('./dbConfig.js')



//execution of query here
module.exports.getAllProducts = async function (res){
    dbConfig.con.query("SELECT * FROM product_master", async function (error, result, fields) {
        if (error)
            throw error;      
    })
}

module.exports.addProductToCart = async function (user_id, product_id){
    let sql = `INSERT INTO shopping_cart_master (user_id, product_id) VALUES(${user_id}, ${product_id})`
    dbConfig.con.query(sql, async function (error, result, fields) {
        if (error)
            throw error;
        console.log('data added')
    })
}

module.exports.removeProductFromCart = async function (user_id, product_id, time_stamp){
    let sql = `DELETE FROM shopping_cart_master WHERE user_id=${user_id} AND product_id=${product_id} AND time_stamp='${time_stamp}'`

    dbConfig.con.query(sql, async function (error, result, fields) {
        if (error)
            throw error;
        console.log('Product Deleted')
    })
    
}

module.exports.placeOrder = async function ( orderData ){
    let sql = `INSERT INTO order_master (order_id , user_id , name, product_id, order_address, order_status, track_status) VALUES(${orderData.order_id} , ${orderData.user_id}, '${orderData.name}' , ${orderData.product_id}, '${orderData.address}', 'order confirmed', 'Preparing for dispatch')`
    dbConfig.con.query(sql, async function (error, result, fields) {
        if (error)
            throw error;
        console.log('order placed')
    })
}

module.exports.getCartDataByUserId = async function ( orderData, callback ){
    let result = []
    dbConfig.con.query(`SELECT * FROM shopping_cart_master WHERE user_id=${orderData.user_id}`, function(err, res, fields) {
        if (err)  return callback(err);
        if(res.length){
            for(var i = 0; i<res.length; i++ ){
                result.push(res[i]);
            }
        }
        callback(null, result);
    });
}


module.exports.getProductById = async function ( product_id , callback ){
    let product_data = []
    dbConfig.con.query(`SELECT * FROM product_master WHERE product_id=${product_id}`, function(err, res, fields) {
        if (err)  return callback(err);
        if(res.length){
            for(var i = 0; i<res.length; i++ ){
                product_data.push(res[i]);
            }
        }
        callback(null, product_data);
    });
}