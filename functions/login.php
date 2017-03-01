<?php
	session_start();


	$error = ""; // Variable um die Fehler zu speichern
	if(isset($_POST["anmelden"])) {
		if(empty($_POST["username"]) || empty($_POST["password"])) {
			$error = "Both fields are required.";
		} else {
			// Definieren von Username und Passwort
			$username = $_POST['username'];
			$password = $_POST['password'];

			// Vor MYSQL injektionen schützen
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);

			//Username und Password in der Datenbank checken
			$sql = "SELECT uid FROM users WHERE username='$username' and password='$password'";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			//Wenn der Username und das Passwort mit einem Eintrag in der DB übereinstimmen öffne die Session
			//Anderenfalls wird mit Echo ein Error ausgegeben

			if(mysqli_num_rows($result) == 1) {
				$_SESSION['username'] = $username; // Session Initialisieren
				header("location: ../dashboard.php"); // Umleitung auf andere Seite
			} else {
				$error = "Username oder Passwort nicht korrekt.";
			}
		}
	}

?>
