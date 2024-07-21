<?php

require_once './Db/Db.Connection.php';
session_start();
error_reporting(0);


$ids = intval($_SESSION['UserId']);

$sql = "SELECT * FROM `cart` WHERE userId = $ids ";

$result = $conn -> query($sql);


$sql2 = "SELECT * FROM users WHERE UserId  = $ids";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./Admin/Admin.Css">
    <title>FMFPT MOVIE BOOKIG</title>
    <script src="./Admin/Admin.js"></script>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            
            <div class="logo-name">FMFPT</div>
        </a>
        <ul class="side-menu">
            <li class="active"  onclick="displyCart()"><a ><i class='bx bxs-dashboard'></i>Cart</a></li>
            <li onclick="displayProfile()"><a href="#"><i class='bx bx-store-alt'></i>Profile Settings</a></li>
            <li ><a href="./Db/logout.php"><i class='bx bx-analyse'></i>Log Out</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="./index.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Back
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <script>
        function displyCart(){
            document.getElementById('current').style.display = "block";
            document.getElementById('UpdateUser').style.display = "none";
        }

        function displayProfile(){
            document.getElementById('current').style.display = "none";
            document.getElementById('UpdateUser').style.display = "block";
        }
    </script>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            
            <a href="#" class="profile">
                <img src="<?php echo './'.$_SESSION['UserImg']; ?>">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main id="current">
            <div class="header">
                <div class="left">
                    <h1>Profile Settings</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                
                            </a></li>
                        /
                        <li><a href="#" class="active"> Relised Movies</a></li>
                    </ul>
                </div>
                
            </div>

         

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Recent Cart</h3>
                        
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Movie</th>
                                <th>Number Of Ticket</th>
                                <th>Total Amount</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result -> fetch_assoc()) {?>
                            <tr>
                                <td>
                                    <img src="<?php echo './'.$row['Img'] ;?>">
                                    <p><?php echo $row['UserName']; ?></p>
                                </td>
                                <td><?php echo $row['NumberOfTickets']; ?></td>
                                <td><?php echo $row['Total']; ?></td>
                                <td>
                                <form action="./Db/Cart/Delete.php" method="post">
                                        <input type="hidden" name="UserIds" value="<?php echo $row['UserIds'] ;?>">
                                        <input type="submit" value="Delete" name="delete" style="padding: 5px 10px; background-color: #EC5800;border:none;border-radius: 3px;color:#fff;">
                                    </form>
                                </td>
                                <td>
                                <form action="./Db/Cart/Update.php" method="post">
                                    <?php $ticketPrice = intval($row['Total']) / intval($row['NumberOfTickets']); ?>
                                        <input type="hidden" name="mid" value="<?php echo $row['UserIds'] ;?>">
                                        <input type="hidden" name="ticketPrice" value="<?php echo $ticketPrice ;?>">
                                        <input type="number" name="numoftickets" id="" style="width: 40px;" max="20" min="1" value="<?php echo $row['NumberOfTickets'] ;?>">
                                        <input type="submit" value="Update" name="update" style="padding: 5px 10px; background-color: green;border:none;border-radius: 3px;color:#fff;">
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                

                <!-- End of Reminders-->

            </div>

        </main>



        <main id="UpdateUser"> 
            <div class="container">
                <header>Update Profile</header>

                <form action="./Db/User/update.php" method="post" enctype="multipart/form-data">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Primary Details</span>
                            <br><br>
                            <div class="feilds">
                                
                                <div class="input-feilds">
                                    <label>User Name</label>
                                    <input type="text" name="username" value="<?php echo $row2['UserName'] ?>" id="#" >
                                </div>
                                <div class="input-feilds">
                                    <label>User Mail</label>
                                    <input type="email" name="email" id="#" value="<?php echo $row2['UserMail'] ?>" required>
                                </div>
                                
                                <div class="input-feilds">
                                    <label>Phone</label>
                                    <input type="text" name="phone" id="#" value="<?php echo $row2['UserPhone'] ?>" required>
                                </div>

                                <div class="input-feilds">
                                    <label>Password</label>
                                    <input type="password" name="password" id="#" value="<?php echo $row2['userPassword'] ?>" required>
                                </div>
                               
                                <div class="input-feilds">
                                    <label>Img</label>
                                    <input type="file" name="profileImg" id="#" value="<?php echo $row2['UserImg'] ?>" required>
                                </div>

                                <input type="hidden" name="ids" value="<?php echo $ids; ?>">
                                

                            <div class="btns">
                                <button type="submit" name="submit" class="nxtBtn submits">
                                    <span class="btnText" ></span>Update User</span>
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        

    </div>

    
    
</body>

</html>