<?php 
class database{
	 $host="localhost";
	 $uname="root";
	 $pass="KOPIHITAM645";
	 $db="latihanoop";
	 function __construct(){
	 	mysqli_connect($this->host,$this->uname, $this->pass, $this->db);
	 }
} 
?>
