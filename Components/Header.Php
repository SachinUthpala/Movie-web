<header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie'></i>M Movies
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- menu  -->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="./RelisedMovies.php">Relised Movies</a></li>
            <li><a href="./Upcomming.php">UpComing Movies</a></li>
            <li><a href="#newsletter">Contact Us</a></li>
            <li style="<?php if( $_SESSION['adminAccess'] ==1){echo 'display:block';}else{echo 'display:none';} ?>"><a href="./Admin/Admin.php">Admin</a></li>
        </ul>
        <a href="./SignUp.php" style="<?php if($_SESSION['username'] != null){echo "display:none;";}else{echo "display:block";} ?>" class="btn">Sign In</a>
        <img src="<?php echo './'.$_SESSION['UserImg']; ?>" alt="" style="width:50px ;height:50px;border-radius:100%;cursor:pointer;<?php if($_SESSION['username'] != null){echo "display:block;";}else{echo "display:none";} ?>" onclick="location.href='Settings.php'">
</header>