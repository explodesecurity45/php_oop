<?php 
abstract class Produk{
	 protected $judul="judul",
	          $penulis="Rama Fajar",
	          $penerbit="INFORMATIKA",
	          $harga=0,
	          $diskon;
	 // public function sayHello(){
	 //   return "Hello world";
	 // }
	 public function setJudul($judul){
	 	if(!is_string($judul)){
	 		throw new Exception("Judul harus string", 1);
	 	}
	 	return $this->judul=$judul;
	 }
	 public function getJudul(){
	 	return $this->judul;
	 }
	 public function setPenulis($penulis){
	 	if(!is_string($penulis)){
	 		throw new Exception("penulis harus string", 1);
	 	}
	 	return $this->penulis=$penulis;
	 }
	 public function getPenulis(){
	 	return $this->penulis;
	 }
	 public function setPenerbit($penerbit){
	 	if(!is_string($penerbit)){
	 		throw new Exception("penulis harus string", 1);
	 	}
	 	return $this->penerbit=$penerbit;
	 }
	 public function getPenerbit(){
	 	return $this->penerbit;
	 }
	 public function setDiskon($diskon){
        $this->diskon=$diskon;
	  }
	  public function getDiskon(){
	  	return $this->diskon;
	  }
	 public function setHarga(){
	 	return $this->hargar=$harga;
	 }
	 public function getHarga(){
		  return $this->harga-($this->harga*$this->diskon/100);
		}
	 public function __construct($judul="Judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
	      $this->judul=$judul;
	      $this->penulis=$penulis;
	      $this->penerbit=$penerbit;
	      $this->harga=$harga;
	}
	 public function getLabel(){
	  return "$this->penulis, $this->penerbit";
	 }
	 abstract public function getInfo();
}
 ?>