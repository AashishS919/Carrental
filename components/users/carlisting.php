<?php
// include "../connection.php";
include "./navbar.php";
$sql = "SELECT * FROM car";
$data = mysqli_query($conn, $sql);
?>


<div class="filter">
    <input type="text" placeholder="Search with keywords">
    <button>
        <p>All</p>
    </button>
    <button>
        <p>Hyundai</p>
    </button>
    <button>
        <p>Mahindra</p>
    </button>
    <button>
        <p>Tata</p>
    </button>
    <button>
        <p> Suzuki</p>
    </button>

</div>

<div class="cars">
    <?php

    while ($result = mysqli_fetch_assoc($data)) :

    ?>
        <div class="card">
            <h3><?= $result['car_name'] ?></h3>
            <img src="../admin/uploads/<?= $result['image'] ?>" alt="">
            <div class="features">
                <!-- Fuel litre  -->
                <div class="fl">
                    <img src="../../icons/Features/GasPump.png" alt="">
                    <p><?= $result['fuel_litre'] ?></p>
                </div>
                <!-- transmission type  -->
                <div class="tt">
                    <img src="../../icons/Features/SteeringWheel.png" alt="">
                    <p><?= $result['transmission_type'] ?></p>
                </div>
                <!-- seat capacity  -->
                <div class="sc">
                    <img src="../../icons/Features/UsersThree.png" alt="">
                    <p><?= $result['seat_capacity'] ?></p>
                </div>
            </div>

            <div class="details">
                <div class="rate">
                    <p><?= $result['rate'] ?></p>
                    <p>Rate per day</p>
                </div>
                <!-- rent button  -->
                <div class="rb">
                    <button class="rent"><a href="./rent.php?carid=<?=$result['car_name']; ?>">RentNow</a></button>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

</div>

<?php
include "./end.php";
?>