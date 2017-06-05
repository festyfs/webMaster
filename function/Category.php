<?php
	include_once 'connect.php';
	
	class Category{
		private $koneksi;
		
		public function __construct(){
			$db = new db();
			$this->koneksi  = $db->connect();
		}
		
		public function insert(){				
				
		}
		
		public function showAll(){
			$query=$this->koneksi->prepare("SELECT * FROM categories  WHERE parent IS NULL");		
			$query->execute();
			return $query->fetchAll();		
		}
		
	
	}

?>