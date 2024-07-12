<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styleone.css">
</head>
<body>
   

  
<div class="container mb-4">
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
  <a class="navbar-brand mg-5 fw-bold fs-3 h-font" href="../index.php">JK School</a>
  <!-- <a class="navbar-brand mg-5 fw-bold fs-3 h-font" href="index.php">JK School</a> -->
   
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

   

    <div class="container d-flex items-center">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>