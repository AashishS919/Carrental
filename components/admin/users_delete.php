<?php
include './navbar.php';
include './connection.php';

if (isset($_GET['deleteid'])) {
    $key = $_GET['deleteid'];
    $sql = "DELETE FROM `user` WHERE id='$key'";
    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo "Deleted";
        header("location:./users.php");
    } else {
        die("Connection failed " . mysqli_connect_error());
    }
}
