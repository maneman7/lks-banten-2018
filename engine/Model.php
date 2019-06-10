<?php

class Model extends DB{

	protected $db;

	public function __construct()
	{
		$this->db = new DB;
	}
}