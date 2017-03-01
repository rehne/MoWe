<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'rehne');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'mowe');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db->set_charset("utf8")
?>
