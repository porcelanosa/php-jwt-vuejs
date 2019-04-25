<?php
	require 'vendor/autoload.php';
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();
    $url          = getenv('URL');
    $authName     = getenv('USER');
    $authPassword = getenv('PASS');
    $baseUrl = getenv('BASE_URL');
    date_default_timezone_set('Europe/Moscow');
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=$baseUrl?>dist/app.css">
	<title>JWT-PHP-VUEJS</title>
</head>
<body><div id=app>{{ message }}</div><script src="<?=$baseUrl;?>dist/app.js"></script></body></html>
