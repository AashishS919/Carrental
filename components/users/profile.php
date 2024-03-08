<?php
include "./navbar.php";
$id = $_SESSION['id'];

$sql = "SELECT * FROM user WHERE id='$id'";
$data = mysqli_query($conn, $sql);
if (!isset($_SESSION['is_login'])) {
    header('location:./login.php');
    exit();
}

$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Profile</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1>Manage your account</h1>
    <div class="profile">
        <div class="info">
            <h2>Personal Profile</h2>
            <p>Full Name : <?= $result['full_name']; ?><br>Phone : <?= $result['phone']; ?><br>Email : <?= $result['email']; ?></p>
        </div>
        <div class="document">
            <h2>Document</h2>
            <p>License No : <?= $result['driving_license_no']; ?></p>
        </div>
    </div>
    <div class="action">
        <a href="./profile_update.php?userid=<?= $result['id']; ?>"><button class="Update">Update</button></a>
    </div>
    <div class="history">
        <table border="1px solid black">
            <h2>Recent Rental Cars</h2>
            <thead>
                <tr>
                    <th>Car Name</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM bookings WHERE id='$id'";
                $booking_data = mysqli_query($conn, $sql);
                while ($user = mysqli_fetch_assoc($booking_data)) :

                ?>
                    <tr>
                        <td><?= $user['car_name'] ?></td>
                        <td><?= $user['pickup_date']; ?></td>
                        <td><?= $user['return_date']; ?></td>
                        <td>
                            <a href="./bookings_update.php?updateid=<?= $user['id']; ?>"><button class="Update">Update</button></a>
                            <a href="./bookings_delete.php?deleteid=<?= $user['booking_id']; ?>&carid=<?= $user['car_id']; ?>""><button class=" Delete">Delete</button></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>



<?php
include "./end.php";
?>