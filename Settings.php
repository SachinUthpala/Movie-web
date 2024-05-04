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
            <li class="active"><a href="./Admin.Html"><i class='bx bxs-dashboard'></i>Cart</a></li>
            <li><a href="#"><i class='bx bx-store-alt'></i>Profile Settings</a></li>
            <li ><a href="#"><i class='bx bx-analyse'></i>Log Out</a></li>
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
                    <h1>Profile Settings</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Relised Movies
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
                        <h3>Recent Movies</h3>
                        
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Order Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="images/profile-1.jpg">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/profile-1.jpg">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/profile-1.jpg">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                

                <!-- End of Reminders-->

            </div>

        </main>



        <main id="AddMovie"> 
            <div class="container">
                <header>Add Movies</header>

                <form action="../DatabaseActions/Delivery.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Primary Details</span>
                            <br><br>
                            <div class="feilds">
                                <div class="input-feilds">
                                    <label>Date</label>
                                    <input type="date" value="" name="date" id="#" disabled>
                                </div>
                                <div class="input-feilds">
                                    <label>Time</label>
                                    <input type="time" value="<?php echo  $ar_created_time; ?>" name="#" id="#" disabled>
                                </div>
                                <div class="input-feilds">
                                    <label>DN Refference</label>
                                    <input type="text" name="dn" id="#" >
                                </div>
                                <div class="input-feilds">
                                    <label>Customer Name</label>
                                    <input type="text" name="customer_name" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Delivery  Address</label>
                                    <input type="text" name="delivery_address" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Contact Number</label>
                                    <input type="text" name="contact_number" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Contact Person</label>
                                    <input type="text" name="contaced_peson" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Type of Delivery</label>
                                    <select name="type_of_delivery" required>
                                    <?php while($del_type_row = $del_type->fetch(PDO::FETCH_ASSOC)){ ?>
                                        <option value="<?php echo $del_type_row['dType'] ; ?>"><?php echo $del_type_row['dType'] ; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-feilds">
                                    <label>Delivery Person </label>
                                    <input type="text" name="delivery_person" id="#" disabled>
                                </div>
                                <div class="input-feilds">
                                    <label>Requested By</label>
                                    <select name="requested_by" required>
                                    <?php while($all_REQ_rows = $req_person->fetch(PDO::FETCH_ASSOC)){ ?>
                                        <option value="<?php echo $all_REQ_rows['rName'] ; ?>"><?php echo $all_REQ_rows['rName'] ; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-feilds">
                                    <label>Vehicle Type</label>
                                    <select name="vehicle_type" required>
                                        <option value="Bike">Bike</option>
                                        <option value="Lorry">Lorry</option>
                                        <option value="Car">Car</option>
                                        <option value="Van">Van</option>
                                        <option value="Bus">Bus</option>
                                        <option value="Airplane">Airplane</option>
                                    </select>
                                </div>
                                <div class="input-feilds">
                                    <label>Urgancy of deivery</label>
                                    <select name="uragncy" required>
                                        <option value="Sheduled">Sheduled</option>
                                        <option value="Not Urgent">Not Urgent</option>
                                        <option value="Urgent">Urgent</option>
                                        <option value="Very Urgent">Very Urgent</option>
                                    </select>
                                </div>
                                <div class="input-feilds">
                                    <label>Add Remark </label>
                                    <input type="text" name="delivery_remark" id="#" width="200px">
                                </div>
                                <div class="input-feilds">
                                    <label>Expected delivery date</label>
                                    <input type="date" value="<?php echo $ar_created_date ; ?>" name="exp_date" id="#" >
                                </div>
                            </div>

                            <div class="btns">
                                <button type="submit" name="submit" class="nxtBtn submits">
                                    <span class="btnText" ></span>Create Delivery</span>
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