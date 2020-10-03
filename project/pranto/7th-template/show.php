<?php 
include '../include/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image/fashion-clothing-model-hugo-boss-dress-png-clip-art.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="pranto.css">
    <title>Document</title>
  
</head>
<body">
    <section id="showtable">
        <div class="showtable">
            <div class="container py-5">
                <div class="row">
                    <div class="col-8 col-md-5">

                    <div class="card p-3">
                    <div class="text-center"><img src="../Image/logo.png" alt="" style="width:100px; height:100px;"></div>
                    <h1 class="text-center" >Thanks For Shopping</h1>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                            <?php
                                 date_default_timezone_set("Asia/Dhaka");
                                 echo date("h:i:sa"),"<br>";
                             ?>
                             </h5>
                            <p class="card-text">
                                <hr>
                           <?php
                            $sql = "SELECT * FROM info ORDER BY id DESC LIMIT 1;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            
                            if($resultCheck>0){
                                while($row= mysqli_fetch_assoc($result)){

                                    echo 'ID:---' ,$row['id'],'<br>','UserName:---' ,$row['username'],'<br>','Product:---' ,$row['productname'],'<br>','Color:---' ,$row['color'],'<br>',
                                    'Size:---' ,$row['size'],'<br>','Phone:---' ,$row['phone'],'<br>','Price:---' ,$row['price'] ;
                                }
                            }
                            ?>
                             <hr>
                            </p>
                        </div>
                    </div>
          
               <div class="py-2">
               <a href="home.php" class="btn btn-danger">Quit</a>
               </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <script src="js/jquery-slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script>
            $(window).scroll(function () {
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
            });
        </script>
</body>
</html>