const dbConfig = require('./dbConfig.js')



//execution of query here
module.exports.getAllProducts = async function (res){
    let data;
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
    console.log('QWUERY : ', sql)
    dbConfig.con.query(sql, async function (error, result, fields) {
        if (error)
            throw error;
        console.log('Product Deleted')
    })
    
}
