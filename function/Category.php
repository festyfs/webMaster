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

		public function showCategoryDetail($parent_id){
			$query=$this->koneksi->prepare("SELECT * FROM categories  WHERE parent = :parent_id");	
			$query->BindParam(':parent_id',$parent_id);	
			$query->execute();
			return $query->fetchAll();		
		}		
	
	}

?>