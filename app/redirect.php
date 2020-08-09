<?php

// Include database configuration file
require_once 'src/db/dbConfig.php';
require_once 'src/Shorturl/Shortener.php';

use shorturl\Shortener as Shortener;

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($pdo);

// Retrieve short code from URL
$shortCode = $_GET["c"];

try {
    // Get URL by short code
    $url = $shortener->shortCodeToUrl($shortCode);

    // Redirect to the original URL
    header("Location: " . $url);
    exit;
} catch (Exception $e) {
    // Display error
    echo $e->getMessage();
}