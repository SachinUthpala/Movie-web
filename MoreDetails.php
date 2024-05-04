<?php


require_once './Db/Db.Connection.php';
session_start();
error_reporting(0);


$mid = intval($_POST['id']);

$sql = "SELECT * FROM `relised_movies` WHERE RMovieId = $mid";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Booking | More Details</title>
    <link rel="stylesheet" href="./Asserts/Styles/style.css">
    <link rel="stylesheet" href="./Asserts/Styles/MoreDetails.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>
<body>
    <!-- Navbar  -->
    <header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie'></i>M Book
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- menu  -->
        <ul class="navbar">
            <li><a href="./index.php" >Home</a></li>
            <li><a href="./RelisedMovies.php">Relised Movies</a></li>
            <li><a href="./Upcomming.php" >UpComing Movies</a></li>
            <li><a href="#newsletter">Contact Us</a></li>
        </ul>
        <a href="./SignUp.php" style="<?php if($_SESSION['username'] != null){echo "display:none;";}else{echo "display:block";} ?>" class="btn">Sign In</a>
        <img src="<?php echo './'.$_SESSION['UserImg']; ?>" alt="" style="width:50px ;height:50px;border-radius:100%;cursor:pointer;<?php if($_SESSION['username'] != null){echo "display:block;";}else{echo "display:none";} ?>" onclick="location.href='Settings.php'">
    </header>

    <section class="home swiper" id="home" style="height: 30vh;">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="./img/home2.png" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Thor: <br>Love and Thunder</h1>
                    <a href="" class="btn">Book Now</a>
                    <a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man <br>No Way Home</h1>
                    <a href="" class="btn">Book Now</a>
                    <a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./img/home4.png" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avengers: <br>End Game</h1>
                    <a href="" class="btn">Book Now</a>
                    <a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                </div>
            </div>
            
          </div>
          <div class="swiper-pagination"></div>
    </section>

    <section class="movies MoreDetails">
        <h1><?php echo $row['RMovieName']; ?></h1>
        <span><?php echo $row['RMovieDuration'].'Min'; ?> | <?php echo $row['RMovieType']; ?> | <span style="color:#fa1216">
            Ticket Price : <?php echo 'Rs'.$row['RMovieTicketPrice'].'.00'; ?></span></span>
        
        <div class="content">
            <div class="left">
               <img src="<?php echo './'.$row['IMG']; ?>" alt="">     
            </div><div class="right">
                <h1>Movie Discriptions</h1>
                <p><?php echo $row['Discription']; ?></p>
                    <br>
                    <h1>Movie Attress</h1>
                    <ul>
                        <li>🔻 <?php echo $row['Acttress01']; ?></li>
                        <li>🔻 <?php echo $row['Acttress02']; ?></li>
                        <li>🔻 <?php echo $row['Acttress03']; ?></li>
                    </ul>
                    <br>
                    <h1>Book A Ticket Now</h1>
                    <form action="./Db/Cart/AddToCart.php" method="post">
                        <input type="hidden" name="movieId" value="<?php echo $mid; ?>">
                        <input type="hidden" name="ticketPrice" value="<?php echo $row['RMovieTicketPrice']; ?>">
                        <input type="hidden" name="userId" value="<?php echo $row['RMovieName'] ; ?>">
                        <input type="hidden" name="Img" value="<?php echo $row['IMG'] ; ?>">
                        <input type="number" min="1" max="20" name="NumOfTicket" placeholder="Num Of Tickets">
                        <button type="submit">Add To Cart</button>
                    </form>
            </div>
        </div>
    </section>

    <!-- Home  -->

    <!-- Movies  -->
    <div class="movies" id="movies" style="padding-top: 30px;">
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies container  -->
        <div class="movies-container">
            <!-- box-1  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m1.jpg" alt="">
                </div>
                <h3>Dr.Strange</h3>
                <span>120 min | Action</span>
                <span>Ticket Price : Rs 2000.00</span>
                <div></div>
            </div>
            <!-- box-2  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m2.jpg" alt="">
                </div>
                <h3>Pathan</h3>
                <span>120 min | Action</span>
                <span>Ticket Price : Rs 2000.00</span>
            </div>
            <!-- box-3  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m3.jpg" alt="">
                </div>
                <h3>Batman vs Superman</h3>
                <span>120 min | Thriller</span>
                <span>Ticket Price : Rs 2000.00</span>
            </div>
            <!-- box-4  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m4.jpg" alt="">
                </div>
                <h3>John Wick 2</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-5  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m5.jpg" alt="">
                </div>
                <h3>Aquaman</h3>
                <span>120 min | Adventure</span>
            </div>
            
        </div>
    </div>

    <!-- footer -->
    <section class="footer">
        <a href="" class="logo">
            <i class="bx bxs-movie"></i>M Booking
        </a>
        <div class="social2">
            <h3>Quick Links</h3>
            <a href="" class="gap-flex" ><i class='bx bx-home-smile' ></i>Home</a>
            <a href="" class="gap-flex" ><i class='bx bx-camera-movie' ></i>Relised Movies</a>
            <a href="" class="gap-flex" ><i class='bx bxs-movie' ></i>Upcomming Movies</a>
            <a href="" class="gap-flex" ><i class='bx bxs-user-detail' ></i>Contact Us</a>
        </div>

        <div class="social2">
            <h3>Quick Contact</h3>
            <a href="" class="gap-flex"><i class='bx bxs-phone'></i>+94 760 271 525</a>
            <a href="" class="gap-flex"><i class='bx bxs-phone-call' ></i>0712858574 | 0147258369 </a>
            <a href="" class="gap-flex"><i class='bx bxl-gmail' ></i>MBooking@gmail.com</a>
            
        </div>
        
        <div class="social">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
        </div>
    </section>
    




  



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./Asserts/Js/main.js"></script>
</body>
</html>