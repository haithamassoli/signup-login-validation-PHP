<?php
session_start();
include "./conn.php";
if (!isset($_SESSION["name"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>
   <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!-- Start Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
         <a class="navbar-brand" href="index.php">
            <img src="img/logo.svg" alt="Turtles">
         </a>
         <ul class="navbar-nav me-auto ">
            <li class="nav-item me-3">
               <a class="nav-link" aria-current="page" href="dashboard.php">Quizes</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="about.html">About</a>
            </li>
         </ul>
         <div>
            <a href="logout.php" class="btn secondaryBtn me-1">Sign out</a>
         </div>
      </div>
   </nav>
   <!-- End Navbar -->
   <section class="dashboard">
      <div class="page-header">
         <div class="container">
            <div class="page-header-text">
               <div class="dashboard-header d-flex">
                  <div class="d-flex align-items-center flex-column ">
                     <div id="profileImg" class="dashboard-center ">
                        <img class="dashboard-img" src="<?php echo "./" . $_SESSION["image"]; ?>" alt="" id="profile">
                     </div>
                     <div class="welcome">
                        <div class="dashboard-title">Hi <span id="username"><?php echo ucwords($_SESSION["name"]); ?></span> !</div>
                        <div class="dashboard-des">Welcome back</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container ">
         <div class="quizes-title">
            <div class="quize-bold">Quizes</div>
            <div class="quize-des">Test your knowledge</div>
         </div>
         <div class="row quizes-padding ">
            <div class="col-lg-4 col-md-6 col-sm-6 ">
               <div class="quizes-card">
                  <div class="box_grid">
                     <img src="img/solar.jpg" alt="">
                     <div class="quiz-card">
                        <div class="card-title">
                           solar system
                        </div>
                        <ul>
                           <li> <i class="far fa-book-open"></i><span class="mx-1">5</span><span class="dm-none">Question</span></li>
                           <li> <i class="far fa-history"></i><span class="mx-1">01.25</span><span class="dm-none">Minute</span></li>
                           <li><a href="quiz.html" id="quizStart1" class="btn primaryBtn start-btn ">Start</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 ">
               <div class="quizes-card">
                  <div class="box_grid">
                     <img src="img/front-end.jpg" alt="">
                     <div class="quiz-card">
                        <div class="card-title">
                           front-end
                        </div>
                        <ul>
                           <li> <i class="far fa-book-open"></i><span class="mx-1">5</span><span class="dm-none">Question</span></li>
                           <li> <i class="far fa-history"></i><span class="mx-1">01.25</span><span class="dm-none">Minute</span></li>
                           <li><a href="quiz.html" id="quizStart2" class="btn primaryBtn start-btn">Start</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 ">
               <div class="quizes-card">
                  <div class="box_grid">
                     <img src="img/geography.jpg" alt="">
                     <div class="quiz-card">
                        <div class="card-title">
                           geography
                        </div>
                        <ul>
                           <li> <i class="far fa-book-open"></i><span class="mx-1">5</span><span class="dm-none">Question</span></li>
                           <li> <i class="far fa-history"></i><span class="mx-1">01.25</span><span class="dm-none">Minute</span></li>
                           <li><a href="quiz.html" id="quizStart3" class="btn primaryBtn start-btn">Start</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 ">
               <div class="quizes-card">
                  <div class="box_grid">
                     <img src="img/body.jpg" alt="">
                     <div class="quiz-card">
                        <div class="card-title">
                           human body
                        </div>
                        <ul>
                           <li> <i class="far fa-book-open"></i><span class="mx-1">5</span><span class="dm-none">Question</span></li>
                           <li> <i class="far fa-history"></i><span class="mx-1">01.25</span><span class="dm-none">Minute</span></li>
                           <li><a href="quiz.html" id="quizStart4" class="btn primaryBtn start-btn">Start</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 ">
               <div class="quizes-card">
                  <div class="box_grid">
                     <img src="img/IT.png" alt="">
                     <div class="quiz-card">
                        <div class="card-title">
                           information technology
                        </div>
                        <ul>
                           <li> <i class="far fa-book-open"></i><span class="mx-1">5</span><span class="dm-none">Question</span></li>
                           <li> <i class="far fa-history"></i><span class="mx-1">01.25</span><span class="dm-none">Minute</span></li>
                           <li><a href="quiz.html" id="quizStart5" class="btn primaryBtn start-btn">Start</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <aside class="floaty-bar">
      <div class="main-header box-shadow-header floaty">
         <div class="container">
            <div class="footer d-flex align-items-center ">
               <div class="col-md-4 center">
                  <i class="fas fa-book-open me-1"></i> <a class="white" href="dashboard.php">Quizes</a>
               </div>
               <div class="border"></div>
               <div class="col-md-4 center">
                  <i class="fas fa-rabbit me-1"></i><a class="white" href="about.html">About</a>
               </div>
            </div>
         </div>
   </aside>
   <footer>
      <div class="container">
         <div class="footer-link  d-flex justify-content-between">
            <div class="d-flex">
               <div><a class="link" href="about.html">About</a></div>
               <div><a class="link" href="#">Help</a></div>
               <div><a class="link" href="#">Privacy</a></div>
               <div><a class="link" href="#"> Terms </a></div>
               <div><a class="link" href="#">Contact</a></div>
            </div>
            <div class="link copyright">Copyright © 2021 Turtles.</div>
         </div>
      </div>
   </footer>
   <script src="js/dashboard.js"></script>

</body>

</html>