<?php


	
	  session_start();  
      ob_start();  
      session_destroy();  
      echo "Çikis Yaptiniz.Ana Sayfaya Yönlendiriliyorsunuz";  
      header("Refresh: 2; url=default.php"); 

?>