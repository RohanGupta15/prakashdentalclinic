<?php require 'header.php'; ?>
<script>
    $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");
        $(".card").hover(
            function() {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            },
            function() {
                $(this).removeClass('shadow-lg');
            }
        );
    });


</script>

<head>
    <title>Prakash Dental Clinic</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display&display=swap" rel="stylesheet">
</head>

<body class="backg h-100 mx-auto">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner-home-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner-home-2.jpg" alt="Second slide">
                <!-- <div class="carousel-caption d-none d-md-block bg-dark mb-4">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div> -->
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner-home-3.jpg" alt="Third slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2 class="titles text-animateUp">Welcome to Prakash Dental Clinics</h2>
    <p class="para1 text-animateUp">
        Prakash dental clinic welcomes you for the treatments, we use latest technology to offers excellent dental care,
        providing stress free experience.
        <br>
        Our clinic offers weekend days services also that is opens even on Saturday and Sunday, closes only on Friday
    </p>
    <div class="row mx-auto text-animateUp justify-content-center align-items-center" style="padding-bottom: 20px">
        <a href="" class="btn btn-primary rounded" data-toggle="modal" data-target="#modalLoginAvatar">
            Request an Appointment with US!</a>
    </div>
    <div class="container text-animateUp">
        <div class="row" style="height: 1000 px">
            <div class="col-sm-4 col-md-6 col-lg-5 ">
                <h2 class="features-heading">
                    We have dedicated settling for nothing less than the BEST. <br>
                    <img src="images/dental-care.png" width="75px" height="82px" style="padding-top: 10px">
                </h2>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-7 features">
                <div class="row card-deck mx-auto">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card w-75 mx-auto">
                        <img class="card-img-top mx-auto" src="images/tooth-drill.png" alt="Innovative Technologies" style="width: 8rem;">
                        <div class=" card-body">
                            <p class="card-text">Equipped with the newest and innovative technologies.</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card w-75 mx-auto" style="width: 150px">
                        <img class="card-img-top mx-auto" src="images/professions-and-jobs.png" alt="Experienced and Qualified Professionals" style="width:8rem;">
                        <div class="card-body">
                            <p class="card-text">Teams with the most experienced and qualified professionals.</p>
                        </div>
                    </div>
                </div>
                <div class="row card-deck mx-auto">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card  w-75 mx-auto" alt="Spacious rooms ranging from Suite, Deluxe, economic" style="width:150px">
                        <img class="card-img-top mx-auto" src="images/hospital (1).png" alt="Card image" style="width: 8rem;">
                        <div class="card-body">
                            <p class="card-text">Spacious rooms ranging from Suite, Deluxe, economic etc.</p>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card w-75 mx-auto" style="width:150px">
                        <img class="card-img-top mx-auto" src="images/maps-and-location.png" alt="Best Location" style="width: 8rem;">
                        <div class="card-body">
                            <p class="card-text">Providing the best location by choosing to be centrally located.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" alt="avatar" class="rounded-circle img-responsive">
                    </div>
                    <!--Body-->
                    <div class="modal-body text-center mb-1">
                        <div class="md-form ml-0 mr-0">
                            <form action="mailsend.php" method="POST" onsubmit="return formCheck()">
                                <h3>Book an Appointment</h3>
                                <div class="form-wrapper">
                                    <input type="text" placeholder="First Name" class="form-control" name="first_name" id="fname">
                                    <i class="fa fa-user-circle" style="color: #00b0ff"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="text" placeholder="Last Name" class="form-control" name="last_name" id="lname">
                                    <i class="fa fa-user-circle" style="color: #00b0ff"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="email" placeholder="Email Address" class="form-control" name="email" id="email">
                                    <i class="fa fa-envelope" style="color: #00b0ff"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="tel" placeholder="Phone Number" class="form-control" name="phone_no" id="phone">
                                    <i class="fa fa-phone" style="color: #00b0ff"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="text" name="message" id="message" placeholder="Message" class="form-control">
                                    <i class="fa fa-pencil" style="color: #00b0ff"></i>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary mt-1">Send<i class="fa fa-send"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: Login with Avatar Form-->
    </div>
    <div class="para2 text-justify">
        <h2 class="titles" style="color: white">Treatments we provide</h2>
        The services provided at Prakash Dental Clinic includes: <br> <br>
        <div class="row mx-auto">
            <div class="col-md-6 col-sm-12 col-12">
                <ul>
                    <li><a href="services.php">Regular Oral Checkups</a>

                    </li>
                    <li>
                        <a href="services.php">
                            Teeth Cleanup
                        </a>
                    </li>
                    <li><a href="services.php">Filling and Restorations</a>

                    </li>
                    <li><a href="services.php">RCT (Root Canal Treatment)</a>

                    </li>
                    <li><a href="services.php">Fixed Teeth (Crown and Bridges)</a>

                    </li>
                    <li><a href="services.php">Removable teeth</a>

                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <ul>
                    <li><a href="services.php">Complete Dentures</a>

                    </li>
                    <li><a href="services.php">Dental Implants</a>

                    </li>
                    <li><a href="services.php">Pediatric Dental Care</a>

                    </li>
                    <li><a href="services.php">Extractions</a>

                    </li>
                    <li><a href="services.php">Orthodontic Treatment</a>

                    </li>
                    <li><a href="services.php">
                            Super Specialised Consultations
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 
    <div class="row mx-auto appoint justify-content-center align-items-center">
        <a href="" class="btn btn-light rounded" data-toggle="modal" data-target="#modalLoginAvatar">
            Request an Appointment!</a>
    </div> -->
    </div>
    <?php require "footer.php"; ?>