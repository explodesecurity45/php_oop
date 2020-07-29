<?php 
abstract class kalkulator{
  public $kali,
         $bagi,
         $tambah,
         $kurang,
         $modulus;
  abstract public function kali($angka1, $angka2);
  abstract public function bagi($angka1, $angka2);
  abstract public function tambah($angka1, $angka2);
  abstract public function kurang($angka1, $angka2);
  abstract public function modulus($angka1, $angka2);
}
class operasi extends kalkulator{
	public function kali($angka1, $angka2){
		$kali=$angka1*$angka2;
    return $kali;
	}
	public function bagi($angka1, $angka2){
		 $bagi=$angka1 / $angka2;
     return $bagi;
	}
	public function tambah($angka1, $angka2){
		$tambah=$angka1 + $angka2;
    return $tambah;
	}
	public function kurang($angka1, $angka2){
		$kurang=$angka1 - $angka2;
    return $kurang;
	}
  public function modulus($angka1, $angka2){
    $modulus=$angka1 - $angka2;
    return $modulus;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator dengan konsep oop</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<body>
<h1 align="center">Kalkulator</h1>
<div class="container">
  <div class="row center">
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="angka 1" name="angka1" autocomplete="off">
    </div>
    <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" name="op">
        <option>Kali</option>
        <option>Bagi</option>
        <option>Tambah</option>
        <option>Kurang</option>
        <option>Modulus</option>
      </select>
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="angka 2  " name="angka2" autocomplete="off">
    </div>
     <p style="font-size:20px;margin-right:2px;">=</p>
     <p style="font-size:20px;">
       <?php 
        $operasi=new Operasi();
        $angka1=$_POST["angka1"];
        $angka2=$_POST["angka2"];
        $op=$_POST["op"];
        if($op ==="Kali"){
         echo $operasi->kali($angka1, $angka2);
        }else if($op === "Bagi"){
         echo $operasi->bagi($angka1, $angka2);
        }else if($op === "Tambah"){
         echo  $operasi->tambah($angka1, $angka2);
        }
        else if($op === "Kurang"){
          echo $operasi->kurang($angka1, $angka2);
        }
        else{
          echo $operasi->modulus($angka1, $angka2);
        }
        ?>
     </p>
 </div>
<button type="submit" class="btn btn-primary">Gas</button>
</div>  
</div>
</form>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>