<?php
	include("functions/check.php");
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>movieDB | Home</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="jumbotron">
					<h1 class="hello">Hello, <em><?php echo $login_user; ?>!</em></h1>
					<a href="functions/logout.php" style="font-size:18px">Logout?</a>
				</div>
			</div>
		</div>
	</body>
</html>
