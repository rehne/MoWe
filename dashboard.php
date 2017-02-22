<?php
	include("functions/check.php");
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>movieDB | Home</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	<?php
    include('inc/navbar.inc.php');
  ?>
		<div class="container">
			<div class="jumbotron jumbotron-fluid">
				<table class="table table-striped table-hover">

				</table>
<?php
		$conn = mysqli_connect("localhost", "rehne", "root", "mowe");

$orderBy = "mname";
$order = "asc";

if(!empty($_GET["orderby"])) {
	$orderBy = $_GET["orderby"];
}
if(!empty($_GET["order"])) {
	$order = $_GET["order"];
}

$sql = "SELECT * from movies ORDER BY " . $orderBy . " " . $order;
$result = mysqli_query($conn,$sql);

	$mnameNextNextOrder = "asc";
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
	if($orderBy == "mgenre1" and $order == "asc") {
		$mgenre1NextOrder = "desc"; }
	if($orderBy == "mgenre1" and $order == "desc") {
		$mgenre1NextOrder = "asc"; }
	if($orderBy == "mgenre2" and $order == "asc") {
		$mgenre2NextOrder = "desc"; }
	if($orderBy == "mgenre2" and $order == "desc") {
		$mgenre2NextOrder = "asc"; }
	if($orderBy == "mgenre3" and $order == "asc") {
		$mgenre3NextOrder = "desc"; }
	if($orderBy == "mgenre3" and $order == "desc") {
		$mgenre3NextOrder = "asc"; }
	if($orderBy == "mlenge" and $order == "asc") {
		$mlengeNextOrder = "desc"; }
	if($orderBy == "mlenge" and $order == "desc") {
		$mlengeNextOrder = "asc"; }
?>

<?php if(!empty($result))	 { ?>
<table class="table table-striped table-hover">
	<tbody>
		<tr>
			<th width="30%"><span><a href="?orderby=mname&order=<?php echo $mnameNextOrder; ?>" class="column-title">Filmname</a></span></th>
			<th width="10%"><span><a href="?orderby=myear&order=<?php echo $myearNextOrder; ?>" class="column-title">Erscheinungsjahr</a></span></th>
			<th width="10%"><span><a href="?orderby=musk&order=<?php echo $muskNextOrder; ?>" class="column-title">FSK</a></span></th>
			<th width="10%"><span><a href="?orderby=mrate&order=<?php echo $mrateNextOrder; ?>" class="column-title">IMDB Bewertung</a></span></th>
			<th width="10%"><span><a href="?orderby=mgenre1&order=<?php echo $mgenre1NextOrder; ?>" class="column-title">Genre</a></span></th>
			<th width="10%"><span><a href="?orderby=mgenre2&order=<?php echo $mgenre2NextOrder; ?>" class="column-title">Genre</a></span></th>
			<th width="10%"><span><a href="?orderby=mgenre3&order=<?php echo $mgenre3NextOrder; ?>" class="column-title">Genre</a></span></th>
			<th width="10%"><span><a href="?orderby=mlenge&order=<?php echo $mlengeNextOrder; ?>" class="column-title">Filmlänge</a></span></th>
		</tr>

	<?php
	echo "<tr>
					<th>Filmname</th>
					<th>Erscheinungsjahr</th>
					<th>FSK</th>
					<th>IMDB Bewertung</th>
					<th>Genre</th>
					<th>Genre</th>
					<th>Filmlänge</th>
				</tr>";

		while($row = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td><?php echo $row["mname"]; ?></td>
			<td><?php echo $row["myear"]; ?></td>
			<td><?php echo $row["musk"]; ?></td>
			<td><?php echo $row["mrate"]; ?></td>
			<td><?php echo $row["mgenre1"]; ?></td>
			<td><?php echo $row["mgenre2"]; ?></td>
			<td><?php echo $row["mgenre3"]; ?></td>
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
	</body>
</html>
