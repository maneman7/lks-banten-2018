<?php

class Admin extends Controller{
 
	
	public function index($views)
	{	
		if($_SESSION['data']->level != 2){
			redirect(url('user/login'));
		}

		$data['books'] = $this->db->query("SELECT * FROM books ORDER BY id DESC");
		$data['views'] = $views;
		var_dump($view);

		
		$this->view('admin/dashboard', $data);
	}
}