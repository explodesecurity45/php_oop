<?php 
abstract class siswa{
	protected $nama,
	          $nis,
	          $kelas,
	          $jurusan,
	          $email;
    abstract  public function setNama($nama);
    abstract  public function setNis($nis);
    abstract  public function setKelas($kelas);
    abstract  public function setJurusan($jurusan);
    abstract  public function setEmail($email);
} 
class afit extends siswa{
  public function __construct($nama,$nis,$kelas,$jurusan,$email){
  	$this->nama=$nama;
  	$this->nis=$nis;
  	$this->kelas=$kelas;
  	$this->jurusan=$jurusan;
  	$this->email=$email;
  }
  public function setNama($nama){
  	 $this->nama=$nama;
  }
  public function setNis($nis){
  	$this->nis=$nis;
  }
  public function setKelas($kelas){
  	$this->kelas=$kelas;
  }
  public function setJurusan($jurusan){
  	$this->jurusan=$jurusan;
  }
  public function setEmail($email){
  	$this->email=$email;
  }
  public function getNama(){
  	return $this->nama;
  }
  public function getNis(){
    return $this->nis;
  }
  public function getKelas(){
    return $this->kelas;
  }
  public function getJurusan(){
    return $this->jurusan;
  }
  public function getEmail(){
    return $this->email;
  }

}
class ahlan extends siswa{
   public function __construct($nama,$nis,$kelas,$jurusan,$email){
  	$this->nama=$nama;
  	$this->nis=$nis;
  	$this->kelas=$kelas;
  	$this->jurusan=$jurusan;
  	$this->email=$email;
  }
  public function setNama($nama){
  	 $this->nama=$nama;
  }
  public function setNis($nis){
  	$this->nis=$nis;
  }
  public function setKelas($kelas){
  	$this->kelas=$kelas;
  }
  public function setJurusan($jurusan){
  	$this->jurusan=$jurusan;
  }
  public function setEmail($email){
  	$this->email=$email;
  }
  public function getNama(){
  	return $this->nama;
  }
  public function getNis(){
    return $this->nis;
  }
  public function getKelas(){
    return $this->kelas;
  }
  public function getJurusan(){
    return $this->jurusan;
  }
  public function getEmail(){
    return $this->email;
  }

}
class ailsa extends siswa{
   public function __construct($nama,$nis,$kelas,$jurusan,$email){
  	$this->nama=$nama;
  	$this->nis=$nis;
  	$this->kelas=$kelas;
  	$this->jurusan=$jurusan;
  	$this->email=$email;
  }
  public function setNama($nama){
  	 $this->nama=$nama;
  }
  public function setNis($nis){
  	$this->nis=$nis;
  }
  public function setKelas($kelas){
  	$this->kelas=$kelas;
  }
  public function setJurusan($jurusan){
  	$this->jurusan=$jurusan;
  }
  public function setEmail($email){
  	$this->email=$email;
  }
  public function getNama(){
  	return $this->nama;
  }
  public function getNis(){
    return $this->nis;
  }
  public function getKelas(){
    return $this->kelas;
  }
  public function getJurusan(){
    return $this->jurusan;
  }
  public function getEmail(){
    return $this->email;
  }

}
$afit=new afit("Afit Suradiradja","13045","XII","Multimedia","afitsuradiradja45@gmail.com");
$ahlan=new ahlan("Ahlandika Wirasatria","13046","XII","Multimedia","ahlawirosableng72@gmail.com");
$ailsa=new ailsa("Ailsa azahri","13047","XII","Multimedia","ecacing90@gmail.com");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan oop</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
  <h1 class="text-center">Daftar siswa</h1>
<div class="container">
 <div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Nis</th>
          <th scope="col">Kelas</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?= $afit->getNama(); ?></td>
          <td><?= $afit->getNis(); ?></td>
          <td><?= $afit->getKelas();?></td>
          <td><?= $afit->getJurusan();?></td>
          <td><?= $afit->getEmail();?></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><?= $ahlan->getNama();?></td>
          <td><?= $ahlan->getNis(); ?></td>
          <td><?= $ahlan->getKelas(); ?></td>
          <td><?= $ahlan->getJurusan(); ?></td>
          <td><?= $ahlan->getEmail(); ?></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td><?= $ailsa->getNama(); ?></td>
          <td><?= $ailsa->getNis(); ?></td>
          <td><?= $ailsa->getKelas();?></td>
          <td><?= $ailsa->getJurusan();?></td>
          <td><?= $ailsa->getEmail();?></td>
        </tr>
      </tbody>
    </table>
  </div>
 </div>
</div>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>									
</body>
</html>