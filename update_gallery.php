<?php
include_once 'DB_connection.php';
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $image = $_POST['image'];
    $sql = "update orders SET image='$image' where id='$id'";
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