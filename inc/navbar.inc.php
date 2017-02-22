<body class="bg">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">movieDB</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="dashboard.php">Dashboard</a></li>
          <li><a href="movie.php">Filme</a></li>
          <li><a href="shows.php">Serien</a></li>
          <li><a href="doc.php">Dokumentation</a></li>
          <li><a href="about.php">Über</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Hi' <?php echo $login_user;?>!&nbsp;<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="functions/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Ausloggen</a></li>
              <li><a href="profile.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Profil</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
