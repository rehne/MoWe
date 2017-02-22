<?php
	include ("functions/connection.php");

	if(isset($_POST["submit"])) {
		$name = $_POST["name"];
		$password = $_POST["password"];

		$name = mysqli_real_escape_string($db, $name);
		$password = md5($password);

		$sql = "SELECT username FROM users WHERE username = '$name'";
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		if(mysqli_num_rows($result) == 1) {
			$output = "Sorry... Dieser Nutzername existiert bereits.";
		} else {
			$query = mysqli_query($db, "INSERT INTO users (username, password) VALUES ('$name', '$password')");
			$msg = "Vielen Dank! Du bist nun registriert!";
		}
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>movieDB</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	</head>
	<body class="bg">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="jumbotron">
					<a href="index.php"><img width="400" height="250" alt="Moviefy Logo" class="header-image" src="/mowe/img/logo.png"></a>
					<hr>
					<h2>Anmelden</h2>
					<form method="post" action="">
						<fieldset>
							<legend>Registration Form</legend>
							<table width="400" border="0" cellpadding="10" cellspacing="10">
								<tr>
									<td style="font-weight: bold"><label for="name">Name</label></td>
									<td><input name="name" type="text" class="form-control" size="25" required /></td>
								</tr>
								<tr>
									<td height="23" style="font-weight: bold"><label for="password">Passwort</label></td>
									<td><input name="password" type="password" class="form-control" size="25" required /></td>
								</tr>
								<tr>
									<td height="23"></td>
								</tr>
							</table>
							<div align="center">
  							<input type="submit" name="submit" value="Register!" />
							</div>
						</fieldset>
					</form>
					<?php if ( isset( $output ) ) {  echo '<div class="redbox">' . $output . '</div>';}   ?>
					<?php if ( isset( $msg ) ) {  echo '<div class="greenbox">' . $msg . '</div>';}   ?>
					<div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
