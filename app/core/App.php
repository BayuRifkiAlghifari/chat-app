<?php

	Class App
	{
		protected $controller 	= 'Home';
		protected $method 		= 'index';
		protected $params 		= [];

		function __construct()
		{
			$url = $this->parseURL();

			$url[0] = ucfirst($url[0]);
			
			// Controller cek
			if(file_exists('../app/controllers/' . $url[0] . '.php'))
			{
				$this->controller = $url[0];

				unset($url[0]);
			}

			require_once '../app/controllers/' . $this->controller . '.php';

			$this->controller 	= new $this->controller; 

			// Method cek
			if(isset($url[1]))
			{
				if (method_exists($this->controller, $url[1]))
				{
					$this->method = $url[1];

					unset($url[1]);
				}
			}

			//	Parameter cek
			if(!empty($url))
			{
				$this->params 	= array_values($url);
			}

			//	Menjalankan controller dan method dan kirim parameter
			call_user_func_array([	$this->controller, 
									$this->method 	],

									$this->params);

		}

		public function parseURL()
		{
			if( isset($_GET['url']) )
			{
				// Ngilangin / yang ada di akhir
				$url 	= rtrim($_GET['url'], '/');

				// Nglilangin huruf ajaib
				$url 	= filter_var($url, FILTER_SANITIZE_URL);

				// Ngubah Url ke bentuk array
				$url 	= explode('/', $url);

				return $url;
			}
		}
	}