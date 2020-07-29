<?php
require_once 'App/init.php';
$komik=new Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100,"komik");
$game=new  Game("Uncharted","Neil Druckman","Sony Computer",250000, 50, "game");
$cetakProduk=new CetakInfoProduk();
$cetakProduk->tambahProduk($komik);
$cetakProduk->tambahProduk($game);
echo $cetakProduk->cetak();
echo "<hr>";
new Coba();
?>