<?php

require_once '../Db/Db.Connection.php';
session_start();

$sqlMovie = "SELECT * FROM relised_movies";
$result = $conn->query($sqlMovie);



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
            <li class="active"><a href="./Admin.Html"><i class='bx bxs-dashboard'></i>Relised Movies</a></li>
            <li onclick="displayCurrent()"><a href="#"><i class='bx bx-store-alt'></i>Current Added Movies</a></li>
            <li  onclick="displayAddMovie()"><a href="#"><i class='bx bx-analyse'></i>Add Movie</a></li>
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
            <img src="<?php echo '../'.$_SESSION['UserImg']; ?>">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main id="current">
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
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
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Type</th>
                                <th>Ticket price</th>
                                <th>Actress</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()){ ?>
                            <tr>
                                <td>
                                    <img src="<?php echo '../'.$row['IMG'] ?>">
                                    <p><?php echo $row['RMovieName'] ;?></p>
                                </td>
                                <td><?php echo $row['RMovieDuration']; ?></td>
                                <td><?php echo $row['RMovieType']; ?></td>
                                <td><?php echo $row['RMovieTicketPrice']; ?></td>
                                <td>
                                    <ul>
                                        <li><?php echo $row['Acttress01']; ?></li>
                                        <li><?php echo $row['Acttress02']; ?></li>
                                        <li><?php echo $row['Acttress03']; ?></li>
                                    </ul>
                                </td>
                                <td>
                                <form action="../Db/RelisedMovie/DeleteMovie.php" method="post">
                                        <input type="hidden" name="mid" value="<?php echo $row['RMovieId'] ;?>">
                                        <input type="submit" value="Delete" name="deleteMovie" style="padding: 5px 10px; background-color: #EC5800;border:none;border-radius: 3px;color:#fff;">
                                    </form>
                                </td>
                                <td>
                                <form action="./updateCurrent.php" method="post">
                                        <input type="hidden" name="mid" value="<?php echo $row['RMovieId'] ;?>">
                                        <input type="submit" value="Update" name="deleteUser" style="padding: 5px 10px; background-color: green;border:none;border-radius: 3px;color:#fff;">
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
                <header>Add Movies</header>

                <form action="../Db/RelisedMovie/AddMovie.php" method="post" enctype="multipart/form-data">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Primary Details</span>
                            <br><br>
                            <div class="feilds">
                                <div class="input-feilds">
                                    <label>Name</label>
                                    <input type="text" value="" name="name" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Duration</label>
                                    <input type="text"  name="duration" id="#" required>
                                </div>

                                <div class="input-feilds">
                                    <label>Movie Type</label>
                                    <select name="movie_type" required>
                                        <option value="Action">Action</option>
                                        <option value="Thriller">Thriller</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Romantic">Romantic</option>
                                    </select>
                                </div>

                                <div class="input-feilds">
                                    <label>Ticket Price</label>
                                    <input type="number" name="ticketPrice" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Discription</label>
                                    <input type="text" name="Discription" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Acttress01</label>
                                    <input type="text" name="Acttress01" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Acttress02</label>
                                    <input type="text" name="Acttress02" id="#" required>
                                </div>
                                <div class="input-feilds">
                                    <label>Acttress03</label>
                                    <input type="text" name="Acttress03" id="#" required>
                                </div>
                                
                                
                                <div class="input-feilds">
                                    <label>Image </label>
                                    <input type="file" name="image" id="#" required>
                                </div>
                                
                                
                                
                            </div>

                            <div class="btns">
                                <button type="submit" name="submit" class="nxtBtn submits">
                                    <span class="btnText" ></span>Create Movie</span>
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        

    </div>

    <script src="Admin.js"></script>
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
</body>

</html>