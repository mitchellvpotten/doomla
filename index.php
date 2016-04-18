<?php
require_once "db_conn.php";

$query = "SELECT * FROM pagecontent";

$result = $db->query($query);
$output = $result->fetch_assoc();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


$content = isset($page['content']);

function getContent(){
	global $page;
	$db = new mysqli('localhost' , 'root' , '' , 'doomla');
	
	$query1 = "SELECT * FROM pagecontent WHERE page='$page'";  
	$result1 = $db->query($query1);
	$output = $result1->fetch_assoc();
	echo $output['content'];
}


require 'templates/templates.php';


?>