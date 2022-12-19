<?php
include_once 'DB_connection.php';

if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$body=$_POST['body'];
	$author=$_POST['author'];
	$created_at=$_POST['created_at'];
	$image=$_POST['image'];
	$sql = "insert into blog (title, body, author, created_at, image) VALUES ('$title', '$body', '$author', '$created_at', '$image')";
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