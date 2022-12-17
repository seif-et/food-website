<?php
include_once 'DB_connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "delete from menu where id='$id'";
    $result = mysqli_query($db,$sql);
    if($result){
       echo "Delete";
       header("refresh:2; index.php");
    }else{
       echo "wrong";
       header("refresh:2; index.php");
    }
    }
?>