<?php
$result1 = mysqli_query($db,"SELECT MAX(mid) FROM movies; ");
$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
$ID = $row1['MAX(mid)'] + 1;
?>
