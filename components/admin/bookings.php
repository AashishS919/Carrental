<?php
include "./navbar.php";
include "./connection.php";
if (!isset($_SESSION['is_login'])) {
    header('location:./login.php');
    exit();
}

$sql = "SELECT * FROM bookings";
$data = mysqli_query($conn, $sql);
?>

<h1 class="heading">Bookings</h1>
<table border="1px solid black">
    <thead>
        <tr>

            <th>Car Name</th>
            <th>Full Name</th>
            <th>Phone No</th>
            <th>Pickup Date</th>
            <th>Return Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $key = 0;
        while ($result = mysqli_fetch_assoc($data)) :
            $key++;
        ?>
            <tr>
                <td><?= $result['car_name']; ?></td>
                <td><?= $result['full_name']; ?></td>
                <td><?= $result['phone']; ?></td>
                <td><?= $result['pickup_date']; ?></td>
                <td><?= $result['return_date'] ?></td>
                <td>

                    <button class="Delete"><a href="bookings_delete.php?deleteid=<?= $result['booking_id']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php endwhile; ?>

    </tbody>
</table>