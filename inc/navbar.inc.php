<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<?php
					if($activePage == 'dashboard') {
					echo('<a class="navbar-brand" href="dashboard.php">Dashboard</a>');
					}
					if($activePage == 'user') {
					echo('<a class="navbar-brand" href="user.php">Benutzerprofil</a>');
					}
					if($activePage == 'movie') {
					echo('<a class="navbar-brand" href="movie.php">Filme</a>');
					}
					if($activePage == 'serie') {
					echo('<a class="navbar-brand" href="serie.php">Serien</a>');
					}
					if($activePage == 'aboutus') {
					echo('<a class="navbar-brand" href="aboutus.php">Über uns</a>');
					}
					?>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">                       
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Hi' <?php if (isset($login_user)) echo $login_user;?>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a style="font-size:16px;" href="user.php"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Profil bearbeiten</a></li>
								<li class="divider"></li>
                                <li><a style="font-size:16px;" href="logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Abmelden</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>