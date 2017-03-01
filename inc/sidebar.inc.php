<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="sidebar" data-color="purple" data-image="img/sidebar.jpg">
    <div class="sidebar-wrapper">
		<div class="logo">
			<a href="dashboard.php" class="simple-text">Moviefy</a>
        </div>
			<ul class="nav">
				<li class="<?= ($activePage == 'dashboard') ? 'active':''; ?>">
					<a href="dashboard.php">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Dashboard</p>
					</a>
                </li>
                <li class="<?= ($activePage == 'user') ? 'active':''; ?>">
					<a href="user.php">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <p>Benutzerprofil</p>
					</a>
                </li>
                <li class="<?= ($activePage == 'movie') ? 'active':''; ?>">
                    <a href="movie.php">
                        <i class="fa fa-film" aria-hidden="true"></i>
                        <p>Filme</p>
                    </a>
                </li>
                <li class="<?= ($activePage == 'serie') ? 'active':''; ?>">
                    <a href="serie.php">
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <p>Serien Ajax Request</p>
                    </a>
                </li>
                
            </ul>
	</div>
</div>