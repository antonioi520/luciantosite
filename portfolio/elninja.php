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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate-css/animate.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/style2.css"> <!-- Resource style -->
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->

    <!-- Main Stylesheet File -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Animated Bar Graph Stylesheet File -->
    <link href="../css/animated-bar-graph.css" rel="stylesheet">

</head>

<body>
<?php include '../views/nav.php' ?>

<section class="cd-intro" id="portfoliohero5" style="height:430px;">
    <div class="hero-container cd-intro-content mask">
        <div class="wow fadeIn" style="margin-top: 360px;">
            <!--<div class="hero-logo" style="margin-top: 80px;">
                <div style="margin-bottom: -50px;">
                    <img src="../img/logo2.png" alt="logo image" title="" style="margin-left:50px; height: 200px;">
                </div>
                <img class="" src="../img/lucianto.png" alt="logo text" style="margin-left: -5px;">
            </div>-->

            <br>
            <div style="text-align: center"><a href="https://www.elninja.net" target="_blank" class="visitSite">Visit Site</a></div>
        </div>
    </div>
</section>

<section id="about" style="padding-top: 40px;">
    <div class="container about-container wow fadeInUp">
        <div style="text-align: center"><h1 style="font-weight: bold;color:black;font-size: 50px;">El Ninja Restaurant</h1></div>
        <div class="section-title-divider" style="width:50%;margin-bottom: 0px;"></div>

        <br>

        <!-- DESKTOP VERSION OF BAR GRAPH -->
        <div id="content-desktop">
            <div class="container" id="data-body">
                <div style="text-align: center"><h1 style="color:black;font-size: 20px;">Website Page View Data</h1></div>
                <div style="text-align: center"><h1 style="color:black;font-size: 11px;font-weight: 900;">Number of Pageviews per month since grand opening (June 16th, 2020)</h1></div>
                <div id="data">
                    <div id="data-title">
                        <p style="font-weight: 700;">May 2020 &nbsp</p>
                        <p style="font-weight: 700;">June 2020 &nbsp</p>
                        <p style="font-weight: 700;">July 2020 &nbsp</p>
                        <p style="font-weight: 700;">August 2020 &nbsp</p>
                        <p style="font-weight: 700;">Sept. 2020 &nbsp</p>
                    </div>

                    <div class="graph-grid">
                        <div class="bar percent-05"><div class="inner"></div></div>
                        <div class="bar percent-20"><div class="inner"></div></div>
                        <div class="bar percent-50"><div class="inner"></div></div>
                        <div class="bar percent-75"><div class="inner"></div></div>
                        <div class="bar percent-100"><div class="inner"></div></div>

                        <div class="v-divider twenty-percent"></div>
                        <div class="v-divider fifty-percent"></div>
                        <div class="v-divider seventyfive-percent"></div>
                        <div class="v-divider onehundred-percent"></div>

                        <div id="scale">
                            <p style="font-weight: 700;" class="zero">0</p>
                            <p style="font-weight: 700;" class="one">20k</p>
                            <p style="font-weight: 700;" class="two">40k</p>
                            <p style="font-weight: 700;" class="three">60k</p>
                            <p style="font-weight: 700;" class="four">80k</p>
                            <p style="font-weight: 700;" class="five">100k+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MOBILE VERSION OF BAR GRAPH -->
        <div id="content-mobile">
            <div class="container" id="data-body-mobile">
                <div style="text-align: center"><h1 style="color:black;font-size: 20px;">Website Page View Data</h1></div>
                <div style="text-align: center"><h1 style="color:black;font-size: 11px;font-weight: 900;">Number of Pageviews per month since grand opening (June 16th, 2020)</h1></div>
                <div id="data">
                    <div id="data-title-mobile">
                        <p style="font-weight: 700;">May 2020</p>
                        <p style="font-weight: 700;">June 2020</p>
                        <p style="font-weight: 700;">July 2020</p>
                        <p style="font-weight: 700;">August 2020</p>
                        <p style="font-weight: 700;">Sept. 2020</p>
                    </div>

                    <div class="graph-grid">
                        <div class="bar-mobile percent-1"><div class="inner"></div></div>
                        <div class="bar-mobile percent-20"><div class="inner"></div></div>
                        <div class="bar-mobile percent-50"><div class="inner"></div></div>
                        <div class="bar-mobile percent-75"><div class="inner"></div></div>
                        <div class="bar-mobile percent-100"><div class="inner"></div></div>

                        <div class="v-divider twenty-percent"></div>
                        <div class="v-divider fifty-percent"></div>
                        <div class="v-divider seventyfive-percent"></div>
                        <div class="v-divider onehundred-percent"></div>

                        <div id="scale">
                            <p style="font-weight: 700;" class="zero">0</p>
                            <p style="font-weight: 700;" class="one">20k</p>
                            <p style="font-weight: 700;" class="two">40k</p>
                            <p style="font-weight: 700;" class="three">60k</p>
                            <p style="font-weight: 700;" class="four">80k</p>
                            <p style="font-weight: 700;" class="five">100k+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <div style="text-align: center"><h2 style="font-weight: bold;color:black;font-size: 20px;">Main Features</h2></div>

        <div class="row">
            <div class="card-deck">
                <div class="card  ">
                    <h5 class="card-header" style="font-weight: bold;font-size: 20px;text-align: center;padding-bottom: 5%;background-color: #E9EAEA">Menu</h5>
                    <div class="card-body">
                        <p class="card-text">
                            We worked with El Ninja Restaurant translate and create their digital menus for both Spanish and English speaking demographics. These menus are routinely updated with new prices and food/drink items as well as specials.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 months ago</small>
                    </div>
                </div>
                <div class="card ">
                    <h5 class="card-header" style="font-weight: bold;font-size: 20px;text-align: center;padding-bottom: 5%;background-color: #E9EAEA">Reservations</h5>
                    <div class="card-body">
                        <p class="card-text">
                            We have implemented a tool for customers to create reservations to dine at El Ninja Restaurant.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 months ago</small>
                    </div>
                </div>
                <div class="card  ">
                    <h5 class="card-header" style="font-weight: bold;font-size: 20px;text-align: center;padding-bottom: 5%;background-color: #E9EAEA">Events / Gallery</h5>
                    <div class="card-body">
                        <p class="card-text">
                            We advertise our clients various upcoming and recurring events at their venue as well as hold a large library of professionally taken images from said events. This library is updated periodically with newly submitted images for every event our client hosts. Due to the large number of high quality images, we work to make sure this gallery loads seamlessly on desktop and mobile devices.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 months ago</small>
                    </div>
                </div>
            </div>
        </div>

        <br><br id="content-desktop"><br id="content-desktop">

        <div class="row">
            <div class="col-md-8 about-content">
                <h1 style="font-weight: bold;font-size: 50px;color:black;">Project Overview</h1>
                <div class="section-title-divider" style="width:100%;float:left;margin-bottom: 0px;"></div><br>
                <p class="about-text">
                    El Ninja Restaurant is a Latin fusion sushi restaurant brought to Broad Street alongside the newly renovated Bomes Theatre, headed by world-class chef El Ninja and a talented staff, that uses only the finest ingredients! They provide an array of services including special events and takeout. El Ninja Restaurant serves traditional Japanese cuisine, alongside signature Japanese/Latin fusion dishes that will blow you away!
                </p>
                <p class="about-text">
                    We worked closely with the staff of El Ninja Restaurant in the design and development of their website. They were able to provide us many styles and various objectives they were looking to complete. Together, we were able to publish their vision which helped lead to high traffic and a packed house each night.
                </p>
                <p class="about-text">
                    Today, the El Ninja website is averaging 60,000 views per month with many users converting to paying customers with hundreds of reservations being created per week.
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3 about-content">
                <h1 style="font-weight: bold;font-size: 50px;color:black">Tech Specs</h1>
                <div class="section-title-divider" style="width:100%;float:left;margin-bottom: 0px;"></div><br>
                <p class="about-text" style="text-align: center">
                    HTML/CSS <br> JavaScript <br> PHP <br> Analytics <br> Maintenance
                </p>
            </div>
        </div>

        <br><br><br>

        <div class="row">

            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div style="text-align: center;"><a href="#" class="page-button">Get Started Now</a></div>
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>
</section>

<?php include '../views/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>