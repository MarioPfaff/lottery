<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="loterij.js"></script>

<link rel="stylesheet" href="view/style.css">


</head>
<body>
<div class="div3"> <a href="prijzen.html">
<h3>Prijzen</h3></a>
</div>
<div class="div4">
<a href="view/leaderboard.php">
<h3>Participants</h3></a>
</div>
<div class="div5">
    <a href="?action=form"><h3>Login</h3></a>
</div>
  <div class="div2"> <b>Dit loterij werkt als volgt:</b> <p> Je krijgt 10 vragen, als je 60% goed hebt krijg je een lot.
      Aan het eind van de quiz mag je nog een dobbelsteen rollen voor bonus punten (1-3).
    En dan trek je een lot.</p>
  </div> 
<div class="div1">
<button type=submit id="button"><h1>Start</h1></button>
</div>

</html>
<?php

session_start();

$function = filter_input(INPUT_GET, 'action');
function uitlogAction(){
    session_unset();
    if(isset($_SESSION)){
        session_destroy();

    }}



switch($function){
    case "login":
        inlogaction();
        break;
    case "uitlog":
        uitlogaction();
        break;
    case "form":
        include 'form.php';
        break;




    default:
} ?>

</body>