<?php
	
	header('Access-Control-Allow-Origin: *');
	
	session_start();
	
	require_once 'core/App.php';
	require_once 'core/Controller.php';
	require_once 'core/Model.php';

	require 'config/config.php';
	require 'config/database.php';
	require 'config/helper.php';

	//Load Config
	require '../vendor/autoload.php';