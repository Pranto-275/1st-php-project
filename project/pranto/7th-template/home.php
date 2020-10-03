<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store</title>
    <link rel="shortcut icon" href="Image/fashion-clothing-model-hugo-boss-dress-png-clip-art.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/uikit.min.css">
   
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        .signup a{
            padding: 20px;
            text-decoration: none;
            color: black;
        }

        .signup{
            font-weight: bold;
           
        }
        #homesection p a{
        text-decoration: none !important;
        }
        #homesection p{
            font-size: 20px  !important ;
            font-weight: bold !important;
        }
        #homesection p:hover{
           color: black !important;
        }

    </style>


</head>

<body>
    <!-----------------------------------------NAVBAR---------------------------------------------->
    <nav class="navbar navbar-expand-md navbarBG fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php" style="font-weight: bold; font-size: 22px;">STORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pranto">
                <span uk-icon="icon: triangle-down;ratio:2"></span>
            </button>
            <div class="collapse navbar-collapse" id="pranto">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php" uk-scroll>Home</span></a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" uk-scroll>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span uk-icon="icon:cart"></span> Cart</a>
                    </li>
                </ul>
                <div class="ml-auto form-inline">
              <?php
                 if(isset($_SESSION['userId'])){
                    echo ' <form action="../include/logout.inc.php" method="post">
                    <button name="logout-submit" class="btn btn-warning" type="submit">Logout</button>
                </form>';
                 }
                 else{
                     echo '  <form action="include/login.inc.php"method="post">
                     <input name="mailuid" class="form-control mr-sm-2 m-3" type="text" placeholder="Email">
                     <input name="password" class="form-control mr-sm-2 m-3" type="password" placeholder="Password">
                     <button name="login-submit" class="btn btn-success" type="submit">Login</button>
                 </form>
                         <span class="signup mx-2" >
                 <a href="signup.php">Signup</a>
                             </span>';
                 }
             ?>
           
          </div>
            </div>
        </div>
    </nav>

    <!-----------------------------------------------------Home section------------------------------------>
    <div id="homesection" >
        <div class="homeinner">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">

                        <div uk-scrollspy="cls:uk-animation-slide-left; target: .adBG; delay: 300;repeat:true">
                            <div class="adBG">
                                <div class="adELEMENT">
                                    <h1 class="display-4" style="font-weight: bolder;">HUGE </h1>
                                    <h1 style="margin-top:-20px; text-align: center;font-weight: 600">SALE</h1>
                                    <h1 style="margin-top:-20px; text-align: center;font-weight: 300"> <span
                                            style=" color: #EE5A24">45%</span> OFF</h1>
                                    <button class="btn btncollection" uk-toggle="target: #my-id"><small><b>SHOP
                                                COLLECTION</b></small></button>
                                </div>
                            </div>
                            <div uk-offcanvas="flip:ture;overlay:true;mode:slide" id="my-id">
                                <div class="uk-offcanvas-bar OFFCANVAS">
                                    <span class="uk-offcanvas-close ">
                                        <i class="fas fa-times fa-2x"></i>
                                    </span>
                                    <p><a class="p-2" href="#collection" uk-scroll ><i class="fas fa-cart-plus p-2 fa-2x"></i> New Arrivel</a></p> 
                                    <p><a class="p-2" href="#sample" uk-scroll ><i class="fas fa-lightbulb  p-2 fa-2x"></i> Our Collection</a> </p>
                                    <p><a class="p-2" 2href="#fastMove" uk-scroll ><i class="fas fa-percent p-2 fa-2x"></i> Discount</a> </p>
                                    <p><a class="p-2" href="#ourProducts" uk-scroll><i class="fas fa-tags p-2 fa-2x"></i> Our Product</a> </p>
                                    <p><a class="p-2" href="#comments" uk-scroll><i class="fas fa-comments p-2 fa-2x"></i> Comments</a></p>
                                    <p><a class="p-2" href="#blog" uk-scroll ><i class="fas fa-blog p-2 fa-2x"></i> Blog</a> </p>
                                    <p><a class="p-2" href="#subscribe" uk-scroll ><i class="fas fa-align-left p-2 fa-2x"></i> Form</a> </p>
                                </div>
                            </div>

                        </div>

                        <!----column end-->
                    </div>
                    <!----Row end-->
                </div>

                <!----container end-->
            </div>
            <!----homeinner end-->
        </div>
        <!----homesection end-->
    </div>


    <!-------------------------------------Collection------------------>
    <section id="collection" uk-lightbox>
        <div class="container">
            <div class="row pt-5 pb-3"
                uk-scrollspy="cls:uk-animation-slide-bottom; target: > div; delay: 200;repeat:true">
                <div class="col-12 text-center py-5">
                    <h1 class="display-4">
                        <b>NEW <span style="color: #f6b93b">ARRIVAL</span></b>
                    </h1>
                    <p>We love to tell our successful far far away, behind the word mountains,
                        far from the countries Vokalia and Consonantia, there live the blind texts.
                    </p>
                </div>
                <div class="col-12 col-lg-4 py-3 ">
                    <a href="Image/item-2.jpg">
                        <div class="collectionIMAGE">
                            <img src="Image/item-2.jpg" alt="" class="img-fluid">
                            <div class="overlay">
                                <div class="text">
                                    <h5><b>New Arrival</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-4 py-3">
                    <a href="Image/item-3.jpg">
                        <div class="collectionIMAGE">
                            <img src="Image/item-3.jpg" alt="" class="img-fluid">
                            <div class="overlay">
                                <div class="text">
                                    <h5><b>Men Shoes</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-4 py-3">
                    <a href="Image/Glass.jpg">
                        <div class="collectionIMAGE">
                            <img src="Image/Glass.jpg" alt="" class="img-fluid">
                            <div class="overlay">
                                <div class="text">
                                    <h5><b>Woman's Glass</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!----row end-->
            </div>
            <div class="row" uk-scrollspy="cls:uk-animation-slide-bottom; target: > div; delay: 200;repeat:true">
                <div class="col-12 col-lg-6 py-3">
                    <a href="Image/10.jpg">
                        <div class="collectionIMAGE">
                            <img src="Image/10.jpg" alt="" class="img-fluid">
                            <div class="overlay">
                                <div class="text">
                                    <h5><b>Woman's Collection</b></h5>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6 py-3">
                    <a href="Image/banner1.jpg">
                        <div class="collectionIMAGE">
                            <img src="Image/banner1.jpg" alt="" class="img-fluid">
                            <div class="overlay">
                                <div class="text">
                                    <h5><b>Men's Collection</b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!----row end-->
            </div>
            <!----container end-->
        </div>
        <!----collection end-->
    </section>

    <!-------------------------------------------Sampols------------------------->
    <section id="sample" class="py-5">
        <div class="container py-5">
            <div class="row py-5" uk-scrollspy="cls:uk-animation-fade; target: > div; delay: 200;repeat:true">
                <div class="col-12 text-center py-5">
                    <h1 class="display-4">
                        <b>OUR <span style="color: #f6b93b">COLLECTION</span></b>
                    </h1>
                    <p>We love to tell our successful far far away, behind the word mountains,
                        far from the countries Vokalia and Consonantia, there live the blind texts.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <div class="card border-0">
                        <div class="card-img-top">
                            <div class="sampleIMAGE">
                                <img src="Image/item-6.jpg" alt="" class="img-fluid ">
                                <div class="sample-overlay">
                                    <div class="sample-text">
                                        New
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h4><b>MEN CASUAL </b></h4>
                                <p style="margin-top: -10px;" class="text-muted">STOCK AVAILABLE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <div class="card border-0">
                        <div class="card-img-top">
                            <div class="sampleIMAGE">
                                <img src="Image/item-7.jpg" alt="" class="img-fluid ">
                                <div class="sample-overlay">
                                    <div class="sample-text">
                                        New
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h4><b>WOMAN CASUAL </b></h4>
                                <p style="margin-top: -10px;" class="text-muted">STOCK AVAILABLE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <div class="card border-0">
                        <div class="card-img-top">
                            <div class="sampleIMAGE">
                                <img src="Image/item-5.jpg" alt="" class="img-fluid ">
                                <div class="sample-overlay">
                                    <div class="sample-text">
                                        New
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h4><b>PARTY DRESS</b></h4>
                                <p style="margin-top: -10px;" class="text-muted">STOCK AVAILABLE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <div class="card border-0">
                        <div class="card-img-top">
                            <div class="sampleIMAGE">
                                <img src="Image/item-8.jpg" alt="" class="img-fluid ">
                                <div class="sample-overlay">
                                    <div class="sample-text">
                                        New
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h4><b>EXERCISE DRESS</b></h4>
                                <p style="margin-top: -10px;" class="text-muted">STOCK AVAILABLE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------------------------------------------Offerbanner------------------------->

    <section id="fastMove">
        <section id="offerbanner">
            <div class="bannerInner">
                <div class="bannerelement">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-lg-3 py-4"
                            uk-scrollspy="cls:uk-animation-scale-up; target: > h1,span; delay: 200;repeat:true">
                            <h1 class="display-3" style="display: inline-block; font-weight:bolder; color: #EE5A24">50%
                            </h1> <span class="uk-text-center" style="font-weight:600;font-size: 30px;">OFF</span>
                            <h1 class="display-2" style="margin-top:-18px; font-weight: bold;">SALE</h1>
                        </div>
                        <div class="col-lg-4 ml-lg-5 pt-lg-3 pb-lg-5">
                            <h3 style="font-weight: bold;">Just hurry up limited offer!</h3>
                            <p> Separated they live in Bookmarks grove right at the coast of the Semantics, a large
                                language ocean.</p>
                            <a href="#" class="btn btnOFFER" uk-toggle="target: #pial">Shop Now</a>
                            <a href="#" class="btn btnOFFEROUTLINE" uk-toggle="target: #pranto">Shop Now</a>

                            <div uk-offcanvas="flip:ture;overlay:true;mode:slide" id="pial">
                                <div class="uk-offcanvas-bar OFFCANVAS">
                                    <span class="uk-offcanvas-close ">
                                        <i class="fas fa-times fa-2x"></i>
                                    </span>
                                    <p><img src="Image/item-10.jpg" alt=""></p>
                                </div>
                            </div>

                            <div uk-offcanvas="flip:ture;overlay:true;mode:push" id="pranto">
                                <div class="uk-offcanvas-bar OFFCANVAS2">
                                    <span class="uk-offcanvas-close ">
                                        <i class="fas fa-times fa-2x"></i>
                                    </span>
                                    <p> <img src="Image/item-6.jpg" alt=""></p>
                                </div>
                            </div>


                        </div>
                        <!----row end-->
                    </div>
                    <!----container end-->
                </div>
            </div>
                <!----bannerInner end-->
            </div>
            <!----offerbanner end-->
        </section>
        <!-------------------------------------------ourProducts------------------------->
        <section id="ourProducts" class="bg-light  py-5">
            <div class="container">
                <div class="row text-center"
                    uk-scrollspy="cls:uk-animation-slide-left; target: > div; delay: 200;repeat:true">
                    <div class="col-12 text-center py-5">
                        <h1 class="display-5">
                            <b> ──── OUR <span style="color: #f6b93b">PRODUCTS ────</span></b>
                        </h1>
                        <p>We love to tell our successful far far away, behind the word mountains,
                            far from the countries Vokalia and Consonantia, there live the blind texts.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-9.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay" style="background-color: red;">
                                        <div class="product-text">
                                            sale
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>Blazer </b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b"><strike>$300.00</strike> <br> $150.00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-10.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay">
                                        <div class="product-text">
                                            STOCK
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>T-shirt And Shorts</b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b">$200.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-11.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay">
                                        <div class="product-text">
                                            STOCK
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>Full T-shirt And Shorts </b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b">$250.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-12.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay">
                                        <div class="product-text">
                                            STOCK
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>Dress code :420</b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b">$270.00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----row end-->
                </div>
                <div class="row text-center"
                    uk-scrollspy="cls:uk-animation-slide-left; target: > div; delay: 200;repeat:true">

                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-13.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay" style="background-color: red;">
                                        <div class="product-text">
                                            sale
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>Dress code :421</b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b">$300.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-14.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay">
                                        <div class="product-text">
                                            STOCK
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>Dress code :422 </b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b">$200.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-15.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay">
                                        <div class="product-text">
                                            STOCK
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>Dress code :423 </b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b">$250.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 p-2">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <div class="productIMAGE">
                                    <img src="Image/item-16.jpg" alt="" class="img-fluid ">
                                    <div class="product-overlay">
                                        <div class="product-text">
                                            STOCK
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>Dress code :424</b></h4>
                                    <p style="margin-top: -10px;color: #f6b93b">$270.00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----row end-->
                </div>
                <!----container end-->
            </div>
            <!----ourProduct end-->
        </section>
        <!-------------------------------------------Comments from customer------------------------->

        <section id="comments">
            <div id="pialPranto" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#pialPranto" data-slide-to="0" class="active"></li>
                    <li data-target="#pialPranto" data-slide-to="1"></li>
                    <li data-target="#pialPranto" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="Image/carouselbg.jpg" alt="First slide" style="width: 1400px;height: 550px;">
                        <div class="carousel-caption">
                            <div>
                                <img src="Image/person1.jpg" alt="customer"
                                    style="border-radius: 600px;height: 200px; width: 200px;">
                            </div>
                            <h5>This is my very first order through site, and I am totally and
                                completely satisfied! The fit is great and so are the prices.
                                I will definitely return again and again.</h5>
                            <p>Michelle</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Image/carouselbg.jpg" alt="Second slide" style="width: 1400px;height: 550px;">
                        <div class="carousel-caption">
                            <div>
                                <img src="Image/person2.jpg" alt="customer"
                                    style="border-radius: 600px;height: 200px; width: 200px;">
                            </div>
                            <h5> Omg!!! I love this site! I have ordered twice now and love everything
                                I received. The shipping time is soooo fast. It is quicker than ordering
                                from the US.

                            </h5>
                            <p>Lynn Colorado</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Image/carouselbg.jpg" alt="Third slide" style="width: 1400px;height: 550px;">
                        <div class="carousel-caption">
                            <div>
                                <img src="Image/person3.jpg" alt="customer"
                                    style="border-radius: 600px;height: 200px; width: 200px;">
                            </div>
                            <h5>
                                I ordered some fabolous looking shirts and dresses from the site,
                                thinking this might be a risk being an international order. The shopping
                                experience was OUTSTANDING!!!

                            </h5>
                            <p>Nikki</p>

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#pialPranto" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pialPranto" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!------------------------------------------Recent blog------------------------->
        <section id="blog" class="py-5">
            <div class="container">
                <div class="row" uk-scrollspy="cls:uk-animation-slide-right; target: > div; delay: 200;repeat:true">
                    <div class="col-lg-12">
                        <div class=" col-12 text-center py-5">
                            <h1 class="display-5">
                                <b> ──── RECENT <span style="color: #f6b93b">BLOG ────</span></b>
                            </h1>
                            <p>Even the all-powerful Pointing has no control about the blind texts
                                it is an almost unorthographic life One day however a small line of blind text by the
                                name
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-4">
                        <div class="card border-0 bg-light">
                            <div class="card-img-top">
                                <div class="blogIMAGE">
                                    <img src="Image/blog-1.jpg" alt="" class="img-fluid ">
                                    <div class="blog-overlay text-center">
                                        <div class="blog-text">
                                            <span style="font-size:30px !important;"> 02 </span><br>
                                            MAR
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title " style="padding-left: 25px;padding-top: 25px;">
                                    <h4>Posted by: Noah Henderson</h4>

                                </div>
                                <p style="padding-left: 25px;"><span class="text-muted"
                                        style="color:#f6b93b !important">Openning Branches</span> <br>
                                    <small>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</small>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4  py-4">
                        <div class="card border-0  bg-light">
                            <div class="card-img-top">
                                <div class="blogIMAGE">
                                    <img src="Image/blog-2.jpg" alt="" class="img-fluid ">
                                    <div class="blog-overlay text-center">
                                        <div class="blog-text">
                                            <span style="font-size:30px !important;"> 04 </span><br>
                                            MAR
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title " style="padding-left: 25px;padding-top: 25px;">
                                    <h4>Posted by: Noah Henderson</h4>

                                </div>
                                <p style="padding-left: 25px;"><span class="text-muted"
                                        style="color:#f6b93b !important">Openning Branches</span> <br>
                                    <small>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</small>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4  py-4">
                        <div class="card border-0  bg-light">
                            <div class="card-img-top">
                                <div class="blogIMAGE">
                                    <img src="Image/blog-3.jpg" alt="" class="img-fluid ">
                                    <div class="blog-overlay text-center">
                                        <div class="blog-text">
                                            <span style="font-size:30px !important;"> 17 </span><br>
                                            MAR
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title " style="padding-left: 25px;padding-top: 25px;">
                                    <h4>Posted by: Noah Henderson</h4>

                                </div>
                                <p style="padding-left: 25px;"><span class="text-muted"
                                        style="color:#f6b93b !important">Openning Branches</span> <br>
                                    <small>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!------------------------------------------------------subscribe----------------------------->
        <section class="py-5" id="subscribe" style="background-color: #ffa801;">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div >
                            <div class="text-center fonttext" style="font-size:50px; font-weight:bold"><p>Give Us Details</p></div>
                            <form method="post" action="connect.php">
                            <div class="form-group" >
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>   
                            <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone">
                            </div> 
                            <div class="form-group">
                            <label for="productname">Productname</label>
                            <input type="text" class="form-control" placeholder="productname" name="productname">
                            </div> 
                            <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" class="form-control" placeholder="color" name="color">
                            </div> 
                            <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" class="form-control" placeholder="Size" name="size">
                            </div>     
                            <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" placeholder="Price" name="price">
                            </div>  
                            <button type="submit" class="btn btn-warning btn-block">Submit</button>    
 
                            
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------------------------------------Footer----------------------------->
        <footer id="contact">
            <div class="container">
                <div class="row  py-5">
                    <div class="col-12  col-sm-12 col-md-12 col-lg-3 py-5">
                        <h4 style="font-weight: 600;" >ABOUT STORE</h4>
                        <p class="text-muted">Facilis ipsum reprehenderit nemo molestias.
                            Aut cum mollitia reprehenderit. Eos cumque
                            dicta adipisci architecto culpa amet.</p>
                        <div style="color: #ffa801;">
                            <span uk-icon="icon:facebook" class="p-2"></span>
                            <span uk-icon="icon:twitter" class="p-2"></span>
                            <span uk-icon="icon:linkedin" class="p-2"></span>
                            <span uk-icon="icon:dribbble" class="p-2"></span>
                        </div>

                    </div>
                    <div class=" col-12 col-sm-6 col-md-3 col-lg-2 py-5">
                     <h4 style="font-weight: 600;">CONTACT</h4>
                       <div class="d-flex flex-column">
                           <div class ="p-2"><a href="#" style="color: gray;" >Contact</a></div>
                           <div class ="p-2"><a href="#"style="color: gray;">Returns/Exchange </a></div>
                           <div class ="p-2"><a href="#"style="color: gray;"> gift Voucher</a></div>
                           <div class ="p-2"><a href="#"style="color: gray;">wishlist</a></div>
                           <div class ="p-2"><a href="#"style="color: gray;">Special</a></div>
                           <div class ="p-2"><a href="#"style="color: gray;">Customer Services</a></div>
                           <div class ="p-2"><a href="#"style="color: gray;"> Site Maps</a></div>
                       </div>
                    </div>
                    <div class="col-12  col-sm-6 col-md-3 col-lg-2 py-5">
                        <h4 style="font-weight: 600;" > INFORMATION</h4>
                        <div class="d-flex flex-column">
                            <div class ="p-2"><a href="#" style="color: gray;">About us</a></div>
                            <div class ="p-2"><a href="#"style="color: gray;">Delivery Information</a></div>
                            <div class ="p-2"><a href="#"style="color: gray;"> Privacy Policy</a></div>
                            <div class ="p-2"><a href="#"style="color: gray;">Support</a></div>
                            <div class ="p-2"><a href="#"style="color: gray;">Order Tracking</a></div>
                           
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2 py-5">
                        <h4 style="font-weight: 600;" > NEWS</h4>
                        <div class="d-flex flex-column">
                            <div class ="p-2"><a href="#" style="color: gray;">Blog
                               </a></div>
                            <div class ="p-2"><a href="#"style="color: gray;"> Press
                                 </a></div>
                            <div class ="p-2"><a href="#"style="color: gray;">Exhibitions</a></div>
                        </div>
                    </div>
                    <div class=" col-12  col-sm-6 col-md-3 col-lg-3 py-5">
                        <h4 style="font-weight: 600;"> CONTACT INFORMATION</h4>
                        <div class="d-flex flex-column">
                            <div class ="p-2"><a href="#" style="color: gray;">Dhaka, Bangladesh</a></div>
                            <div class ="p-2"><a href="#"style="color: gray;">01XXXXXXXXX</a></div>
                            <div class ="p-2"><a href="#"style="color: gray;"> atiqur35-275@diu.edu.bd , sadia35-302@diu.edu.bd , parvez35-310@diu.edu.bd , minara35-309@diu.edu.bd</a></div>
                            <div class ="p-2"><a href="#"style="color: gray;">fashionStore.com</a></div>

                        </div>
                    </div>
                </div>
                <p class="text-muted py-4 text-center"><small>Copyright ©2020 All rights reserved | This template is made with  by <a href="https://web.facebook.com/pranto.rahaman.SWE/allactivity?entry_point=profile_shortcut" style="color: #ffa801;">
                     <span uk-icon="icon:facebook;ratio: .9" ></span>AtiqurPranto</a>
                    and <a href="https://web.facebook.com/sadia.pial.779" style="color: #ffa801;"> <span uk-icon="icon:facebook;ratio: .9;" ></span>SadiaPial</a> Demo Images: From original Template , Pexels.com</small></p>
            </div>
        </footer>


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