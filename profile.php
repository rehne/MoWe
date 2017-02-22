<?php
	include("functions/check.php");
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>movieDB | Profile</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script language="javascript" type="text/javascript" src="./js/test.js"></script>
	</head>
  <?php
    include('inc/navbar.inc.php');
  ?>
		<div class="container">
	    <div class="jumbotron jumbotron-fluid">
		    <table class="table table-striped table-hover">
          <tr><th><h3>Einstellungen</h3></th></tr>
          <tr><td><button onclick="wurstfunk()">Exmatrikulieren?</button></td></tr>
          <tr><td><button onclick="myFunction2()">Persönliche Daten ändern</button></td></tr>
          <tr><td><button onclick="myFunction3()">Mitgliedschaft kündigen</button></td></tr>
        </table>
        <div id="wurst"> This is my DIV</div>
        <table class="table table-striped table-hover">
          <tr><th><h3>Filmeinstellung</h3></th></tr>
          <td><button onclick="myFunction4()">Lieblingsgenre</button></td></tr>
          <td><button onclick="myFunction5()">Lieblingsfilme</button></td></tr>
          <td><button onclick="myFunction6()">Rezensionen</button></td></tr>
	      </table>
			  <h1 class="hello">Hallo, <em><?php echo $login_user;?>!</em></h1>
			  <a href="functions/logout.php" style="font-size:18px">Logout?</a>
			</div>
		</div>
	</body>
</html>
