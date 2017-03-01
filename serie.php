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
						<button id="ajax" class="btn btn-info">Jetzt AJAX Request senden</button>
						<div>
							<table class="table table-striped table-hover">
								<thead>
									<tr id='thead'>
									</tr>
								</thead>
								<tbody id="series">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/series.js"></script>
	</body>
</html>
