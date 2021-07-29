const express = require("express");
const app = express();
var cors = require('cors')
const bodyParser = require("body-parser");
const http = require("http");

const controller = require("./controller.js")    //to import the controller function created
const dbConfig = require("./dbConfig.js")        //for initialising of Database
const port = 3000;
  
app.use(bodyParser.json());
app.use(cors());

app.get('/', function(req, res){
    res.status(200).json({data: 'data is set'});
});


//routes are defined here
app.get('/getAllProducts', controller.getAllProducts);
app.post('/addProductToCart', controller.addProductToCart);
app.post('/removeProductFromCart', controller.removeProductFromCart);
app.post('/placeOrder', controller.placeOrder);
app.get('/product',controller.getProductDetailsById);






app.listen(port, () => console.log(`Server is listening on http://localhost:${port}`))
http.createServer(app);

