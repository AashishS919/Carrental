<?php
include "./navbar.php";

$key = $_GET['updateid'];

if (!empty($_POST)) {
    $full_name = $_POST['name'];
    $contact = $_POST['contact'];
    $pickup_date = $_POST['date1'];
    $return_date = $_POST['date2'];




    $sql = "UPDATE bookings SET full_name='$full_name',phone='$contact',pickup_date='$pickup_date',
          return_date='$return_date' WHERE id='$key'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "Updated successfully";
        header("location:./profile.php");
    } else {
        die("error" . mysqli_error($conn));
    }
}

$sql = "SELECT * FROM `bookings` WHERE id='$key'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);
$full_name = $result['full_name'];
$phone = $result['phone'];
$pickup_date = $result['pickup_date'];
$return_date = $result['return_date'];


?>
<div class="users">


    <section class="carform">
        <form action="" method="post">
            <h2><span>RENTNOW</span><br />CARRENTAL</h2>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Full Name" value="<?php
                                                                                                echo $full_name; ?>" required /><br />

            <label for="contact">Contact Detail</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $phone; ?>" placeholder="Enter Your Phone Number" required /><br />


            <div class="pr">
                <div class="pickup">
                    <label for="date1">Pickup Date</label>
                    <input type="date" id="date1" name="date1" value="<?php echo $pickup_date; ?>" placeholder="Date Here" required />
                </div>
                <div class="return">
                    <label for="date2">Return Date</label>
                    <input type="date" id="date2" name="date2" value="<?php echo $return_date; ?>" placeholder="Date Here" required /><br />
                </div>
            </div>
            <button>Rent Now</button>
        </form>
    </section>
</div>