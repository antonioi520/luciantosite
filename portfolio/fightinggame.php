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
    <link href="/luciantosite/img/favicon.ico" rel="shortcut icon">

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



</head>

<body>
<?php include '../views/nav.php' ?>

<section class="cd-intro" id="portfoliohero4" style="height:430px;">
    <div class="hero-container cd-intro-content mask">
        <div class="wow fadeIn" style="margin-top: 360px;">
            <!--<div class="hero-logo" style="margin-top: 80px;">
                <div style="margin-bottom: -50px;">
                    <img src="../img/logo2.png" alt="logo image" title="" style="margin-left:50px; height: 200px;">
                </div>
                <img class="" src="../img/lucianto.png" alt="logo text" style="margin-left: -5px;">
            </div>-->


            <br>
        </div>
    </div>
</section>

<section id="about" style="padding-top: 40px;">
    <div class="container about-container wow fadeInUp">
        <div style="text-align: center"><h1 style="font-weight: bold;color:black;font-size: 50px;">Fighting Game</h1></div>
        <div class="section-title-divider" style="width:50%;margin-bottom: 0px;"></div><br>
        <div style="text-align: center"><h2 style="font-weight: bold;color:black;font-size: 20px;">Main Features</h2></div>

        <div class="row">

            <div class="card-deck">
                <div class="card  ">
                    <h5 class="card-header" style="font-weight: bold;font-size: 20px;text-align: center;padding-bottom: 5%;background-color: #E9EAEA">Story and Arcade Modes</h5>
                    <div class="card-body">
                        <p class="card-text">
                            FightingGameName includes a full story mode for players to play through, travelling through various countries and defeating several bosses to progress through a Street Fighter-esque tournament. FightGamingName also includes an arcade mode with progressively tougher levels that the player can play through and see to conquering the 100th stage. Playing through these modes also includes unlocks for new characters to play as.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card  ">
                    <h5 class="card-header" style="font-weight: bold;font-size: 20px;text-align: center;padding-bottom: 5%;background-color: #E9EAEA">Procedurally Generated</h5>
                    <div class="card-body">
                        <p class="card-text">
                            The game boards themselves, where players match different types of abilities and power-ups, are procedurally generated, meaning no players would have the same board. Although the boards are procedurally generated, they are designed to stay within a specific parameter in difficulty associated to the stage the player is on.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card ">
                    <h5 class="card-header" style="font-weight: bold;font-size: 20px;text-align: center;padding-bottom: 5%;background-color: #E9EAEA">Animations</h5>
                    <div class="card-body">
                        <p class="card-text">
                            Our library of characters and enemies all have custom animations designed associated to the action they are taking like attacking, defending, or taking damage. Our game board also features various animations for matching certain types of tiles.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>


        </div>

        <br><br><br>

        <div class="row">

            <div class="col-md-8 about-content">
                <h1 style="font-weight: bold;font-size: 50px;color:black;">Project Overview</h1>
                <div class="section-title-divider" style="width:100%;float:left;margin-bottom: 0px;"></div><br>
                <p class="about-text">
                    FightGameName is a mobile fighting / matching game for iOS and Android. It takes a popular genre of mobile games, the classic match-3 seen in titles such as Bejeweled and Candy Crush, and adds another exciting layer to it. In FightGameName, you have a fully animated Street Fighter-esque combat between the player and the enemy, where the choice of moves you do and damage applied is determined by the set of tiles you match on the game board below. The game includes a story mode and an arcade mode with various character unlocks and goals for the player to achieve.
                </p>
                <p class="about-text">
                    The leading challenge in development was keeping the game board procedurally generated while scaling the difficulty to match the stage a player is on. So even though no player will play on the same board, no player will have a more or less difficult time on a specific stage than another player. We achieved this by creating custom algorithms associated to different stages that our tileset is ran through, which has an end result of applying different values and weights to different entities, and finally generating that stages board.
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3 about-content">
                <h1 style="font-weight: bold;font-size: 50px;color:black">Tech Specs</h1>
                <div class="section-title-divider" style="width:100%;float:left;margin-bottom: 0px;"></div><br>
                <p class="about-text" style="text-align: center">
                    C# <br> Unity
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