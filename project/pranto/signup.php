<?php 
require "header.php";
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/Style.css">
    <style>
        .signup a{
            padding: 20px;
            text-decoration: none;
            color: black
        }
        input{
            background: transparent !important;
            border-top: none !important;
            border-left: none !important;
            border-right: none !important;
            border-bottom: 2px solid white !important;
        
        }
        #loginform ::placeholder{
            color: white !important;
        }
    </style>
    <title>Document</title>
</head>
<body>
<header id="loginform" >
    <div class="overlay">
        <div class="container">
           <div class="row align-item-center  justify-content-center  py-5">
               <div class="col-10 col-sm-8 col-lg-6 py-5">
                    <div class="card p-3">
                        <div class="card-body">   
                            <h1>Signup</h1>  

                            <?php 

                            if(isset($_GET['error'])){
                                if($_GET['error']=="emptyfields"){
                                    echo "Fill all field";
                                }
                                else if($_GET['error']=="invaliduidmail"){
                                    echo "Invalid username and mail";
                                }
                                else if($_GET['error']=="invaliduid"){
                                    echo "invalid username";
                                }
                                else if($_GET['error']=="invalidmail"){
                                    echo "invalid mail";
                                }
                                else if($_GET['error']=="passwordcheck"){
                                    echo "password do not match";
                                }
                                else if($_GET['error']=="usertaken"){
                                    echo "Username had taken";
                                }

                            }
                            else if(isset($_GET['signup'])){
                                echo "Your are successfully registered";
                            }
                           
                            
                            ?>
                            <form action="include/signup.inc.php"style="color:white;" method="post">
                               
                                <input type="text" name="uid" class="form-control my-4" placeholder="Username">
                               
                                <input type="email" name="mail" class="form-control my-4" placeholder="Email">
                               
                                <input type="password" name="pwd" class="form-control my-4" placeholder="Password">

                                <input type="password" name="pwd-repeat" class="form-control my-4" placeholder="Repeat Password">
                                <button type="submit" name="signup-submit" class="btn btn-danger btn-block">Signup</button>
                            </form>
                            
                        </div>
                    </div>
               </div>
           </div>
         </div>
    </div> 
</header>    



<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/uikit.min.js"></script>
</body>
</html>
<?php
require "footer.php"
?>