<!DOCTYPE html>
<html lang="en">
<?PHP 

/* All my inclusions */
include 'secure/config.php'; /* Database connection */
include 'view/header.php'; /* Stylesheet connection and metadata */ 
include 'model/model.php'; /* All my PHP & Javascript functions */

/* Calling all my functions before the application reveals */
$questions = questionquery(); /* Set a function in a variable to save its answer. */

?>

<body>
<div class="parent">
    <div class="child">
        <h1>Quiz</h1>
        <p class="undertitle">Welcome to the quiz, fill in your answers and see if you will win the ultimate prize!</p>
        <h2>
        <div class="quizcontainer">
            <form onSubmit="model/model.php" method="post" class="quizform">
                <?PHP foreach ($questions as $question) { ?>
                    <ul>
                    <h2><?= htmlentities($question['questions'])?></h2>
                        <li><input type="radio" class="question" name="vraag<?= htmlentities($question['idquestions'])?>" value="1"><?= htmlentities($question['firstchoice'])?></input></li>
                        <li><input type="radio" class="question" name="vraag<?= htmlentities($question['idquestions'])?>" value="2"><?= htmlentities($question['secondchoice'])?></input></li>
                        <li><input type="radio" class="question" name="vraag<?= htmlentities($question['idquestions'])?>" value="3"><?= htmlentities($question['thirdchoice'])?></input></li>    
                    </ul>
                <?PHP } ?>
                    <input type="submit" name="submit" value="Send Your Answers"></input>
            </form>
        </div>
    </div>
</div>
</body>
</html>

