<?php

class DB extends PDO{

	protected $db;

	private $_dbVend = "mysql";

	private $_dbHost = "localhost";

	private $_dbName = "lks_wd_30";

	private $_dbUser = "root";

	private $_dbPass = "";

	private $_query;

	private $_data;


	public function __construct()
	{
		parent::__construct("{$this->_dbVend}:host={$this->_dbHost};dbname={$this->_dbName};", $this->_dbUser, $this->_dbPass);
		parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		parent::setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}

	public function insert($table, $data)
	{
		foreach($data as $key => $value){
			$newData[":" . $key] = $value;
		}

		$columns = implode(", ", array_keys($data));
		$values = implode(", ", array_keys($newData));

		$q = "INSERT INTO {$table} ({$columns}) VALUES ($values)";

		$this->_query = $q;
		$this->_data = $newData;
	}

	public function update($table, $data, $where = [], $operator = "AND")
	{
		foreach($data as $key => $value){
			$newData[":" . $key] = $value;

				if(substr($value,0, 1) == "*"){
					unset($data[$key]);
					$sets[] = $key . "=" . trim($value, "*");
				}else{
					$sets[] = $key . "=:" . $key;
				}
			}

		$sets = implode(", ", $sets);
		$q = "UPDATE {$table} SET {$sets}";

		if($where){
			foreach($where as $key => $value){
				$wheres = $key . "=:w_" . $key;
				$whereData[":w_" . $key] = $value;
			}

			$q .= " WHERE " . implode(" ".$operator." ", $wheres);
		}

		$this->_query = $q;
		$this->_data = array_merge($newData, $whereData);
		// print_r($q);die();
	}

	public function delete($table, $where = [], $operator = "AND")
	{
		$q = "DELETE FROM {$table}";
		if($where){
			foreach($where as $key => $value){
				$wheres = $key . "=:d_" . $key;
				$whereData[":d_" . $key] = $value;
			}
		$q .= " WHERE " . implode(" ".$operator." ", $wheres);
		
		}
		$this->_query = $q;
		$this->_data = $whereData;
		// print_r($whereData);die();
	}

	public function query($query, $data = [])
	{
		$query = parent::prepare($query);

		if($data){
			$query->execute($data);
		}
		$query->execute();
		return $query->fetchAll();
	}

	public function __destruct()
	{
		if($this->_data){
			$query = parent::prepare($this->_query);
			$query->execute($this->_data);
		}
	}
}