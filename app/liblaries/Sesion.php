<?php

	Class Sesion
	{
		public function cekLogin()
		{
			if(isset($_SESSION['status']))
			{
				if($_SESSION['status'] == true)
				{
					redirect(site_url . 'dashboard');			
				}
			}
		}

		public function cekBelum()
		{
			if(isset($_SESSION['status']))
			{
				if($_SESSION['status'] != true)
				{
					redirect(site_url . 'login');			
				}
			}
			else
			{
				redirect(site_url . 'login');			
			}	
		}
	}