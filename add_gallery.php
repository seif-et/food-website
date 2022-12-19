<?php
include_once 'DB_connection.php';

if(isset($_POST['submit'])){
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$sql = "insert into gallery (image) VALUES ('$image')";
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