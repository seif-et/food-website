<?php
include_once 'DB_connection.php';

if(isset($_POST['submit'])){
	$image=$_POST['image'];
	$sql = "insert into gallery (image) VALUES ('$image')";
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