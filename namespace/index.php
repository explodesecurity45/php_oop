<?php
require_once 'App/init.php';
// $komik=new Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100,"komik");
// $game=new  Game("Uncharted","Neil Druckman","Sony Computer",250000, 50, "game");
// $cetakProduk=new CetakInfoProduk();
// $cetakProduk->tambahProduk($komik);
// $cetakProduk->tambahProduk($game);
// echo $cetakProduk->cetak();
// new App\Produk\User();
// echo "<br>";
// new App\Service\User();
use App\Service\User as ServiceUser;
use App\Service\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();
?>