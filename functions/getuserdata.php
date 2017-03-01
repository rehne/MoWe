<?php
$result = mysqli_query($db,"SELECT * FROM users WHERE username='$login_user' ");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$uemail = $row['uemail'];
		$uname = $row['uname'];
		$unname = $row['unname'];
		$uadresse = $row['uadresse'];
		$ustadt = $row['ustadt'];
		$uland = $row['uland'];
		$ualter = $row['ualter'];
?>