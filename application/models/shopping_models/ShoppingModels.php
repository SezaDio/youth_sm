<?php

	class ShoppingModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data produk shopping
		function get_data_produk()
		{
			$query = $this->db->query("SELECT * FROM `shopping`");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}

	}
