<?PHP

/* Function to get all the questions from the table in my database. */
function questionquery() {
    GLOBAL $pdo;      
    $questions = $pdo-> query('SELECT * FROM quizquestions;') ->fetchAll(PDO::FETCH_ASSOC);  
    return $questions; 
}

function saveanswers() {
    GLOBAL $pdo;
    $answer1 = $_POST['vraag1'];
    $answer2 = $_POST['vraag2'];
    $answer3 = $_POST['vraag3'];
    $answer4 = $_POST['vraag4'];
    $answer5 = $_POST['vraag5'];
    $answer6 = $_POST['vraag6'];
    $answer7 = $_POST['vraag7'];
    $answer8 = $_POST['vraag8'];
    $answer9 = $_POST['vraag9'];
    $answer10 = $_POST['vraag10'];

    $sql = 'INSERT INTO 
    participant_answers(firstanswer, secondanswer, thirdanswer, fourthanswer, fifthanswer, sixthanswer, seventhanswer, eighthanswer, ninthanswer, tenthanswer) 
    VALUES (:firstanswer, :secondanswer, :thirdanswer, :fourthanswer, :fifthanswer, :sixthanswer, :seventhanswer, :eighthanswer, :ninthanswer, :tenthanswer)';
    $statement = $pdo->prepare($sql);
    $statement -> execute([
        'firstanswer' => $answer1, 
        'secondanswer' => $answer2, 
        'thirdanswer' => $answer3,
        'fourthanswer' => $answer4,
        'fifthanswer' => $answer5,
        'sixthanswer' => $answer6,
        'seventhanswer' => $answer7,
        'eighthanswer' => $answer8,
        'ninthanswer' => $answer9,
        'tenthanswer' => $answer10,
    ]);
}

/*'idparticipant'=>$_SESSION['id'],*/


if(isset($_POST['vraag1'])) {
    saveanswers();
}
<?php
include 'config.php';

function participant() {
global $pdo;
$leaderboard = $pdo-> query('SELECT * FROM participants;')
->fetchAll(PDO::FETCH_ASSOC);

return $leaderboard;
 }
