<?PHP
/* De config van onze connectie aan de database. */
$host = 'localhost'; 
$db = 'lottery';
$user = 'root';    
$pass = '';    
$charset = 'utf8';  

$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; 

$options = [                                        
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {                                               
    $pdo = new PDO($dsn, $user, $pass, $options);

    if($pdo){
        echo "Made connection";
    }
} 

catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>