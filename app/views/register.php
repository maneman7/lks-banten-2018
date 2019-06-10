<?php $this->view('components/head') ?>
<style type="text/css">
	.login{
		width: 400px;
		margin:100px auto;
		background-color: #fff;
		padding: 15px;
		border-top: 4px solid #18a085;
		border-radius: 4px;
	}

	input{
		margin-top:5px;
		margin-bottom: 15px;
	}

	.btn-login{
		border:0;
		background: #18a085;
		color:#fff;
		margin-top: 10px;
		cursor: pointer;
	}
</style>
<div class="login">
	<p align="center"><a href="<?= url() ?>"><img src="<?= url() ?>public/images/logo.png" style="height:25px; margin-bottom: 25px;"></a></p>
	<form action="<?= url() ?>user/registration" method="post">
		<label>Full Name</label>

		<input type="text" name="fullname" placeholder="Type your Full Name" required>

		<label>Username</label>
		<input type="text" name="username" placeholder="Type your Username" required>

		<label>Password</label>
		<input type="password" name="password" placeholder="Type your Password" required>

		<a style="color:#18a085;" href="<?= url('user/login')?> ">Login if have an Account</a><br>

		<button class="btn-login">Register</button>
	</form>
</div>