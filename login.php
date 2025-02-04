<?php
session_start();
include "./conn.php";
$emailError  = "";
$email = $password  = "";
$ok = 1;
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
   $email = strtolower($_POST["email"]);
   $password = ($_POST["password"]);

   $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
         $_SESSION["name"] = $row["name"];
         $_SESSION["image"] = $row["image"];
         $_SESSION["admin"] = $row["admin"];
      }
      if ($_SESSION["admin"] == 0) {
         header('Location: dashboard.php');
         exit;
      }
      if ($_SESSION["admin"] == 1) {
         header('Location: ./admin/admin.php');
         exit;
      }
   } else {
      $emailError =  "email or password is incorrect";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
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
               <a class="nav-link" aria-current="page" href="#">Quizes</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="about.html">About</a>
            </li>
         </ul>
         <div>
            <a href="signUp.php" class="btn primaryBtn">Sign Up</a>
         </div>
      </div>
   </nav>
   <!-- End Navbar -->
   <section class="Login">
      <div class="container mt-5 ">
         <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
               <div class="card mb-5">
                  <div class="login-card-header mt-3">Log In to Your Account! </div>
                  <div class="card-body">
                     <form id="form-register" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group ">
                           <label for="email" class="control-label">E-Mail Address</label>
                           <input id="email" type="text" class="form-control" name="email">
                           <div class="check"></div>
                        </div>
                        <div class="form-group ">
                           <label for="password" class="control-label">Password</label>
                           <input id="password" type="password" class="form-control" autocomplete="off" name="password">
                           <div class="check"><?php echo  $emailError; ?></div>
                        </div>
                        <div class="form-group">
                           <input type="submit" class="btn primaryBtn white full-width" id='btn' value="Login">
                        </div>
                     </form>
                     <div class="mt-4">
                        <span>Don't have an account? <a class="ms-1 regster-href" href="signUp.php">Sign up</a> </span>
                     </div>
                  </div>
               </div>
            </div>
            <div>
   </section>
   <aside class="floaty-bar">
      <div class="main-header box-shadow-header floaty">
         <div class="container">
            <div class="footer d-flex align-items-center ">
               <div class="col-md-4 center">
                  <i class="fas fa-book-open me-1"></i> <a class="white" href="#">Quizes</a>
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
</body>

</html>