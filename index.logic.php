<?php
require_once "db_conn.php";

$query = "SELECT id, page, content FROM pagecontent";

$result = $db->query($query);
$page = $result->fetch_all(MYSQLI_ASSOC);

?>