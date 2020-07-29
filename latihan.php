<?php
// class database{
//   private $host,
//           $username,
//           $password,
//           $database;
//   public function __construct($host, $username, $password, $database){
//         $this->host=$host;
//         $this->username=$username;
//         $this->password=$password;
//         $this->database=$database;
//   }
//   public function koneksi(){
//     mysqli_connect($this->host, $this->username, $this->password, $this->database);
//   }
// }
// $db=new database("localhost", "root", "KOPIHITAM645", "latihanoop");
// $db->koneksi();
abstract class bhspemrograman{
  protected $nama,
            $pencipta,
            $jenis;
  abstract public function setNama($nama);
  abstract public function setPencipta($pencipta);
  abstract public function setJenis($jenis);
  abstract public function getInfo();
}
class javascript extends bhspemrograman{
 public function __construct($nama, $pencipta, $jenis){
     $this->nama=$nama;
     $this->pencipta=$pencipta;
     $this->jenis=$jenis;
 }
 public function setNama($nama){
   return $this->nama=$nama;
 }
 public function setPencipta($pencipta){
  return $this->pencipta=$pencipta;
 }
 public function setJenis($jenis){
  return $this->jenis=$jenis;
 }
 public function getInfo(){
  return "Bahasa pemrograman:{$this->nama}, Pencipta:{$this->pencipta}, Jenis:{$this->jenis}";
 }
}
class getI extends javascript{
 public function cetak(javascript  $bhspemrog){
   $str="Bahasa pemrograman:{$bhspemrog->nama}, Pencipta:{$bhspemrog->pencipta}, Jenis:{$bhspemrog->jenis}";
  return $str;
 }
}
$js=new javascript("javascript","Brendan eich","Intrepreter");
echo $js->getInfo();
$cetakInfo=new getI();
echo $cetakInfo->cetak($js);
?>

