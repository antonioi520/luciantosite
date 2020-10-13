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

<body class="paybody">
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

            <h1 data-content="Shop" style="font-weight: 600; margin-top:30px;"><span>Shop</span></h1>
        </div>

            <h1 data-content="Submit Inquiry" style="font-weight: 600; margin-top:30px;"><span>Submit Inquiry</span></h1>
        </div>
    </div>
</section>
<br><br><br>

<section id="">

        <div class="container">

            <form action="send_inquiry_email.php" method="post" role="form" class="pform" id="myForm">

                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv">
                    <h2 style="text-align:center">Send Inquiry</h2>
                </div>     
                </div>

                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv">
                    <label for="fullname" class="payformlabel">Full Name</label><br/>
                    <input type="text" id="fullname" name="fullname" placeholder="Your name.." class="form-control payform" required>
                </div>     
                </div>

                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv">
                    <label for="fullname" class="payformlabel">Email</label><br/>
                    <input type="email" id="email" name="email" placeholder="Your contact email.." class="form-control payform" required>
                </div>     
                </div>

                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv"> 
                    <label for="budget" class="payformlabel">Budget</label><br/>
                    <input type="number" id="budget" name="budget" placeholder="Budget.." class="form-control payform" required>
                </div>
                </div>
                
                
                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv">
                    <label for="companyname" class="payformlabel">Company Name</label><br/>
                    <input type="text" id="companyname" name="companyname" placeholder="Company name.." class="form-control payform" required>
                </div>
                </div>

                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv">
                    <label for="description" class="payformlabel">Company Description</label><br/>
                    <textarea id="description" name="description" placeholder="Company Description.." style="height:100px" class="form-control payform" required></textarea>
                </div>
                </div>

                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv">
                    <label for="webneeds" class="payformlabel">Website Needs</label><br/>
                    <textarea id="webneeds" name="webneeds" placeholder="Website needs..(i.e store, gallery, etc.)" style="height:100px" class="form-control payform" required></textarea>
                </div>
                </div>

                <div class="col-md-1"></div>
                <div class="row">
                <div class="col-md-9 paydiv">
                    <input type="submit" name="submit" value="Submit" class="form-control submitbutton" style="background-color:#03C4EB;color:white;">
                </div>
                </div>
            </form>

        </div>
</section>
<br><br><br>
<?php include 'views/footer.php'; ?>
 <!-- Required JavaScript Libraries -->
 <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specific Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/main.js"></script>
<!-- <script type="text/javascript">
    var frm = $('#myForm');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: "send_inquiry_email.php",
            data: frm.serialize(),
            success: function (data) {
                return false;
            },
            error: function()
            {
                //$("#errormessage").show();

                return false;
            }
        });

        ev.preventDefault();
    });
</script>
<script>
    var invalidClassName = 'invalid'
    var inputs = document.querySelectorAll('input, select, textarea')
    inputs.forEach(function (input) {
        // Add a css class on submit when the input is invalid.
        input.addEventListener('invalid', function () {
            input.classList.add(invalidClassName)
        })

        // Remove the class when the input becomes valid.
        // 'input' will fire each time the user types
        input.addEventListener('input', function () {
            if (input.validity.valid) {
                input.classList.remove(invalidClassName)
            }
        })
    })
</script> -->

</body>