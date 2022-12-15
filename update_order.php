<?php
include_once 'DB_connection.php';
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $food_name = $_POST['food_name'];
    $order_details = $_POST['order_details'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $quantity = $_POST['quantity'];
    $sql = "update orders SET full_name='$full_name', food_name='$food_name', order_details='$order_details',
     address='$address', phone_number='$phone_number', quantity='$quantity' where id='$id'";
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