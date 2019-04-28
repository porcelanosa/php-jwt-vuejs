<?php
    require 'vendor/autoload.php';
    
    //use Dotenv\Dotenv;
    
    use Zend\Config\Factory;
    
    $config = Factory::fromFile('config/config.php', true);
    
//    $dotenv = new Dotenv(__DIR__);
//    $dotenv->load();
//    $url          = getenv('URL');
//    $authName     = getenv('USER');
//    $authPassword = getenv('PASS');
//    $baseUrl = getenv('BASE_URL');
    date_default_timezone_set('Europe/Moscow');
?>
