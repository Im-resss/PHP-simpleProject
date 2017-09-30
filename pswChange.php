<?php

include("./sqlgiris.php");
ob_start();
session_start();
if($_POST["eskisifre"]){
$eskisifre=$_POST["eskisifre"];
$yenisifre=$_POST["yenisifre"];
$yenisifretekrar=$_POST["yenisifretekrar"];
$id=$_SESSION["id"];
if ($yenisifre==$yenisifretekrar) {
  $guncelle= mysql_query("UPDATE tbluye SET sifre='$yenisifre' WHERE id=".$id); 
if ($guncelle) {
  echo "basarili";
}
else
  echo "basarisiz";
}
else
  echo "hata";
}
?>