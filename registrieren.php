<?php
  include('functions/register.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>movieDB | Registrierung</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	</head>
	<body>
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="jumbotron">
					<h1>movieDB</h1>
					<hr>
					<h2>Registrieren</h2>
					<form method="post" action="">
						<div>
							<label for="username">Username</label>
							<input name="username" type="text" class="form-control" size="25" required>
						</div>
						<div>
							<label for="password">Password</label>
							<input name="password" type="password" class="form-control" size="25" required>
						</div><br>
						<input type="submit" name="submit" value="Registrieren" class="btn btn-warning btn-lg">
					</form>
					<p><?php echo $error;?></p>
				</div>
			</div>
		</div>
	</body>
</html>
