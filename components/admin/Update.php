<?php
include "./navbar.php";
include "./connection.php";
$key = $_GET['updateid'];

if (!empty($_POST)) {
    $car_name = $_POST['name'];
    $fuel_litre = $_POST['fuel_capacity'];
    $transmission_type = $_POST['transmission'];
    $seat_capacity = $_POST['seat'];
    $rate = $_POST['rate'];
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $path = './uploads/';
        move_uploaded_file($tmp, $path . $image);
    }

    $sql = "UPDATE car SET id='$key',car_name='$car_name',fuel_litre='$fuel_litre',transmission_type='$transmission_type',
          seat_capacity='$seat_capacity',rate='$rate',image='$image' WHERE id='$key'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "Updated successfully";
        header("location:./cars.php");
    } else {
        die("error" . mysqli_error($conn));
    }
}

$sql = "SELECT * FROM `car` WHERE id='$key'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);
$car_name = $result['car_name'];
$fuel_litre = $result['fuel_litre'];
$transmission_type = $result['transmission_type'];
$seat_capacity = $result['seat_capacity'];
$rate = $result['rate'];
$image = $result['image'];


?>
<div class="users">
    <section class="carform">
        <div class="regcls-btn">&times;</div>
        <form action="" method="post" enctype="multipart/form-data">
            <h2><span>CARS</span><br />FORM</h2>

            <label for="name">Car name</label>
            <input type="text" id="name" name="name" placeholder="Enter Car Name" value="<?php echo $car_name ?>" required /><br />

            <label for="fuel_capacity">Fuel Capacity</label>
            <input type="text" id="fuel_capacity" name="fuel_capacity" placeholder="Enter Fuel Capacity Of Your Car" value="<?php echo $fuel_litre ?>" required /><br />

            <label for="transmission">Transmission Type : </label>
            <select name="transmission" id="transmission">
                <option value="Automatic" <?php if ($transmission_type == "Automatic") echo "selected"; ?>>Automatic</option>
                <option value="Manual" <?php if ($transmission_type == "Manual") echo "selected"; ?>>Manual</option>
            </select> <br><br>

            <label for="seat">Seat Capacity</label>
            <input type="text" id="seat" name="seat" placeholder="Enter Seat Capacity" value="<?php echo $seat_capacity ?>" required /><br />

            <label for="rate">Rate</label>
            <input type="text" id="rate" name="rate" placeholder="Enter Per Day Rate" value="<?php echo $rate ?>" required /><br />

            <label for="image">Image</label>
            <input type="file" id="image" name="image" placeholder="Choose an image" required /><br />

            <button>Update</button>

        </form>
    </section>
</div>