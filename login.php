<?php

include ("sqlgiris.php");

  $adi=$_POST["adi"];
  $soyadi=$_POST["soyadi"];
  $kadi  = $_POST["kadi"];
  $sifre  = $_POST["sifre"];
  $eposta = $_POST["eposta"];
  $dtarihi =$_POST["dtarihi"];


if ($_POST["kadi"]) {


	if(!empty($kadi) && !empty($sifre) && !empty($eposta)) {

		$ekle= mysql_query("INSERT INTO `tbluye` (`id`, `adi`, `soyadi`, `kadi`, `sifre`, `eposta`, `dtarihi`) VALUES (NULL, '$adi', '$soyadi', '$kadi', '$sifre', '$eposta', '$dtarihi')");
    if($ekle){
      echo "Kayit islemi basarili";
    }else {
      echo "Kayit isleminde Bir hata Olustu";
    }

	}
	else {
		echo "Verilen Bosluklar Bos Bırakılamaz";
	}
	# code...
}else {
	echo "post edilmedi";
}
?>