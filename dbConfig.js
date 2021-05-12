const mysql = require('mysql');
//to connet to mysql databse
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "mobcom"
});
con.connect(function(err) {
    if (err) throw err;
    console.log("MYQSL Connected!");
});

module.exports.con = con