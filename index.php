<?php
	include_once('functions/connection.php');
	if(isset($_POST["register"])) {
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
include('functions/login.php'); // Include Login Script

if ((isset($_SESSION['username']) != '')) 
	{
	header('location: dashboard.php');
	}
?>
<!doctype html>
<html>
<?php 
include('inc/header.inc.php');
?>

<body>

<div class="modal fade login" id="loginModal">       
		 
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <!-- Close Button -->
                        <h4 class="modal-title">Einloggen mit</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="division">
                                    <div class="line l"></div>
                                      <span></span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Username" name="username">
                                    <input id="password" class="form-control" type="password" placeholder="Passwort" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="Login" name="anmelden">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Username" name="name">
                                <input id="password" class="form-control" type="password" placeholder="Passwort" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Password wiederholen" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Account erstellen" name="register">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Du willst einen
                                 <a href="javascript: showRegisterForm();">Account erstellen</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Du hast bereits einen Account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
		  </div><!-- -- -->
		  
<div class="wrapper">
<?php include('inc/sidebar.inc.php');?>

<div class="main-panel">
	
<?php include('inc/navbar.inc.php');?>    

<div class="container">
        <div class="row">
			<div class="col-6">
      <div class="tile">
        <h3 class="title">Anmelden</h3>
		<button class="btn btn-info btn-fill data-toggle="modal href="javascript:void(0)" onclick="openLoginModal();">Anmelden</button>
      </div>
    </div>
			<div class="col-6">
      <div class="tile">
        <h3 class="title">Registrieren</h3>
		<button class="btn btn-info btn-fill data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal()">Registrieren</button>
		</div>
      </div>
	  </div>
        
       
  
		  
	


</div>

</body>
</html>
