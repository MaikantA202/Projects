document.querySelector(".btn").addEventListener("click", function(){
    var a=Math.floor(Math.random()*2)+1;
    $(".img1").attr("src","images/coin-"+a+".png");
    if (a===1){
        $("h3").text("Heads");
    }
    else{
        $("h3").text("Tails");
    }
});