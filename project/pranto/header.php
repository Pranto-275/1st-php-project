<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/uikit.min.css">
    <style>


        .signup a{
            padding: 20px;
            text-decoration: none;
            color: black;
        }
        ::placeholder{
            color: white !important;
        }

        .signup{
            font-weight: bold;
           
        }

    </style>
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg signupnav bg-light fixed-top">
      <a class="navbar-brand"><img src="Image/logo.png" alt="" style="width:60px;height:60px;"></a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span ><i class="fas fa-caret-square-down fa-2x"></i></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
          <div class="ml-auto form-inline">
              <?php
                 if(isset($_SESSION['userId'])){
                    echo ' <form action="include/logout.inc.php" method="post">
                    <button name="logout-submit" class="btn btn-warning " type="submit">Logout</button>
                </form> ';
                 }
                 else{
                     echo ' <form action="include/login.inc.php"method="post">
                     <input name="mailuid" class="form-control mr-sm-2 m-3" type="text" placeholder="Your ID">
                     <input name="password" class="form-control mr-sm-2 m-3" type="password" placeholder="Password">
                     <button name="login-submit" class="btn btn-success" type="submit">Login</button>
                 </form>
                         <span class="signup mx-2" >
                 <a href="signup.php" class="signup">SIGNUP</a>
                             </span> ';
                 }
             ?>
           
          </div>
      </div>
  </nav>


</body>
<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/uikit.min.js"></script>
</body>
</html>