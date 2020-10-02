<?php

	function redirect($url)
	{
		echo "<script>window.location = '{$url}'</script>";
	}

	function redirect_back()
	{
		echo "<script>window.location = '".$_SERVER['HTTP_REFERER'] . "'</script>";
	}

	function generateFont($length = 20) 
	{
	    $str 		= "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max 		= count($characters) - 1;
		for ($i = 0; $i < $length; $i++) 
		{
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}

		return $str;
	}

	function post($post)
	{
		return $_POST["{$post}"];
	}

	function sess($sess)
	{
		return $_SESSION["{$sess}"];
	}

	function get($get)
	{
		return $_GET["{$get}"];
	}