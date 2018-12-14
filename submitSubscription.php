 <?php 
    
	//session_start();
    $menuActive_debug = "active";
    define("MY_INC_CODE", 888);
    define("APPLICATION_PATH", "app");
    define("VIEW_PATH", APPLICATION_PATH . "/view");
    
	include (APPLICATION_PATH . "/inc/config.inc.php");
	include (APPLICATION_PATH . "/inc/db.inc.php");
 	
 ?>
  
<?php
    $emailValue =  $_REQUEST['mail'];
    $nameValue  =  $_REQUEST['name'];
    
	echo $emailValue;

    if (!$db) {
        echo "Erro connection";
        die("Connection failed: " . $conn->connect_error);
    } 

    $stm = "insert into Subscription (Subscription_Email, Subscription_Name) values ('$emailValue', '$nameValue');";
    $return = $db->exec($stm);
    
    if(!$return) {
          echo $db->lastErrorMsg();
          header("Location: privatepage3.php?deleteStatus=dbfail");
    } 
    else {
          header("Location: privatepage3.php?deleteStatus=ok");
    }
        
    $db->close(); 
?>
