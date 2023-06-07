const express = require("express");
const bodyParser = require("body-parser");
const https = require("https");
const app = express();

app.use(bodyParser.urlencoded({ extended:true}));

app.use(express.static("public"));

app.get("/",(req,res)=>{
    res.sendFile(__dirname+"/login.html");
});

app.post("/",(req,res)=>{
    var fn = req.body.fn;
    var ln = req.body.ln;
    var email = req.body.em;
    console.log(fn, ln, email);
});


app.listen(3000,()=>{
    console.log("server connected...")
});