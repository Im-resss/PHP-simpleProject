<?php
error_reporting(0);
include("sqlgiris.php");
ob_start();
session_start();
if ($_POST["kadi"]) {
	
	$kadi  = $_POST["kadi"];
	$sifre = $_POST["sifre"];
	
	$bul = mysql_query("select * from tbluye where kadi='$kadi' && sifre='$sifre'");
	
	$kontrol = mysql_num_rows($bul);
	if ($kontrol > 0) {
		$goster = mysql_fetch_array($bul);
		$_SESSION["oturum"] = true;
		$_SESSION["id"]=$goster["id"];
		$_SESSION["adi"] =$goster["adi"];
		$_SESSION["soyadi"] =$goster["soyadi"];
		$_SESSION["kadi"] = $kadi;
		$_SESSION["sifre"] = $sifre;
		$_SESSION["eposta"] =$goster["eposta"];
		$_SESSION["dtarihi"] =$goster["dtarihi"];
		echo "basarili";
		
	} else{
		echo "Giris Basarisiz";
	}
}else{

	echo "Post edilemedi";
}
?>
