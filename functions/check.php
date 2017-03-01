<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];
$ses_sql = mysqli_query($db,"SELECT * FROM users WHERE username='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['username'];
$login_user_id=$row['uid'];
if(!isset($user_check)) {
  header("location:index.php");
}
?>
