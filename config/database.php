<?php

require_once realpath(dirname(__DIR__) . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_NAME', $_ENV['DB_NAME']);


// Create a PDO connection to the database
try{
    
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
    
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    
    
}catch(PDOException $e){

    echo "Faild to connect ";
    
}


?>