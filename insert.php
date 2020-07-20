<?php

$employeeid = $_POST['employeeid'];

$con = mysqli_connect('localhost','root','','form');

$query = "INSERT INTO employee (employeeid) VALUES ('$employeeid')";
  
$run = mysqli_query($con,$query);

if($run == TRUE)
	echo "Data inserted Successfully";
else
	echo "Error!";

?>  