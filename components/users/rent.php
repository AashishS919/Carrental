<?php
include "../connection.php";
include "./header.php";


if (!empty($_POST)) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $pickup = $_POST['pickup'];
    $return = $_POST['return'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $id = $_SESSION['id'];

    $sql = "INSERT INTO bookings(id,full_name,phone,pickup_location,return_location,pickup_date,return_date)
    VALUES('$id','$name','$contact','$pickup','$return','$date1','$date2')";

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

        <label for="pickup">Pickup Location</label>
        <input type="text" id="pickup" name="pickup" placeholder="Enter Location to Pick up" required /><br />


        <label for="return">Return Location</label>
        <input type="text" id="return" name="return" placeholder="Enter Location to return" required /><br />
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