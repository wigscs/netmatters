<?php

// Autoload composer packages
require realpath(__DIR__ . '/../vendor/autoload.php');

// Autoload app classes
function autoloader($class_name)
{
    foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . '*') as $dir) {
        if (file_exists($dir . DIRECTORY_SEPARATOR . $class_name . '.php')) {
            require_once($dir . DIRECTORY_SEPARATOR . $class_name . '.php');
            break;
        }
    }
}
spl_autoload_register('autoloader');

// Load .env vars to $_ENV
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Create DB connection
$dsn = "mysql:host=".$_ENV['DB_HOST'].";port=".$_ENV['DB_PORT'].";dbname=".$_ENV['DB_DATABASE'].";user=".$_ENV['DB_USERNAME'].";password=".$_ENV['DB_PASSWORD'];
$db = new Connection($dsn);
