<?php
error_reporting(0);
require_once '../Db/Db.Connection.php';
session_start();

if(!isset($_SESSION['username'])){
    header("Location: ../index.php");
}

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Admin.Css">
    <title>FMFPT MOVIE BOOKIG</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            
            <div class="logo-name">FMFPT</div>
        </a>
        <ul class="side-menu">
            <li ><a href="./Admin.Html"><i class='bx bxs-dashboard'></i>User Management</a></li>
            <li class="active" onclick="displayCurrent()"><a href="#"><i class='bx bx-store-alt'></i>Current Users</a></li>
            <li  onclick="displayAddMovie()"><a href="#"><i class='bx bx-analyse'></i>Add User</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="./Admin.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Back
                </a>
            </li>
        </ul>
    </div>
    <script src="./Admin.js"></script>
    
    <!-- End of Sidebar -->
    <script>
        function displayAddMovie(){
            document.getElementById("AddMovie").style.display = "block"
            document.getElementById("current").style.display = "none"
        }

        function displayCurrent(){
            document.getElementById("AddMovie").style.display = "none"
            document.getElementById("current").style.display = "block"
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
                <img src="images/logo.png">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main id="current">
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Customers | System Users
                            </a></li>
                        /
                        <li><a href="#" class="active"> Customers | System Users</a></li>
                    </ul>
                </div>
                
            </div>

         

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Recent Users</h3>
                        
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Admin Access</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()){ ?>
                            <tr>
                                <td>
                                    <img src="<?php echo '../'.$row['UserImg']; ?>">
                                    <p><?php echo $row['UserName']; ?></p>
                                </td>
                                <td><?php echo $row['UserMail']; ?></td>
                                <td><?php echo $row['userPassword']; ?></td>
                                <td><?php echo $row['UserPhone']; ?></td>
                                <td><?php if($row['	IsAdmin'] == 1) { echo "Have"; } else { echo "Dont have" ;} ?></td>
                                <td>
                                    <form action="../Db/User/DeleteUser.php" method="post">
                                        <input type="hidden" name="userId" value="<?php echo $row['UserId'] ;?>">
                                        <input type="submit" value="Delete" name="deleteUser" style="padding: 5px 10px; background-color: #EC5800;border:none;border-radius: 3px;color:#fff;">
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



        <main id="AddMovie"> 
            <div class="container">
                <header>Add User</header>

                <form action="../Db/User/AddUser.php" enctype="multipart/form-data" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Primary Details</span>
                            <br><br>
                            <div class="feilds">
                                
                                <div class="input-feilds">
                                    <label>User Name</label>
                                    <input type="text" name="username" id="#" >
                                </div>
                                <div class="input-feilds">
                                    <label>Email</label>
                                    <input type="text" name="email" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Password</label>
                                    <input type="text" name="password" id="#" required>
                                </div>
                                
                                <div class="input-feilds">
                                    <label>Phone</label>
                                    <input type="text" name="phone" id="#" required>
                                </div>
                                
                                <div class="input-feilds">
                                    <label>Admin Access</label>
                                    <select name="isAdmin" id="">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                
                                <div class="input-feilds">
                                    <label>Image</label>
                                    <input type="file" name="profileImg" id="">
                                </div>
                                

                            <div class="btns">
                                <button type="submit" name="submit" class="nxtBtn submits">
                                    <span class="btnText" ></span>Create User</span>
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