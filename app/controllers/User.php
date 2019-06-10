<?php

class User extends Controller{

	public function login(){
		$this->view('login');
	}

	public function register()
	{
		$this->view('register');
	}

	public function do_login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$check = $this->db->query("SELECT * FROM users WHERE username=:username", [':username' => $username]);
		$checkCount = count($check);
		if($checkCount != 0){
			if(password_verify($password, $check[0]->password)){
				$_SESSION['auth'] = true;
				$_SESSION['id'] = $check[0]->id;
				$_SESSION['data'] = $check[0];
				redirect(url());
			}else{
				echo '<script>alert("Login gagal, Username atau Password Salah");window.location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
			}
		}else{
			echo '<script>alert("Login gagal, Akun Anda tidak terdaftar");window.location.href="'.$_SERVER['HTTP_REFERER'].'";</script>';
		}
	}

	public function registration()
	{
		$record = [
			'fullname' => $_POST['fullname'],
			'username' => $_POST['username'],
			'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
			'level' => 1
		];

		$this->db->insert('users', $record);

		redirect(url('user/login'));
	}

	public function logout()
	{
		session_destroy();

		redirect(url('user/login'));
	}
}