<!DOCTYPE html>
<html>
<head>
	<title><?= $_GET['url'] ? ucwords(explode("/", $_GET['url'])[0]) : 'Home'?> - Banten Library</title>
	<link rel="stylesheet" type="text/css" href="<?= url() ?>public/stylesheets/eman.css">
	<link rel="stylesheet" type="text/css" href="<?= url() ?>public/stylesheets/style.css">
	<link rel="icon" href="<?= url() ?>public/images/favicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>