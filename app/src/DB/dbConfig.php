<?php

// mysql database connection details

$dsn = 'mysql:host=172.23.0.3;dbname=api_db;port=3306';
$db_username = 'root';
$db_password = 'symphoxapp';

try {
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO($dsn, $db_username, $db_password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}

//// open connection to mysql database
//try {
//    $connection = mysqli_connect($host, $username, $password, $dbname);
//} catch(Exception $e) {
//    echo $e->getMessage();
//}

//// check connection
//if (mysqli_connect_errno()) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
//    exit();
//}
//
//// check server
//if (!mysqli_ping($connection)) {
//    printf ("Error: %s\n", mysqli_error($connection));
//}


//class Database{
//    function __construct($pdo)
//    {
//        $this->pdo = $pdo;
//    }
//
//    function getData()
//    {
//        $query = $this->pdo->prepare('SELECT * FROM products');
//        $query->execute();
//        return $query->fetchAll();
//    }
//}
//
//$db = new Database($pdo);
//$rows = $db->getData();
//print_r($rows);
