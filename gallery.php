<?php include 'header.php'; ?>

<head>
    <title>Photo Gallery</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">
</head>
<div class="container-fluid gallery">
    <h1 class="text-center" style="color: white">
        <i class="fa fa-image"></i>
        Photo Gallery
        <i class="fa fa-image"></i>
    </h1>
    <hr>

    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic1.jpg">
                    <img src="images/pdc/clinic1.jpg" alt="Front View of Clinic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic2.jpg">
                    <img src="images/pdc/clinic2.jpg" alt="Sign Board">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic3.jpg">
                    <img src="images/pdc/clinic3.jpg" alt="Interior Waiting Area">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic4.jpg">
                    <img src="images/pdc/clinic4.jpg" alt="Interior">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic5.jpg">
                    <img src="images/pdc/clinic5.jpg" alt="Clinic Enterance/Exit">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic6.jpg">
                    <img src="images/pdc/clinic6.jpg" alt="Interior 2">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic7.jpg">
                    <img src="images/pdc/clinic7.jpg" alt="Interior 3">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox shadow" href="images/pdc/clinic8.jpg">
                    <img src="images/pdc/clinic8.jpg" alt="Interior 4">
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<?php include 'footer.php'; ?>