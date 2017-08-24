<?php
if($name=$_GET['name'] || $age=$_GET['age'] ||$add=$_GET['address']){

echo "Welcome: " .$name."<br>";
echo "Age :".$age."<br>";
echo "Address :".$add."<br>";
exit();
}
?>