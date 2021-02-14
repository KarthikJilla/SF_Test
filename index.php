<?php
 if(isset($_GET["device"]) && ! empty($_GET["device"])) {
	$device =$_GET["device"];
}else{
	$device = 'desktop';
}

if($device == 'mobile'){
	require_once('mobile/index.php');	
}
else{
	require_once('desktop.php');
}
?>
	
	