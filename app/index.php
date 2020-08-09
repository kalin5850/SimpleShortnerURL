<?php

// Include database configuration file
require_once 'vendor/autoload.php';
require_once 'src/db/dbConfig.php';

//use test\Apple as Apple;
//use test\Banana as Banana;
//use test\Orange as Orange;
//use test\Seeds\Melon as Melon;
//use src\Spinach as Spinach;
use db\Database as DB;
use shorturl\Shortener as Shortener;

//$apple = new Apple();
//$banana = new Banana();
//$orange = new Orange();
//$melon = new Melon();
//$spinach = new Spinach();

$db = new DB($pdo);
$rows = $db->getData();
//print_r($rows);

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($pdo);

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_short_urls';
    }
}

if ($action == 'list_short_urls') {
    try {
        $list_short_urls = $shortener->getLongUrlFromDB();
        include('src/Shorturl/index.tpl.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
} elseif ($action == 'shortcode') {
    $longURL = filter_input(INPUT_POST, 'domain');
    try{
        // Get short code of the URL
        $shortCode = $shortener->urlToShortCode($longURL);

        // redirect to home page
        header("location:index.php");
    }catch(Exception $e){
        // Display error
        echo $e->getMessage();
    }
}