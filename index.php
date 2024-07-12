<?php
$cn = mysqli_connect("localhost", "root", "", "db_admission");
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/79d1bfb033.js" crossorigin="anonymous"></script>
    <link
     rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styleone.css">
    <title>Student Management</title>
</head>

<body>


<div class="container mb-4">
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand mg-5 fw-bold fs-3 h-font" href="index.php">JK School</a>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="?a=student_add">Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="?a=view">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Logout</a>
        </li>
    
      </ul>
      <div class="d-flex">
      <a href="login_registration/login.php">
    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">Login</button>
</a>
<a href="login_registration/registration.php">
    <button type="button" class="btn btn-outline-dark shadow-none">Register</button>
</a>

      </div>
    </div>
  </div>
</nav>
</div>

    <div class="welcome-area">
        <div class="owl-carousel slider-content mb-5">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>We provide quality education</h2>
                                    <p>"The beautiful thing about learning is that no one can <br>
                                        what one has learned in school.
                                        <br><i>Albert Einstein</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <?php include ('component/controller.php'); ?>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container shadow-sm">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget">
                        <h3>JK School</h3>
                        <div class="">
                        <p> Education is what remains after one has forgotten <br>
                                what one has learned in school.

                                <br><i>Albert Einstein</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="?a=student_add">admission</a></li>
                                <li><a href="?a=view">students</a></li>
                               
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Contact Us</h3>
                    <span class="social-icon">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </span>
                
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
