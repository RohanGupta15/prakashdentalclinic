<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="author" content="Rohan Gupta">
    <meta name="description" content="Welcome to Prakash Dental Clinic's Website! We have created this site for easy access to information for our clients. It contains contact details, Doctors names , services provided by the clinic and working hours etc.">
    <meta property="og:image" content="">
    <meta property="og:title" content="Prakash Dental Clinic">
    <meta property="og:description" content="Welcome to Prakash Dental Clinic's Website! We have created this site for easy access to information for our clients. It contains contact details, Doctors names , services provided by the clinic and working hours etc.">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="js/jQuery-3.4.1.min.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favi/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favi/favicon-16x16.png">
    <link rel="manifest" href="images/favi/site.webmanifest">


    <script type="text/javascript">
        // For Async Loading of Fonts
        WebFontConfig = {
            google: {
                families: ['Muli']
            }
        };

        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);

        $(document).ready(function() {
            $('.navbar-custom .dmenu').hover(function() {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
    </script>
</head>

<body>
    <div class="header">
        <div id="navbar">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <a class="navbar-brand" href="#">
                    <img src="pdclogo.png" alt="logo" style="width:50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars" style="color:#1976d2; font-size:28px;"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link underlineHover" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underlineHover" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underlineHover" href="gallery.php">GALLERY</a>
                        </li>


                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link underlineHover " href="services.php" id="navbardrop" data-toggle="dropdown">
                                OUR SERVICES <i class="fa fa-chevron-down" style="color: inherit"></i>
                            </a>
                            <div class="dropdown-menu sm-menu">
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="services.php">Dental Pain</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="services.php">Sensitivity</a>

                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="services.php">Cosmetic Dentistry</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="services.php">Missing Teeth</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="services.php">General Dentistry</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="services.php">Life Threatening <br> Oral Diseases</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="services.php">Emergencies</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link underlineHover" href="#" id="navbardrop" data-toggle="dropdown">
                                NEW PATIENTS <i class="fa fa-chevron-down" style="color: inherit"></i>
                            </a>
                            <div class="dropdown-menu sm-menu">
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">Survey</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="faq.php">FAQs</a>
                                    </li>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link underlineHover" href="contactus.php">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="social-part">
                        <a href="#">
                            <i class="fa fa-flag fa-facebook " aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-flag-twit fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-flaginst fa-instagram" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>
            </nav>
        </div>
    </div>