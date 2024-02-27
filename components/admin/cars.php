<?php
include "./navbar.php";
?>
<div class="users">
    <section class="carform">
        <div class="regcls-btn">&times;</div>
        <form action="" method="post">
            <h2><span>CARS</span><br />FORM</h2>

            <label for="name">Car name</label>
            <input type="text" id="name" name="name" placeholder="Enter Car Name" required /><br />

            <label for="fuel_capacity">Fuel Capcaity</label>
            <input type="text" id="email" name="fuel_capacity" placeholder="Enter Fuel Capacity Of Your Car" required /><br />

            <label for="cars">Transmission Type : </label>
            <select name="transmission" id="transmission">
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
            </select> <br><br>

            <label for="contact">Seat Capacity</label>
            <input type="password" id="contact" name="contact" placeholder="Enter Seat Capacity" required /><br />

            <label for="contact">Rate</label>
            <input type="text" id="contact" name="contact" placeholder="Enter Per Day Rate" required /><br />

            <button>ADD CAR</button>
        </form>
    </section>
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