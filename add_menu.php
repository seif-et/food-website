<?php
include_once 'DB_connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $sql = "insert into menu (name, description, category, price) VALUES ('$name', '$description', '$category', '$price')";
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
