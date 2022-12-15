<?php
include_once 'DB_connection.php';

if(isset($_POST['submit'])){
	$full_name=$_POST['full_name'];
	$food_name=$_POST['food_name'];
	$order_details=$_POST['order_details'];
	$address=$_POST['address'];
	$phone_number=$_POST['phone_number'];
	$quantity=$_POST['quantity'];
	$sql = "insert into orders (full_name, food_name, order_details, address, phone_number, quantity) VALUES ('$full_name', '$food_name', '$order_details', '$address', '$phone_number', '$quantity')";
	$result = mysqli_query($db,$sql);
	if($result){
	   echo "Save";
       header("refresh:2; index.php");
	}else{
	   echo "wrong";
       header("refresh:2; index.php");
	}
	}
?>