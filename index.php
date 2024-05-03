<?php

require_once './Db/Db.Connection.php';
session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Booking</title>
    <link rel="stylesheet" href="./Asserts/Styles/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>
<body>
    <!-- Navbar  -->
    <header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie'></i>M Booking
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- menu  -->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="./RelisedMovies.html">Relised Movies</a></li>
            <li><a href="./Upcomming.html">UpComing Movies</a></li>
            <li><a href="#newsletter">Contact Us</a></li>
        </ul>
        <a href="./SignUp.php" style="<?php if($_SESSION['username'] != null){echo "display:none;";}else{echo "display:block";} ?>" class="btn">Sign In</a>
        <img src="./img/home3.jpg" alt="" style="width:50px ;height:50px;border-radius:100%;cursor:pointer;<?php if($_SESSION['username'] != null){echo "display:block;";}else{echo "display:none";} ?>">
    </header>

    <!-- Home  -->
    <section class="home swiper" id="home" >
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
                <form action="#">
                    <input type="hidden" name="id">
                    <button type="submit">Book Now</button>
                </form>
            </div>
            <!-- box-2  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m2.jpg" alt="">
                </div>
                <h3>Pathan</h3>
                <span>120 min | Action</span>
                <form action="#">
                    <input type="hidden" name="id">
                    <button type="submit">Book Now</button>
                </form>
            </div>
            <!-- box-3  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m3.jpg" alt="">
                </div>
                <h3>Batman vs Superman</h3>
                <span>120 min | Thriller</span>
                <form action="#">
                    <input type="hidden" name="id">
                    <button type="submit">Book Now</button>
                </form>
            </div>
            <!-- box-4  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m4.jpg" alt="">
                </div>
                <h3>John Wick 2</h3>
                <span>120 min | Action</span>
                <form action="#">
                    <input type="hidden" name="id">
                    <button type="submit">Book Now</button>
                </form>
            </div>
            <!-- box-5  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m5.jpg" alt="">
                </div>
                <h3>Aquaman</h3>
                <span>120 min | Adventure</span>
                <form action="#">
                    <input type="hidden" name="id">
                    <button type="submit">Book Now</button>
                </form>
            </div>

       
        
          
        </div>
    </div>

    <!-- coming  -->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- coming contanier  -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- box-1  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c1.jpg" alt="">
                    </div>
                    <h3>Ant-Man and the Wasp:Quantumania</h3>
                </div>
                <!-- box-2  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c2.jpg" alt="">
                    </div>
                    <h3>The Flash</h3>
                </div>
                <!-- box-3  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c3.jpg" alt="">
                    </div>
                    <h3>Guardians of the Galaxy Vol.3</h3>
                </div>
                <!-- box-4  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c4.jpg" alt="">
                    </div>
                    <h3>Shazam! Fury of the Gods</h3>
                </div>
                <!-- box-5  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c5.jpg" alt="">
                    </div>
                    <h3>Aquaman and the Lost Kingdom</h3>
                </div>
                <!-- box-6  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c6.jpg" alt="">
                    </div>
                    <h3>John Wick:Chapter 4</h3>
                </div>
                <!-- box-7 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c7.jpg" alt="">
                    </div>
                    <h3>Transformer rise of the beasts</h3>
                </div>
                <!-- box-8  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c8.jpg" alt="">
                    </div>
                    <h3>Mission: Impossible 7</h3>
                </div>
                <!-- box-9  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c9.png" alt="">
                    </div>
                    <h3>Deadpool 3</h3>
                </div>
                <!-- box-10  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c10.jpg" alt="">
                    </div>
                    <h3>Dune: Part two</h3>
                </div>
            </div>
        </div>
    </section>



    <!-- footer  -->
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
            <a href="" class="gap-flex"><i class='bx bxl-gmail' ></i></a>
            
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