<?php
include "connection.php";
$id=$_GET['id'];
$re=$result=mysqli_query($connection,"DELETE FROM `category` WHERE `id`='$id'");
header("Location:list.php");
 ?>