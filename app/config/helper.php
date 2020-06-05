<?php

	function redirect($url)
	{
		echo "<script>window.location = '{$url}'</script>";
	}

	function redirect_back()
	{
		echo "<script>window.location = '".$_SERVER['HTTP_REFERER'] . "'</script>";
	}

	function post($post)
	{
		$_POST["{$post}"];
	}

	function sess($sess)
	{
		$_SESSION["{$sess}"];
	}

	function get($get)
	{
		$_GET["{$get}"];
	}