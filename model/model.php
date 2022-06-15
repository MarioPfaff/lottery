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

include 'secure/config.php';

function participant() {
global $pdo;
$leaderboard = $pdo-> query('SELECT * FROM participants')
->fetchAll(PDO::FETCH_ASSOC);

return $leaderboard;
}

function inlogAction(){

   
    if(isset($_POST['username']))
    { 
       global $pdo;
        $name = filter_input(INPUT_POST,'username');//$_POST['name'];
    
        $password = filter_input(INPUT_POST,'password');//$_POST['password'];
        $hashed_password = hash('sha256',$password);
    
        $sql = 'SELECT name, password FROM participants
        WHERE name = :name';
        $statement = $pdo->prepare($sql);
    
        $statement->bindParam(':name',$name);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if(is_array($user))
        {
    
                if($user['password']==$hashed_password)
                {
                    $_SESSION['username']=$name;
                    if(isset($_SESSION['username'])) {

                       
                        echo '<a href="?action=logout"><div class="Spel">log uit</div></a>';
                        
                           
                        
                    }
                  
                
                }
       
   
            else{     
                
                echo '<a href="?action=login" target="blank"><div class="Spel">registreer/login</div></a>';
              include 'FoutInlog.php';
                
                
                }
            }
            else{
                include 'FoutInlog.php';
                
            }
        }
        else
        {
            include 'view/form.php';
            
        }
    }
 
    function uitlogAction(){
        session_unset();
        if(isset($_SESSION)){
            session_destroy();
    
        }}
 
