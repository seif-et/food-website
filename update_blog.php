<?php
include_once 'DB_connection.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    $sql = "update blog SET title='$title', body='$body', author='$author' where id='$id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
        echo 'Save';
        header('refresh:1; index.php');
    } else {
        echo 'wrong';
        header('refresh:1; index.php');
    }
}
?>
