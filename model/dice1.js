function rollDice (){
    var die1 = document.getElementById("die1");
    var d1 = Math.floor(Math.random() * 3) +1;
    die1.innerHTML = d1;
    document.getElementById('image').style.display = "block";
    document.getElementById('button2').style.display = "block";    
    
 
 
}