<?php


	
	  session_start();  
      ob_start();  
      session_destroy();  
      echo "�ikis Yaptiniz.Ana Sayfaya Y�nlendiriliyorsunuz";  
      header("Refresh: 2; url=default.php"); 

?>