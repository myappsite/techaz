<?php
//echo $_POST["use"];
 //$user = $_POST["use"];
 //$url = "Location: http://theos.in/" + $user   ;
 
/* Redirect browser */
header("Location:  http://mobilex.tv/_".$_POST["use"]."");
 
/* Make sure that code below does not get executed when we redirect. */
//exit;

?>