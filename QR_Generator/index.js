import inquirer from "inquirer";
import qr from "qr-image";
import fs from "fs";
inquirer
    .prompt([
        {"message":"Enter any URL/Text :",            //these are the types specified in this package
        "name":"Data"                                //objects of js
    }
    ])
    .then((answers)=>{
        var response=answers.Data;                     //response  holds the value of entered text in question
        var a = qr.image(response);                   //qr.image method takes two parameters text and type of the qr.that qr holds that text default type is png if not specified the type
        a.pipe(fs.createWriteStream("Qr_gen.png"));  //the generated qr is saved with the filename

    })
    .catch((error)=>{
        if(error.isTtyError){

        }else{

        }
    });