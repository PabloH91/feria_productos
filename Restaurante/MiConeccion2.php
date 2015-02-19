<?php
$db = new mysqli('localhost','root','','feria');
if ($db->connect_error){
	$error = $db->connect_error;	
}
$db->set_charset('utf8');
?>