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
