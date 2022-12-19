<?php
include_once 'DB_connection.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $sql = "update menu SET name='$name', description='$description', category='$category',
	price='$price' where id='$id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
        echo 'Save';
        header('refresh:2; index.php');
    } else {
        echo 'wrong';
        header('refresh:2; index.php');
    }
}
?>
