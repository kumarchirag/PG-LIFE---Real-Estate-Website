<?php
require "includes/database_connect.php";
$id=$_GET['id'];
$deletequery=" delete from users where id=$id";
$query=mysqli_query($con,$deletequery);
require "logout.php";
exec('logout.php');
header('location:index.php');

?>