<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "lottery";


include 'config.php';
include 'function.php';

$leaderboards = participant();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
        body {
            background-image: url(view/loterij.png);
            background-size: cover;
            background-repeat: no-repeat; 
            color: white;
            font-family: sans-serif;
          
                
            
        }
    .div1 {
        background-color: lightblue;
        width: 300px;
        height: auto ;
        border-radius: 12px;
        border: solid blue 4px;
        margin: 0 auto;
        padding: 10px;
        

            
        
    }
    </style>
</head>
<body> 



 <center>   <div class="div1">
<h1>Participants:</h1>
</div> </center>
</body>
</html>
<br>
<div class="div1">
    <center>
<?php 

foreach ($leaderboards as $leaderboard) {
?>
 <?= htmlentities($leaderboard['idparticipant']) ?>
 .
 <br>
 <?= htmlentities($leaderboard['firstname']) ?>
 <br>
 <?= htmlentities($leaderboard['lastname']) ?>
 <br>
 <br>
<?php }

?>
</div>
</center>