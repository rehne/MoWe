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



<div class="row">
    <div class="col-md-12">
      <h1><strong>Willkommen im Dashboard von <?php echo $login_user;?></strong></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <div class="tile purple">
        <h3 class="title">Hier findest du eine Liste mit zufälligen Filme</h3>
        <p>-</p>
		<p>-</p>
		<p>-</p>
		<p>Hier könnte eine Auswahl mit zufälligen Filmen angezeigt werden</p>
      </div>
    </div>
    <div class="col-6">
      <div class="tile red">
        <h3 class="title">Hier findest du eine Liste mit zufälligen Serien</h3>
        <p>-</p>
		<p>-</p>
		<p>-</p>
		<p>Hier könnte eine Auswahl mit zufälligen Serien angezeigt werden</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <div class="tile green">
        <h3 class="title">Hier findest du deine Ausgewählten Lieblingsgenre</h3>
        <p>-</p>
		<p>-</p>
		<p>-</p>
		<p>Hier könnte eine Auswahl mit Filmen des eingestellten Lieblliengsgenre angezeigt werden</p>
      </div>
    </div>
    <div class="col-6">
      <div class="tile blue">
        <h3 class="title">RSS Feed</h3>
        <p>-</p>
		<p>-</p>
		<p>-</p>
		<p>Hier könnte ein RSS Feed von dem aktuellen Kinoprogramms angezeigt werden</p>
      </div>
    </div>    
  </div>
</div>
</div>
</div>

</body>
	<script src="assets/js/bootstrap-notify.js"></script>
</html>
