<head>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbar-light .dmenu').hover(function() {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
    </script>
</head>



<div class="row ">
    <div class="col">
        <div class="container-fluid">
            <div class="header">
                <div id="navbar">
                    <nav class="navbar navbar-expand-sm  navbar-light bg-light stroke">
                        <a class="navbar-brand" href="#">
                            <img src="adclog.png" alt="logo" style="width:70px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item ">
                                    <a class="nav-link underlineHover" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link underlineHover" href="#">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link underlineHover" href="#">CERTIFICATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link underlineHover" href="#">COMMUNITIES</a>
                                </li>

                                <li class="nav-item dropdown dmenu">
                                    <a class="nav-link underlineHover " href="#" id="navbardrop" data-toggle="dropdown">
                                        OUR SERVICES
                                    </a>
                                    <div class="dropdown-menu sm-menu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item" href="#">General Dentistry</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Aesthetic Dentistry</a>

                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Periodontics</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="#">Dental Implants</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="#">Dentures</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Orthodontics</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Emergencies</a>

                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Sedation</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">CEREC</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dmenu">
                                    <a class="nav-link underlineHover" href="#" id="navbardrop" data-toggle="dropdown">
                                    </a>
                                    <div class="dropdown-menu sm-menu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item" href="#">Survey</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">FAQs</a>
                                    </div>
                                </li>

                                <li class="nav-item underlineHover">
                                    <a class="nav-link" href="#">LOCATIONS</a>
                                </li>
                            </ul>
                            <div class="social-part">
                                <i class="fa fa-flag fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-flag-twit fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-flaginst fa-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

</div>