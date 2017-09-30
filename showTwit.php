<?php

include ("./sqlgiris.php");

$sql=mysql_query("SELECT * FROM tbltwit INNER JOIN tbluye ON tbltwit.id=tbluye.id ORDER BY tbltwit.id DESC");

$twitler["twitler"]=array();

while($satir=mysql_fetch_array($sql)){
  array_push($twitler["twitler"],array('twitid'=>$satir["twitid"],'twitcontent'=>$satir["twit"],'date'=>$satir["tarih"],'username'=>$satir["kadi"]));
}

echo json_encode($twitler);
?>  