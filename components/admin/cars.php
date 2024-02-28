<?php
include "./navbar.php";
include "./connection.php";
$folder = "/images";

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

    $sql = "INSERT INTO car(car_name,fuel_litre,transmission_type,seat_capacity,rate,image)
    VALUES('$car_name','$fuel_litre','$transmission_type','$seat_capacity','$rate','$image')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted";
    } else {
        die("error" . mysqli_error($conn));
    }
}
?>
<div class="users">
    <section class="carform">
        <div class="regcls-btn">&times;</div>
        <form action="" method="post" enctype="multipart/form-data">
            <h2><span>CARS</span><br />FORM</h2>

            <label for="name">Car name</label>
            <input type="text" id="name" name="name" placeholder="Enter Car Name" required /><br />

            <label for="fuel_capacity">Fuel Capcaity</label>
            <input type="text" id="fuel_capacity" name="fuel_capacity" placeholder="Enter Fuel Capacity Of Your Car" required /><br />

            <label for="cars">Transmission Type : </label>
            <select name="transmission" id="transmission">
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
            </select> <br><br>

            <label for="seat">Seat Capacity</label>
            <input type="text" id="seat" name="seat" placeholder="Enter Seat Capacity" required /><br />

            <label for="rate">Rate</label>
            <input type="text" id="rate" name="rate" placeholder="Enter Per Day Rate" required /><br />

            <label for="img">Image</label>
            <input type="file" id="img" name="image" placeholder="Choose an image" required /><br />

            <button>ADD CAR</button>
        </form>
    </section>

    <!-- <h1>Cars</h1><br> -->
    <table border="1px solid black">

        <thead>
            <tr>
                <th>ID</th>
                <th>Car name</th>
                <th>Fuel Capcaity</th>
                <th>Transmission Type</th>
                <th>Seat Capacity</th>
                <th>Rate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td>123-456-7890</td>
                <td>********</td>
                <td>ABC123456</td>
                <td>
                    <button class="Update">Update</button>
                    <button class="Delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td>123-456-7890</td>
                <td>********</td>
                <td>ABC123456</td>
                <td>
                    <button class="Update">Update</button>
                    <button class="Delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td>123-456-7890</td>
                <td>********</td>
                <td>ABC123456</td>
                <td>
                    <button class="Update">Update</button>
                    <button class="Delete">Delete</button>
                </td>
            </tr>

        </tbody>
    </table>

</div>