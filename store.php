<?php
require_once('db.php');
$name=$_POST['emp_name'];
$add=$_POST['emp_address'];
$salary=$_POST['emp_salary'];

$sql="INSERT INTO emp(emp_name,emp_address,emp_salary) VALUES('$name','$add','$salary')";
$res=mysqli_query($con,$sql);

$current_id=mysqli_insert_id($con);
if(!empty($current_id)){
	echo "Can inserted data";
}else{
	die("cannot inserted".mysqli_error($con));
}
header("Location:index.php");

?>