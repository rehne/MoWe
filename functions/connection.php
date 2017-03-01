<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '827ccb0eea8a706c4c34a16891f84e7b');
define('DB_DATABASE', 'mowe');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db->set_charset("utf8")
?>
