<?php
	include('functions/login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) {
		header('location: dashboard.php');
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>movieDB | Anmeldung</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	</head>
	<body class="bg">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="jumbotron">
					<a href="index.php"><img width="400" height="250" alt="Moviefy Logo" class="header-image" src="img/logo.png"></a>
					<hr>
					<h2>Anmelden</h2>
					<form method="post" action="">
						<div>
							<label for="username">Username</label>
							<input name="username" type="text" class="form-control" size="25" required>
						</div>
						<div>
							<label for="password">Password</label>
							<input name="password" type="password" class="form-control" size="25" required>
						</div><br>
						<div style="text-align: center;">
							<input type="submit" name="submit" value="Anmelden" class="btn btn-warning btn-lg">
						</div>
					</form>
					<p><?php echo $error;?></p>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-3">
				<div class="jumbotron text-center">
					<p> Du besitzt kein Benutzerkonto? </br>Dann kannst du hier eins erstellen </p>
					<a href="registrieren.php" class="hvr-sweep-to-top"> Registrieren</a>
				</div>
			</div>
		</div>
	</body>
</html>
