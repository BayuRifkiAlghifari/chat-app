<?php

	Class M_user extends Model
	{
		function __construct()
		{
			// Wajib Ada
			parent::__construct();

			// $this->insert('Nama table', 'Data array')
			// $this->update('("Nama row id" => 'ID Value')', 'Nama table', 'Data array')
			// $this->delete('("Nama row id" => 'ID Value')', 'Nama table')
		}
	}