<?php


class db{
		public function connect(){
			try{
				$db = "voteroom_shop";
				$koneksi= new PDO("mysql:host=101.50.1.32;dbname=".$db,"voteroom_db","161095");
			}catch(PDOException  $e){
				die($e->getMessage());
			}
			return $koneksi;
		}
	}