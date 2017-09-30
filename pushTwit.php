<?php

include ("./sqlgiris.php");

  $userid=$_POST["userid"];
  $content=$_POST["content"];


if ($_POST["content"]) {

if(!empty($content)) {
    $ekle= mysql_query("INSERT INTO tbltwit (twit,tarih,id) values ('$content',NOW(),".$userid.")");
    if($ekle){
      echo "Kayit islemi basarili";
    }else {
      echo "Kayit isleminde Bir hata Olustu";
    }
}
}
?>  