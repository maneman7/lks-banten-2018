<!DOCTYPE html>
<html>
<head>
	<title>Admin - Banten Library</title>
	<link rel="stylesheet" type="text/css" href="<?= url() ?>public/stylesheets/eman.css">
	<link rel="stylesheet" type="text/css" href="<?= url() ?>public/stylesheets/admin.css">
<link rel="icon" href="<?= url() ?>public/images/favicon.jpg">
</head>
<body>

<div class="admin-header">
	<p align="center"><a href="<?= url() ?>"><img src="<?= url() ?>public/images/logo.png" height="30px"></a></p>
</div>
	<div class="sidebar">
		<h4>MENU :</h4>
		<ul>
			<li><a href="<?= url() ?>admin/">DASHBOARD</a></li>
			<li><a href="<?= url() ?>admin/add">ADD BOOK</a></li>
			<li><a href="<?= url() ?>admin/borrow">DATA PEMINJAMAN</a></li>
		</ul>
	</div>

	<?php 
		$data['books'] = $books;
		switch ($views) {
			case '':
				$this->view('admin/index', $books);
				break;
			
			case 'add':
				$this->view('admin/add');
				break;
			case 'edit':
				$this->view('admin/edit');
				break;
			case 'borrow':
				$this->view('admin/borrow');
				break;
		}

	$this->view("index");
	 ?>