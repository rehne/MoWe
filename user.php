<?php
include('functions/check.php');
include_once('functions/connection.php');
include('functions/getuserdata.php');
include('functions/getmoviedata.php');
?>
<!doctype html>
<html>
<?php 
include('inc/header.inc.php');
?>
<body>

<div class="wrapper">

<?php include('inc/sidebar.inc.php');?>

<div class="main-panel">
	
<?php include('inc/navbar.inc.php');?>        

<?php
if(isset($_POST["change"])) {

		$uname = $_POST["uname"];
		$uemail = $_POST["uemail"];
		$unname = $_POST["unname"];
		$uadresse = $_POST["uadresse"];
		$ustadt = $_POST["ustadt"];
		$uland = $_POST["uland"];
		$ualter = $_POST["ualter"];
		
		$query = mysqli_query($db, "UPDATE users SET uname = '$uname' WHERE username ='$login_user'");
		$query1 = mysqli_query($db, "UPDATE users SET uemail = '$uemail' WHERE username ='$login_user'");
		$query2 = mysqli_query($db, "UPDATE users SET unname = '$unname' WHERE username ='$login_user'");
		$query3 = mysqli_query($db, "UPDATE users SET uadresse = '$uadresse' WHERE username ='$login_user'");
		$query4 = mysqli_query($db, "UPDATE users SET ustadt = '$ustadt' WHERE username ='$login_user'");
		$query5 = mysqli_query($db, "UPDATE users SET uland = '$uland' WHERE username ='$login_user'");
		$query6 = mysqli_query($db, "UPDATE users SET ualter = '$ualter' WHERE username ='$login_user'");
}			
if(isset($_POST["movieupdate"])) {

		$mname = $_POST["mname"];
		$myear = $_POST["myear"];
		$musk = $_POST["musk"];
		$mrate = $_POST["mrate"];
		$mdesc = $_POST["mdesc"];
		$mlenge = $_POST["mlenge"];
		
		$genre0 = $_POST["genre0"];
		$genre1 = $_POST["genre1"];
		$genre2 = $_POST["genre2"];

		
		
		$query8 = mysqli_query($db, "INSERT INTO movies (mid , mname , myear , musk , mrate , mlenge , mdesc) VALUES ($ID, '$mname', '$myear', '$musk', '$mrate', '$mlenge', '$mdesc')");
		$query7 = mysqli_query($db, "INSERT INTO moviehatgenre (moviemid, moviegenre0, moviegenre1, moviegenre2) VALUES ($ID, $genre0, $genre1, $genre2)");
}	
?>
<div class="content">

	<div class="container-fluid">					
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<div class="header">
                                <h4 class="title">Profil bearbeiten</h4>
								<p class="category">Hier kannst du deine Profildaten ändern!</p>
									<div class="pull-right">
										<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapse01" aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
									</div>
							</div>
						</div>
							<div class="panel-body collapse" id="collapse01">
								<div class="content">
									<form method="POST">
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>Benutzername</label>
													<input type="text" class="form-control" disabled="" placeholder="Benutzername" value="<?php echo("$login_user") ?>">
												</div>
											</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">(Optional)</label>
														<input name="uemail" type="email" class="form-control" placeholder="E-mail Adresse" value="<?php echo("$uemail") ?>">
													</div>
												</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Vorname (Optional)</label>
													<input name="uname" type="text" class="form-control" placeholder="Vorname" value="<?php echo("$uname") ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Nachname (Optional)</label>
													<input name="unname" type="text" class="form-control" placeholder="Nachname" value="<?php echo("$unname") ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Addresse (Optional)</label>
													<input name="uadresse" type="text" class="form-control" placeholder="Addresse" value="<?php echo("$uadresse") ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label>Stadt (Optional)</label>
													<input name="ustadt" type="text" class="form-control" placeholder="Stadt" value="<?php echo("$ustadt") ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Land (Optional)</label>
													<input name="uland" type="text" class="form-control" placeholder="Land" value="<?php echo("$uland") ?>">
												</div>
											</div>
											<div class="col col-lg-2">
											<div class="form-group">
													<label>Alter (Optional)</label>
											<input name="ualter" type="number" class="form-control" placeholder="Alter" value="<?php echo("$ualter") ?>">
											</div>
											</div>
										</div>
										<button type="submit" name="change" class="btn btn-info btn-fill pull-right">Änderungen übernehmen</button>
										<div class="clearfix"></div>
									</form>
								</div>	
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		
		<div class="container-fluid">					
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<div class="header">
                                <h4 class="title">Filme bearbeiten</h4>
								<p class="category">Hier kannst du die Filme der Datenbank ändern!</p>
									<div class="pull-right">
										<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapse03" aria-expanded="" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
									</div>
							</div>
										
						</div>
							<div class="panel-body collapse" id="collapse03">
								<div class="content">
									<form id="mupdate" method="POST">
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
													<label>Movie ID</label>
													<input name="ID" type="number" disabled="" class="form-control" placeholder="MovieID" value="<?php echo("$ID")?>">
												</div>
											</div>
												<div class="col-md-10">
													<div class="form-group">
														<label for="exampleInputEmail1">Filmtitel</label>
														<input name="mname" type="text" class="form-control" placeholder="Filmtitel" value="">
													</div>
												</div>
										</div>

										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>Erscheinungsjahr</label>
													<input name="myear" type="text" class="form-control" placeholder="z.B 1994" value="">
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group">
													<label>FSK</label>
													<input name="musk" type="text" class="form-control" placeholder="z.b 12" value="">
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group">
													<label>IMDB-Rating</label>
													<input name="mrate" type="text" class="form-control" placeholder="z.B. 7.8" value="">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label>Filmänge</label>
													<input name="mlenge" type="text" class="form-control" placeholder="Filmlänge z.B 2h 22m" value="">
												</div>
											</div>
										</div>

										<div class="row">
										<div class="col-md-14">
												<div class="form-group">
													<label>Filmbeschreibung</label>
													<input name="mdesc" type="text" class="form-control" placeholder="Filmbeschreibung" value="">
												</div>
											</div>	
										</div>

										<div class="row">
										<div class="col-md-4">
										<div class="form-group">
													<label>Genre 1</label>
														<select class="form-control" name="genre0">
														<option value="0">Wähle ein Genre</option>
														<option value="1">Abenteuer</option>
														<option value="2">Action</option>
														<option value="3">Animation</option>
														<option value="4">Drama</option>
														<option value="5">Fantasy</option>
														<option value="6">Komödie</option>
														<option value="7">Horror</option>
														<option value="8">Kriegsfilm</option>
														<option value="9">Krimi</option>
														<option value="10">Liebesfilm</option>
														<option value="11">Martial-Arts-Film</option>
														<option value="12">Musikfilm</option>
														<option value="13">Science-Fiction</option>
														<option value="14">Sportfilm</option>
														<option value="15">Thriller</option>
														<option value="16">Western</option>
													</select> 
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-group">
													<label>Genre 2</label>
														<select class="form-control" name="genre1">
														<option value="0">Wähle ein Genre</option>
														<option value="1">Abenteuer</option>
														<option value="2">Action</option>
														<option value="3">Animation</option>
														<option value="4">Drama</option>
														<option value="5">Fantasy</option>
														<option value="6">Komödie</option>
														<option value="7">Horror</option>
														<option value="8">Kriegsfilm</option>
														<option value="9">Krimi</option>
														<option value="10">Liebesfilm</option>
														<option value="11">Martial-Arts-Film</option>
														<option value="12">Musikfilm</option>
														<option value="13">Science-Fiction</option>
														<option value="14">Sportfilm</option>
														<option value="15">Thriller</option>
														<option value="16">Western</option>
													</select> 
										</div>
										</div>
										<div class="col-md-4">
										<div class="form-group">
													<label>Genre 3</label>
														<select class="form-control" name="genre2">
														<option value="0">Wähle ein Genre</option>
														<option value="1">Abenteuer</option>
														<option value="2">Action</option>
														<option value="3">Animation</option>
														<option value="4">Drama</option>
														<option value="5">Fantasy</option>
														<option value="6">Komödie</option>
														<option value="7">Horror</option>
														<option value="8">Kriegsfilm</option>
														<option value="9">Krimi</option>
														<option value="10">Liebesfilm</option>
														<option value="11">Martial-Arts-Film</option>
														<option value="12">Musikfilm</option>
														<option value="13">Science-Fiction</option>
														<option value="14">Sportfilm</option>
														<option value="15">Thriller</option>
														<option value="16">Western</option>
													</select> 
										</div>
										</div>
										</div>
										
										<button id="movieupdate" type="submit" name="movieupdate" onclick="demo.showNotification('top','center')" class="btn btn-info btn-fill pull-right">Änderungen übernehmen</button>
										<div class="clearfix"></div>
									
								</div>	
							</div>
							<div class="panel-heading clearfix">
							
							<button  type="submit" name="movieupdate" onclick="not.showNotification('top','center')" class="btn btn-info btn-fill pull-left">Film speichern</button>
							</form>
							
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		
		
		
<div class="container-fluid">					
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<div class="header">
                                <h4 class="title">Lieblingsgenre</h4>
								<p class="category">Hier kannst du dein Lieblingsgerne angeben!</p>
									<div class="pull-right">
										<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapse02" aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
									</div>
							</div>
						</div>
							<div class="panel-body collapse" id="collapse02">
								<div class="content">
								<form method="POST">
								<div class="row">
								<div class="col-xs-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" name="genre1" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Abenteuerfilm</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox checked">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Actionfilm</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox checked">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Drama</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Fantasyfilm</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Komödie</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Horrorfilm</td>
                                            </tr>
											<tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Kriegsfilm</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox checked">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Krimi</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox checked">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Liebesfilm</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Martial-Arts-Film</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Musikfilm</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Science-Fiction</td>
                                            </tr>
											<tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Sportfilm</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox checked">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Thriller</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox checked">
                                                        <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span><input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Western</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
							</div>
							
							
							
							<div class="col-xs-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
							</div>
						</div>
						<div class="row">
							
							
							
							
							<div class="col-xs-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
							</div>
							
							
							
							
							

                               
                            </div>
							</form>
                        </div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
 </div>	 </div>	 </div>	 </div>	 </div>		 </div>		 
 
 
 <iframe style="display:none;" src="" name="myiframe"></iframe>
 </div>		
</div>
</div>

</body>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>


</html>
