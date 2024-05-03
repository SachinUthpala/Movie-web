<?php

session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./Asserts/Styles/SignUp.css">
    <title>M Booking| Sign In</title>
</head>

<body>

    

    <div class="container">
        <h1>Login Now</h1>
        <div class="social-login">
            <button class="google">
                <i class='bx bxl-google'></i>
                Use Google
            </button>
            <button class="google">
                <i class='bx bxl-apple'></i>
                Use Apple
            </button>
        </div>
        <div class="divider">
            <div class="line"></div>
            <p>Or</p>
            <div class="line"></div>
        </div>

        <form action="./Db/SignUp&SIgnIn/SignIn.config.php" method="post">
            <label for="email">Email:</label>
            <div class="custome-input">
                <input type="email" name="email" placeholder="Your Email" autocomplete="off">
                <i class='bx bx-at'></i>
            </div>
            <label for="password">Password:</label>
            <div class="custome-input">
                <input type="password" name="password" placeholder="Your Password">
                <i class='bx bx-lock-alt'></i>
            </div>
            <button class="login" name="login">Sign In</button>
            <div class="error_message">
                <span>
                    <?php
                        if($_SESSION["SignUpError"] == 1){
                            echo $_SESSION["SignUpError"];
                            $_SESSION["SignUpError"] = null;
                        }
                    ?>
                </span>
            </div>
            <div class="links">
                <a href="./index.php">Back To Home</a>
                <a href="./SignUp.php">Dont Have an account?</a>
            </div>
        </form>

    </div>

</body>

</html>