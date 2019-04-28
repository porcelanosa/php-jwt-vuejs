<?php
	require_once('init_app.php');
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=$config->get('base_url')?>dist/app.css">
	<title>JWT-PHP-VUEJS</title>
</head>
<body><div id=app>{{ message }}</div><script src="<?=$config->get('base_url')?>dist/app.js"></script></body></html>
