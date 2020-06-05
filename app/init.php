<?php
	
	header('Access-Control-Allow-Origin: *');
	
	session_start();
	
	spl_autoload_register(function($name)
	{	
		require_once 'core/' . $name . '.php';
	});

	require 'config/config.php';
	require 'config/database.php';
	require 'config/helper.php';

	//Load Config