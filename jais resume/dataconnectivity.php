<?php
$host = "localhost";
$db_name = "resume";
$username = "root";
$pass = "pass123";
   $con = mysqli_connect($host,$username,$mail,$contactnumber);
       if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL:"mysqli_connect_error();
  die();               }
?>