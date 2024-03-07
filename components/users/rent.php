<?php
include "../connection.php";
include "./header.php";
$key = $_GET['carname'];
$car_id = $_GET['carid'];

if (!empty($_POST)) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $id = $_SESSION['id'];
    $is_book = true;




    $sql = "INSERT INTO bookings(id,full_name,phone,car_name,pickup_date,return_date,car_id)
    VALUES('$id','$name','$contact','$key','$date1','$date2','$car_id')";

    $sql2 = "UPDATE car SET is_book = '$is_book' WHERE id = '$car_id';
    ";
    $res2 = mysqli_query($conn, $sql2);

    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "Booking successfull";
        header("location: ./carlisting.php");
    } else {
        die("error" . mysqli_error($conn));
    }
}



?>
<section class="carform">
    <form action="" method="post">
        <h2><span>RENTNOW</span><br />CARRENTAL</h2>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required /><br />

        <label for="contact">Contact Detail</label>
        <input type="tel" id="contact" name="contact" placeholder="Enter Your Phone Number" required /><br />


        <div class="pr">
            <div class="pickup">
                <label for="date1">Pickup Date</label>
                <input type="date" id="date1" name="date1" placeholder="Date Here" required />
            </div>
            <div class="return">
                <label for="date2">Return Date</label>
                <input type="date" id="date2" name="date2" placeholder="Date Here" required /><br />
            </div>
        </div>
        <button>Rent Now</button>
    </form>
</section>