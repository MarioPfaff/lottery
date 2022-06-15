<!DOCTYPE html>
<html lang="en">
<?PHP include 'view/header.php' ?>
<body>
<div class="parentContainer--Head">

<div class="header"> 
<nav>
    <ul>
        <li><a href="prijzen.php">Prijzen</a></li>
        <li><a href="?action=leaderboard">Participants</a></li>
        <li><a href="?action=quiz">Quiz</a></li>
       <li><a href="?action=form">Account</a></li>
    </ul>
</nav>
</div>



<div class="div2"> <b>Dit loterij werkt als volgt:</b> <p> Je krijgt 10 vragen, als je 60% goed hebt krijg je een lot.
    Aan het eind van de quiz mag je nog een dobbelsteen rollen voor bonus punten (1-3).
    En dan trek je een lot.</p>
</div> 

<div class="div1">
    <button type="submit" id="button"><h1>Start Nu!</h1></button>
</div>

</html>
<?php

session_start();

require 'model/model.php';


$function = filter_input(INPUT_GET, 'action');


   
    



switch($function){
    case "login":
        inlogAction();

        break;

    case "uitlog":
        if(isset($_SESSION['username'])) {
            uitlogaction();
            }
        else{
                echo "Werkt niet.";
        }
        break;

    case "form":
        include 'view/form.php';
        break;

    case "leaderboard":
        include 'view/leaderboard.php';
        break;

    case "quiz";
        include 'quiz.php';
        break;

    case "prijzen";
        include 'view/prijzen.php';
        break;

    default;
} ?>

</div>
</body>