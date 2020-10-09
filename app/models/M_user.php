<?php

	Class M_user extends Model
	{
		function __construct()
		{
			// Wajib Ada
			parent::__construct();
		}

		public function get_user()
		{
			$sql = "SELECT * FROM user";
			$exe = $this->db->query($sql);

			return $exe;
		}
	}