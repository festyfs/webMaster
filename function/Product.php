<?php
	include_once 'connect.php';
	
	class Product{
		private $koneksi;
		
		public function __construct(){
			$db = new db();
			$this->koneksi  = $db->connect();
		}
		
		public function insert(){				
				
		}
		
		public function show($id){
			$query=$this->koneksi->prepare("SELECT * FROM products where id=:id");			
			$query->BindParam(':id',$id);
			$query->execute();

			return $query->fetch();		
		}
		
	
	}

?>