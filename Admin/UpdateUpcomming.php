<?php

require_once '../Db/Db.Connection.php';
session_start();
$id = intval($_POST['mid']);
$sqlMovie = "SELECT * FROM upcommingmovies WHERE UMovieId = $id";
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
    <script src="Admin.js"></script>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            
            <div class="logo-name">FMFPT</div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="./Admin.Html"><i class='bx bxs-dashboard'></i>Upcomming Movies</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="./Upcomming.php" class="logout">
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
                                Upcomming Movies
                            </a></li>
                        /
                        <li><a href="#" class="active"> Upcomming Movies</a></li>
                    </ul>
                </div>
                
            </div>

        <main id="AddMovie"> 
            <div class="container">
                <header>Add Movies</header>

                <form action="../Db/Upcomming/AddMovie.php" method="post" enctype="multipart/form-data">
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

    
</body>

</html>