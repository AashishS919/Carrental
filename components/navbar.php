<?php
include "./header.php"

?>
<nav>
    <div class="logo">
        <p>RENTNOW</p>
        <!-- <h3>CARRENTAL</h3> -->
    </div>

    <div class="list">
        <ul>
            <li>Home</li>
            <li>Car Listing</li>
            <li>About</li>
        </ul>
    </div>

    <div class="option">
        <button id="sign-up">Sign Up</button>
        <button id="sign-in">Sign In</button>
    </div>
   
</nav>
<div>
<div class="popup1">
        <div class="close-btn">&times;</div>
        <form action="" method="post">
            <h2><span>RENTNOW</span><br />CARRENTAL</h2>
            <br /><br />

            <label for="Email">Email Address</label>
            <input type="email" id="Email" name="Email" placeholder="Enter your email address" /><br />

            <label for="Password">Password</label>
            <input type="password" id="Password" name="Password" placeholder="Enter your password" /><br /><br />

            <button>Sign In</button><br />
            <a href="#">Forgot password</a>
        </form>
    </div>
    <div class="popup2">
        <div class="close-btn2">&times;</div>
        <form action="" method="post">
            <h2><span>RENTNOW</span><br />CARRENTAL</h2>
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" placeholder="Enter your Full Name" /><br />

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email Address" /><br />

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your Phone Number" /><br />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" /><br />

            <label for="repassword">Re-Password</label>
            <input type="password" id="repassword" name="repassword" placeholder="Re-enter your password" /><br />

            <label for="license">Driving licence</label>
            <input type="license" id="license" name="licence" placeholder="Enter your Driving Licence No." /><br />

            <button>Sign Up</button>
        </form>
    </div>
</div>

<?php
include "./footer.php"

?>