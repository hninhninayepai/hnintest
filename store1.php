<?php
require_once('db.php');
$sql="INSERT INTO person(name,age,address,email,phone) VALUES('".$_POST['name']."','".$_POST['age']."','".$_POST['address']."','".$_POST['email']."','".$_POST['phone']."')";
$res=mysqli_query($con,$sql);
header("Location:index1.php");
?>