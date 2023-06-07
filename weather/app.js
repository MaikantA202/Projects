const express = require("express");
const https = require("https");
const bodyParser = require("body-parser");
const app = express();
app.use(bodyParser.urlencoded({extended:true}))

app.get("/",(req,res)=>{
    res.sendFile(__dirname+"/index.html");
    
});
app.post("/",(req,res)=>{
    const place = req.body.p;
    const v="https://api.openweathermap.org/data/2.5/weather?q="+place+"&appid=95fab09b6e6eb43953a9b6a0e284b053&units=metric"
    https.get(v,(response)=>{
        response.on("data",(data)=>{
            const weather = JSON.parse(data);
            const img = weather.weather[0].icon;
            const img_url = "https://openweathermap.org/img/wn/"+img+"@2x.png"
            res.write("<body style='background-color: grey'>");
            res.write("<h1>The Weather at "+weather.name+" is "+weather.weather[0].description+" and temperature is "+weather.main.temp+" degree celcius .</h1>");
            res.write("<img src="+img_url+"></body>");
            res.send();
        })
    })
});


app.listen(3000,(res,req)=>{
    console.log("Server started");
});