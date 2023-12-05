<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .containers {
            display: grid;
            place-items: center;
            margin-top: 0px;
        }
    </style>

    <?php
    include 'templates/navbar.php';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-dark">

    <div class="containers">
        <div class="card" style="width: 18rem;">
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/travel-%26-tour-ads-design-template-8549b4381e9fb1680807fda016976b1a_screen.jpg?ts=1624407213" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pesan Tiket Sekarang!!</h5>
                <p class="card-text">Dengan traveling kamu bisa mengurangi stres, menjaga tubuhmu tetap fit, menambah wawasan, kemampuan bersosialisasi, mendapatkan teman-teman baru, menguji jiwa kepemimpinanmu, fleksibilitasmu, memiliki jiwa yang lebih bersyukur</p>
                <a href="awalan.php" class="btn btn-primary">Booking</a>
            </div>
        </div>
    </div>

</body>
<?php
include 'templates/footer.php'
    ?>

</html>