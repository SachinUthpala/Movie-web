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
    <title>M Booking| Sign Up</title>
</head>

<body>

    

    <div class="container">
        <h1>Sign Up Now </h1>
        

        <form method="post" action="./Db/SignUp&SIgnIn/SignUp.config.php">
            <label for="email">Email:</label>
            <div class="custome-input">
                <input type="email" name="email" placeholder="Your Email" autocomplete="off">
                <i class='bx bx-at'></i>
            </div>
            <label for="password">Name:</label>
            <div class="custome-input">
                <input type="text" name="username" placeholder="Your Name">
                <i class='bx bx-lock-alt'></i>
            </div>
            <label for="password"> Password:</label>
            <div class="custome-input">
                <input type="password" name="password" placeholder="Your Password">
                <i class='bx bx-lock-alt'></i>
            </div>
            <label for="password">Phone Number:</label>
            <div class="custome-input">
                <input type="text" name="phone" placeholder="Your Phone Number">
                <i class='bx bxs-phone-call' ></i>
            </div>
            <button class="login" name="signUp">Sign Up</button>
            <div class="error_message" style="<?php if($_SESSION["SignUpError"] != null){
                echo "display:block";
            } else{
                echo "display:none";
            } ?>">
                <span>
                    <?php
                        if($_SESSION["SignUpError"] != null){
                            echo $_SESSION["SignUpError"];
                            $_SESSION["SignUpError"] = null;
                        }
                    ?>
                </span>
            </div>
            <div class="links">
                
                <a href="./SignIn.php">Have an account?</a>
                <a href="./index.php">Back To Home</a>
            </div>
        </form>
        

    </div>

</body>

</html>