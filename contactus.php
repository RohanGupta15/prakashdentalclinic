<?php require 'header.php'; ?>

<head>
    <title>Contact US!</title>
</head>
<div class="container-fluid">
    <div class="row" id="contatti">
        <div class="container cont mt-5">

            <div class="row shadow-lg">
                <div class="col-md-6 maps p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.614129684333!2d80.95681631456584!3d26.915738766440402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957bc1671d13d%3A0x3eb1ead88123fd0d!2sPRAKASH%20DENTAL%20CLINIC!5e0!3m2!1sen!2sin!4v1579867552831!5m2!1sen!2sin" width="600px" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-6 pt-4" style="padding-left: 25px; padding-right: 20px">
                    <h1 class="text-uppercase mt-3 font-weight-bold ">Contact US</h1>
                    <div class="md-form ml-0 mr-0 ">
                        <form action="mailsend.php" method="POST" onsubmit="return formCheck()">
                            <!-- <h3>Book an Appointment</h3> -->
                            <h4>
                                Or Simply say Hii to Our Doctors
                                <i class="fa fa-user-md"></i>
                            </h4>
                            <div class="form-wrapper">
                                <input type="text" placeholder="First Name" class="form-control" name="first_name" id="fname">
                                <i class="fa fa-user-circle" style="color: #004490"></i>
                            </div>
                            <div class="form-wrapper">
                                <input type="text" placeholder="Last Name" class="form-control" name="last_name" id="lname">
                                <i class="fa fa-user-circle" style="color: #004490"></i>
                            </div>
                            <div class="form-wrapper">
                                <input type="email" placeholder="Email Address" class="form-control" name="email" id="email">
                                <i class="fa fa-envelope" style="color: #004490"></i>
                            </div>
                            <div class="form-wrapper">
                                <input type="tel" placeholder="Phone Number" class="form-control" name="phone_no" id="phone">
                                <i class="fa fa-phone" style="color: #004490"></i>
                            </div>
                            <div class="form-wrapper">
                                <input type="text" name="message" id="message" placeholder="Message" class="form-control" id="message">
                                <i class="fa fa-pencil" style="color: #004490"></i>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary mt-1">Send<i class="fa fa-send"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>