<?php
$servername='localhost';
$username='admin';
$password='Password@12345';
$dbname = "task1";
$conn=mysqli_connect($servername,$username,$password,"$dbname");



if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
