<?php

$con = mysqli_connect( 'localhost' , 'root' , '') or die ("could not connect to mysql");
mysqli_select_db($con, "clab") or die ("no such database");
?>