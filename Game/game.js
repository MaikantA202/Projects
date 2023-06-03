var clickedPattern = [];
var gamePattern=[];
var buttonColors=["red","green","yellow","blue"];
var start=false;
var level=0;
var a=0;



//Starts Here********************************(1)
$(document).keypress(function(e){
    $("h3").text("");
    if (!start){
        $("h1").text("Level "+level);
        nextSequence();
        start=true;
    }
    
});
//when the user clicks the color it checks(3)
$(".btn").click(function(e){
    color=$(this).attr("id")
    clickedPattern.push(color);
    animatePress(color);
    check_answer(clickedPattern.length-1);
});
//here the checking goes on
function check_answer(currentLevel){
    if (clickedPattern[currentLevel] === gamePattern[currentLevel]){
        console.log("success");
        if(clickedPattern.length == gamePattern.length){
            setTimeout(function(){
                nextSequence();
            },1000);
        }
    }
    else{
        error();
        startover();
    }

}
//random color is generated and pushed in game pattern(2)
function nextSequence(){
    clickedPattern=[];
    a=level;
    level++;
    $("h1").text("Level"+" "+level)
    var randomNumber=Math.floor(Math.random()*4);
    var randomChoosenColor=buttonColors[randomNumber];
    gamePattern.push(randomChoosenColor);
    $("#"+randomChoosenColor).fadeTo(100, 0.1, function() { $(this).fadeTo(500, 1.0); });
    playsound(randomChoosenColor);
}
function playsound(name){
        var a=new Audio("sounds/"+name+".mp3");
        a.play();
}
function animatePress(color){
    $("."+color).addClass("pressed");
    setTimeout(() => {
        $("."+color).removeClass("pressed");
    }, 100);
}
function error(){
    playsound("wrong");
    $("h1").text("Game Over!!! Press any key to start");
    $("h3").text("Your Score = "+a);
    $("body").addClass("game-over");
    setTimeout(() => {
        $("body").removeClass("game-over");
    }, 200);
}
function startover(){
    start=false;
    level=0;
    gamePattern=[]
    
}