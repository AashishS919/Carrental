<?php
include "./navbar.php";
?>
<div class="users">
    <section class="carform">
        <div class="regcls-btn">&times;</div>
        <form action="" method="post">
            <h2><span>USERS</span><br />FORM</h2>

            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required /><br />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email Address" required /><br />

            <label for="contact">Phone No</label>
            <input type="tel" id="contact" name="contact" placeholder="Enter Your Phone Number" required /><br />

            <label for="contact">Password</label>
            <input type="password" id="contact" name="contact" placeholder="Enter Your Password" required /><br />

            <label for="contact">Driving License No</label>
            <input type="text" id="contact" name="contact" placeholder="Enter Your Driving License Number Number" required /><br />

            <button>ADD USER</button>
        </form>
    </section>
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