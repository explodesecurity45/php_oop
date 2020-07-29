
<?php 
//Jualan Produk
//Komik
//Game
abstract class Produk{
	 private  $judul="judul",
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
	 public function __construct($judul, $penulis, $penerbit, $harga){
	      $this->judul=$judul;
	      $this->penulis=$penulis;
	      $this->penerbit=$penerbit;
	      $this->harga=$harga;
	}
	 public function getLabel(){
	  return "$this->penulis, $this->penerbit";
	 }
	 abstract public function getInfoProduk();
	 function getInfo(){
	   $str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
	   return $str;
	 }
}
class CetakInfoProduk{
	public $daftarProduk=[];

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[]=$produk;
	}
	  public function cetak(){
	    $str="DAFTAR PRODUK:<br>";
	      foreach($this->daftarProduk as $p){
             $str.="-{$p->getInfoProduk()} <br>";
	      }
	      return $str;
	  }
}
class Komik extends Produk{
	public $jmlHalaman;
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){
           parent::__construct($judul, $penulis, $penerbit, $harga);
           $this->jmlHalaman=$jmlHalaman;
        }
		public function getInfoProduk(){
	     $str="Komik :".$this->getInfo()."-{$this->jmlHalaman} Halaman";
	      return $str; 
		}
}
class Game extends Produk{
	public $wktMain;
	    public function __construct($judul, $penulis, $penerbit, $harga, $wktMain){
	      parent::__construct($judul, $penulis, $penerbit, $harga);
	      $this->wktMain=$wktMain;
	    }
		public function getInfoProduk(){
			$str="Game :".$this->getInfo()."-{$this->wktMain} Jam";
			return $str;
		}
}
// $produk=new Produk();
$komik=new Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100,"komik");
$game=new  Game("Uncharted","Neil Druckman","Sony Computer",250000, 50, "game");
$cetakProduk=new CetakInfoProduk();
$cetakProduk->tambahProduk($komik);
$cetakProduk->tambahProduk($game);
echo $cetakProduk->cetak();