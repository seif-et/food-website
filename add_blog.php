<?php
include_once 'DB_connection.php';

if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$body=$_POST['body'];
	$author=$_POST['author'];
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$sql = "insert into blog (title, body, author, image) VALUES ('$title', '$body', '$author', '$image')";
	$result = mysqli_query($db,$sql);
	if($result){
	   echo "Save";
       header("refresh:1; index.php");
	}else{
	   echo "wrong";
       header("refresh:1; index.php");
	}
	}
?>