<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lucianto Web Development</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="img/favicon.ico" rel="shortcut icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style2.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<?php include 'views/nav.php' ?>

<section class="cd-intro" id="hero" style="height:430px;" >
    <div class="hero-container cd-intro-content mask">
        <div class="wow fadeIn">
            <div class="hero-logo" style="margin-top: 80px;">
                <div style="margin-bottom: -50px;">
                <img src="../img/testlogo11.png" alt="logo image" title="" style="margin-left:10px; height: 200px;">
                </div>
                <img class="" src="../img/lucianto.png" alt="logo text" style="margin-left: -20px;">
            </div>

            <h1 data-content="Portfolio" style="font-weight: 600; margin-top:30px;"><span>Portfolio</span></h1>
        </div>
    </div>
</section>
<br><br><br>

<div class="container">
    <div class="row">
        <div style="text-align: center"><h1 style="font-weight: bold;color:black;font-size: 50px;">Websites</h1></div>
        <div class="section-title-divider" style="width:50%;margin-bottom: 0px;"></div><br>
        <section id="portfolio">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/elninjaport.png);object-fit: contain;background-position: 45%;" href="portfolio/elninja">
                            <div class="details">
                                <h4 style="color:white;">El Ninja Restaurant</h4>
                                <span style="color:white;">Website built for a Latin/Japanese fusion sushi restaurant!</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/bomes5.png);background-position: 50%;" href="portfolio/bomes" >
                            <div class="details">
                                <h4 style="color:white;">The Bomes Theatre</h4>
                                <span style="color:white;">Website built for the illustrious Bomes Theatre located in Providence, RI. Includes a booking feature allowing clients to submit their requests to book an event.</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/test5.png);object-fit: contain;background-position: 53%;" href="portfolio/mialma">
                            <div class="details">
                                <h4 style="color:white;">Mi Alma Restaurant</h4>
                                <span style="color:white;">Website built for a Latin fusion restaurant!</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/port1.png);" href="portfolio/steamweight" >
                            <div class="details">
                                <h4 style="color:white;">SteamWeight</h4>
                                <span style="color:white;">Compact website for statistics on your steam account created via PHP!</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <div style="text-align: center"><h1 style="font-weight: bold;color:black;font-size: 50px;">Games</h1></div>
        <div class="section-title-divider" style="width:50%;margin-bottom: 0px;"></div><br>
        <section id="portfolio">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/port2.png);" href="portfolio/fightinggame">
                            <div class="details">
                                <h4 style="color:white;">Fighting Game</h4>
                                <span style="color:white;">Mobile Fighting-esque Strategy Game developed via Unity in C#!</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/port6-2.png);" href="portfolio/lockandload.php">
                            <div class="details">
                                <h4 style="color:white;">Lock & Load</h4>
                                <span style="color:white;">PC FPS game and teaser video developed in C#!</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <div style="text-align: center"><h1 style="font-weight: bold;color:black;font-size: 50px;">Flyers / Business Cards</h1></div>
        <div class="section-title-divider" style="width:50%;margin-bottom: 0px;"></div><br>
        <section id="portfolio">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-3 portcenter">
          <a class="portfolio-item" style="background-image: url(img/port4.jpg);"  data-toggle="modal" data-target="#myModal">
            <div class="details">
              <h4 style="color:white;">NUR Performance Flyer</h4>

              <span style="color:white;">Mock-up Advertisement for performance shop!</span>
            </div>
          </a>
        </div>
                     <!---Modal 1-->
                    <div id="myModal" class="modal fade" role="dialog" data-backdrop="false"  >
                        <!--- Modal content -->
                      <div class="modal-content">
                          <div class="modal-body"  >
                            <img src="img/port4.jpg" style="height:700px;width:500px;display:block;margin:auto;" class="mobilemodal">
                          </div>
                          <div class="modal-footer"  >
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/port5.jpg);"  data-toggle="modal" data-target="#myModal2">
                            <div class="details">
                                <h4 style="color:white;">NUR Performance Flyer 2</h4>
                                <span style="color:white;">Mock-up Advertisement for performance shop!</span>
                            </div>
                        </a>
                    </div>
                    <!-- Modal 2 -->
                    <div id="myModal2" class="modal fade" role="dialog" data-backdrop="false"  >
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body"  >
                                <img src="img/port5.jpg" style="height:700px;width:500px;display:block;margin:auto;" class="mobilemodal">
                            </div>
                            <div class="modal-footer"  >
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/businesscard1.png);"  data-toggle="modal" data-target="#myModal3">
                            <div class="details">
                                <h4 style="color:white;">Stay Tuned / NUR Performance Business Card 1</h4>
                                <span style="color:white;">Mock-up Business Card for performance shop!</span>
                            </div>
                        </a>
                    </div>
                    <!-- Modal 3 -->
                    <div id="myModal3" class="modal fade" role="dialog" data-backdrop="false"  >
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body"  >
                                <img src="img/businesscard1.png" style="height:700px;width:500px;display:block;margin:auto;" class="mobilemodal">
                            </div>
                            <div class="modal-footer"  >
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 portcenter">
                        <a class="portfolio-item" style="background-image: url(img/businesscard2.png);"  data-toggle="modal" data-target="#myModal4">
                            <div class="details">
                                <h4 style="color:white;">Stay Tuned / NUR Performance Business Card 2</h4>
                                <span style="color:white;">Mock-up Business Card for performance shop!</span>
                            </div>
                        </a>
                    </div>
                    <!-- Modal 4 -->
                    <div id="myModal4" class="modal fade" role="dialog" data-backdrop="false"  >
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body"  >
                                <img src="img/businesscard2.png" style="height:700px;width:500px;display:block;margin:auto;" class="mobilemodal">
                            </div>
                            <div class="modal-footer"  >
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>

<br><br><br>
<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/morphext/morphext.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/easing/easing.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>

<script src="contactform/contactform.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script>
<?php include 'views/footer.php'; ?>
</body>