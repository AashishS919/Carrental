<?php
include "./navbar.php";
include "./connection.php";
$sql = "SELECT * FROM user";
$data = mysqli_query($conn, $sql);
if (!isset($_SESSION['is_login'])) {
    header('location:./login.php');
    exit();
}
?>

<h1 class="heading">Users</h1>
<table border="1px solid black">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Password</th>
            <th>Driving License</th>
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
                <td><?= $result['id'] ?></td>
                <td><?= $result['full_name']; ?></td>
                <td><?= $result['email']; ?></td>
                <td><?= $result['phone']; ?></td>
                <td><?= $result['password']; ?></td>
                <td><?= $result['driving_license_no']; ?></td>

                <td>
                <button class="Delete"><a href="users_delete.php?deleteid=<?= $result['id']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php endwhile; ?>

    </tbody>
</table>