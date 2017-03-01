<?php
	include ("functions/connection.php");	
		$sql = "SELECT * FROM movies ORDER BY mrank";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>