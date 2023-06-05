import inquirer from 'inquirer';
import qr from "qr-image";
import fs from "fs";

inquirer
  .prompt([
    {"message":"what is the url?",
    "name":"Url"}
  ])
  .then((answers) => {
    const url = answers.Url;
    var a=qr.image(url);
    a.pipe(fs.createWriteStream('my_qr.png'));
    fs.writeFile('info.txt',url,(err)=>{
        if (err) throw err;
        console.log("File saved");
    });
    fs.readFile('info.txt',"utf-8",(err,data)=>{
        if (err) throw err;
        console.log(data);
    }); 
  })
  .catch((error) => {
    if (error.isTtyError) {
      // Prompt couldn't be rendered in the current environment
    } else {
      // Something else went wrong
    }
  });