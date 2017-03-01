<?php
include('functions/check.php');
include_once('functions/connection.php');
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

<div class="content">
<?php

$orderBy = "mname";
$order = "asc";

if(!empty($_GET["orderby"])) {
	$orderBy = $_GET["orderby"];
}
if(!empty($_GET["order"])) {
	$order = $_GET["order"];
}

$sql = "SELECT mid, mname, myear, musk, mrate, mlenge, mdesc, moviegenre0, moviegenre1, moviegenre2 FROM genre g, movies m, moviehatgenre mg WHERE g.genre = mg.moviegenre0 AND m.mid = moviemid ORDER BY " . $orderBy . " " . $order;
$result = mysqli_query($db,$sql);


/*$sql = "SELECT genrename FROM genre WHERE genre.genre = ". $result.moviegenre1;
$gerneresult2 = mysqli_query($db,$sql);
$sql = "SELECT genrename FROM genre WHERE genre.genre = ". $result.moviegenre2;
$gerneresult3 = mysqli_query($db,$sql);
*/


	$mnameNextOrder = "asc";
	$myearNextOrder = "asc";
	$muskNextOrder = "asc";
	$mrateNextOrder = "asc";
	$mgenre1NextOrder = "asc";
	$mgenre2NextOrder = "asc";
	$mgenre3NextOrder = "asc";
	$mlengeNextOrder = "asc";

	if($orderBy == "mname" and $order == "asc") {
		$mnameNextOrder = "desc"; }
	if($orderBy == "mname" and $order == "desc") {
		$mnameNextOrder = "asc"; }
	if($orderBy == "myear" and $order == "asc") {
		$myearNextOrder = "desc"; }
	if($orderBy == "myear" and $order == "desc") {
		$myearNextOrder = "asc"; }
	if($orderBy == "musk" and $order == "asc") {
		$muskNextOrder = "desc"; }
	if($orderBy == "musk" and $order == "desc") {
		$muskNextOrder = "asc"; }
	if($orderBy == "mrate" and $order == "asc") {
		$mrateNextOrder = "desc"; }
	if($orderBy == "mrate" and $order == "desc") {
		$mrateNextOrder = "asc"; }
	if($orderBy == "moviegenre0" and $order == "asc") {
		$mgenre1NextOrder = "desc"; }
	if($orderBy == "moviegenre0" and $order == "desc") {
		$mgenre1NextOrder = "asc"; }
	if($orderBy == "moviegenre1" and $order == "asc") {
		$mgenre2NextOrder = "desc"; }
	if($orderBy == "moviegenre1" and $order == "desc") {
		$mgenre2NextOrder = "asc"; }
	if($orderBy == "moviegenre3" and $order == "asc") {
		$mgenre3NextOrder = "desc"; }
	if($orderBy == "moviegenre3" and $order == "desc") {
		$mgenre3NextOrder = "asc"; }
	if($orderBy == "mlenge" and $order == "asc") {
		$mlengeNextOrder = "desc"; }
	if($orderBy == "mlenge" and $order == "desc") {
		$mlengeNextOrder = "asc"; }
?>
<div class="header">
<h4 class="title">Die Besten Filme aller Zeiten</h4>
<p class="category">Hier findest du eine Liste aller Filme sortiert nach dem offiziellen IMDB Rating!</p>
</div>
<?php if(!empty($result)/* AND !empty($gerneresult1) AND !empty($gerneresult2) AND !empty($gerneresult3)*/) { ?>
<table class="table table-striped table-hover">
	<tbody>
		<tr>
			<th><span>Info</span></th>
			<th width="30%"><span><a href="?orderby=mname&order=<?php echo $mnameNextOrder; ?>" class="column-title">Filmname</a></span></th>
			<th width="10%"><span><a href="?orderby=myear&order=<?php echo $myearNextOrder; ?>" class="column-title">Erscheinungsjahr</a></span></th>
			<th width="10%"><span><a href="?orderby=musk&order=<?php echo $muskNextOrder; ?>" class="column-title">FSK</a></span></th>
			<th width="10%"><span><a href="?orderby=mrate&order=<?php echo $mrateNextOrder; ?>" class="column-title">IMDB Bewertung</a></span></th>
			<th width="10%"><span><a href="?orderby=moviegenre0&order=<?php echo $mgenre1NextOrder; ?>" class="column-title">Genre</a></span></th>
			<th width="10%"><span><a href="?orderby=moviegenre1&order=<?php echo $mgenre2NextOrder; ?>" class="column-title">Genre</a></span></th>
			<th width="10%"><span><a href="?orderby=moviegenre2&order=<?php echo $mgenre3NextOrder; ?>" class="column-title">Genre</a></span></th>
			<th width="10%"><span><a href="?orderby=mlenge&order=<?php echo $mlengeNextOrder; ?>" class="column-title">Filmlänge</a></span></th>
		</tr>

	<?php
		while($row = mysqli_fetch_array($result)) {
			
		$sqlm0 = "SELECT genrename FROM genre WHERE genre =" .$row["moviegenre0"];
		$sqlmresult0 = mysqli_query($db,$sqlm0);
		$row0 = mysqli_fetch_array($sqlmresult0);
		$sqlm1 = "SELECT genrename FROM genre WHERE genre =" .$row["moviegenre1"];
		$sqlmresult1 = mysqli_query($db,$sqlm1);
		$row1 = mysqli_fetch_array($sqlmresult1);
		$sqlm2 = "SELECT genrename FROM genre WHERE genre =" .$row["moviegenre2"];
		$sqlmresult2 = mysqli_query($db,$sqlm2);
		$row2 = mysqli_fetch_array($sqlmresult2);
	?>
		<tr>
			<td><?php echo ('<a class="info" href="movie.php?mid=' .$row["mid"]. '">' . '<i class="fa fa-info-circle" aria-hidden="true"></i>' . '</a>'); ?></td>
			<td><?php echo $row["mname"]; ?></td>
			<td><?php echo $row["myear"]; ?></td>
			<td><?php echo $row["musk"]; ?></td>
			<td><?php echo $row["mrate"]; ?></td>
			<td><?php echo $row0["genrename"] ?></td>
			<td><?php echo $row1["genrename"]; ?></td>
			<td><?php echo $row2["genrename"]; ?></td>
			<td><?php echo $row["mlenge"]; ?></td>
		</tr>
				<?php
					}
				?>
					</tbody>
				</table>
				<?php } ?>
			</div>
		</div>
		</div>

</body>
</html>
