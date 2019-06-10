<?php

class Controller extends DB{

	protected $db;

	public function __construct()
	{
		$this->db = new DB;
	}

	public function model($file, $data = [])
	{
		require PATH . 'app/models/' . $file . '.php';

		$this->$file = new $file;

		return $this;
	}

	public function view($file, $data = [])
	{
		if($data){
			extract($data);
		}

		require PATH . 'app/views/' . $file . '.php';
	}
}