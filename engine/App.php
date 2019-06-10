<?php

class App{

	private $controller = "Home";

	private $method = "index";

	private $params = [];


	public function __construct()
	{
		session_start();
		$_SESSION['auth'] = false;
		// error_reporting(0);

		$path = dirname(__DIR__);
		$path = str_replace("\\", "/", $path) . "/";
		$path = define('PATH', $path);

		$this->load();
		$this->route();
	}

	private function route()
	{
		$url = $this->getUrl();

		if($url[0] != "/" && file_exists(PATH . 'app/controllers/' . $url[0] . '.php')){
			require PATH . 'app/controllers/' . $url[0] . '.php';
			$this->controller = $url[0];
			$test = new $url[0];

			unset($url[0]);

			if(method_exists($test, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}else{
			if($url[0]){
				$this->method = $url[0];
				unset($url[0]);
			}
			require PATH . 'app/controllers/' . $this->controller . '.php';
		}

		$this->params = $url ? $url : [ ];

		$this->controller = new $this->controller;

		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	private function load()
	{
		require PATH . 'engine/Database.php';
		require PATH . 'engine/Helpers.php';
		require PATH . 'engine/Controller.php';
		require PATH . 'engine/Model.php';
	}

	private function getUrl()
	{
		$url = (isset($_GET['url'])) ? explode("/", filter_var(trim($_GET['url'], "/"), FILTER_SANITIZE_URL)) : [''];
		return $url;
	}
}