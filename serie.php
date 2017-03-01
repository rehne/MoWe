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
					<div class="header">
						<h4 class="title">Die Besten Serien aller Zeiten</h4>
						<p class="category">Hier findest du eine Auswahl an Serien sortiert nach dem offiziellen IMDB Rating!</p>
						<hr>
						<button id="ajax">Jetzt AJAX Request senden</button>
						<div id="series"></div>
					</div>
				</div>
			</div>
		</div>
		<script src="series.js"></script>
	</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

		<!--  Checkbox, Radio & Switch Plugins -->
		<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

		<!--  Charts Plugin -->
		<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
		<script src="assets/js/light-bootstrap-dashboard.js"></script>
</html>
