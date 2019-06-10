<?php

function url($param = null)
{
	$root = "http://". $_SERVER['HTTP_HOST'];
	$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

	return $root . $param;
}

function redirect($param)
{
	header('Location:'.$param);
}