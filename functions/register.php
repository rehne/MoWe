<?php
  include ("connection.php");

  if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    $name = mysqli_real_escape_string($db, $name);
    $password = md5($password);

    $sql = "SELECT username FROM users WHERE username='$name'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(mysqli_num_rows($result) == 1) {
      $output = "Sorry... Dieser Nutzername existiert bereits.";
    } else {
      $query = mysqli_query($db, "INSERT INTO users (username, password)VALUES ('$name', '$password')");
      $msg = "Vielen Dank! Du bist nun registriert!";
    }
  }
?>
