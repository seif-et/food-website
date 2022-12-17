<?php
include_once 'DB_connection.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    $created_at = $_POST['created_at'];
    $image = $_POST['image'];
    $sql = "update blog SET title='$title', body='$body', author='$author',
    created_at='$created_at' where id='$id'";
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
