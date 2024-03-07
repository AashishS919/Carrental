<?php
include './navbar.php';
include '../connection.php';

if (isset($_GET['deleteid'])) {
    $key = $_GET['deleteid'];
    $car_id = $_GET['carid'];
    $is_book = false;
    $sql = "DELETE FROM `bookings` WHERE booking_id='$key'";
    $sql2 = "UPDATE car SET is_book = '$is_book' WHERE id = '$car_id';
    ";
    $res2 = mysqli_query($conn, $sql2);
    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo "Deleted";
        header("location:./profile.php");
    } else {
        die("Connection failed " . mysqli_connect_error());
    }
}
