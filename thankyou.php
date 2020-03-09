<?php include 'header.php'; ?>

<head>
    <title>
        Thank You
    </title>
</head>

<div class="bg-overlay2 " style="height: 600px; text-align:right">
    <h1 class="ml9">
        <span class="text-wrapper" style="padding-top: 120px">
            <span class="letters">Thank You!</span>
        </span>
    </h1>
    <h3>
        <span>
            <p> Our Doctors will get back to you shortly.</p>
        </span>
    </h3>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml9 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml9 .letter',
            scale: [0, 1],
            duration: 1500,
            elasticity: 600,
            delay: (el, i) => 45 * (i + 1)
        }).add({
            targets: '.ml9',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>

<?php include 'footer.php'; ?>