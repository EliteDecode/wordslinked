<?php

session_start();

$ad = $_SESSION['users'];
if (!isset($_SESSION['users'])) {
    header('location: login.php');
  }
include ('../includes/db.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--bootsrap-->
    <link rel="stylesheet" href="../styling/css/bootstrap.min.css">

    <!--aos for animations-->
    <link rel="stylesheet" href="../styling/css/aos.css">
    <link rel="stylesheet" href="./styling/css/animate.css">

    <!--owl carousel-->
    <link rel="stylesheet" href="../styling/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../styling/css/owl.theme.default.min.css">

    <!--font-awesome-->
    <link rel="stylesheet" href="../styling/fonts/css/all.min.css">

    <!--fresco-->
    <link rel="stylesheet" href="../styling/css/fresco.css">

    <!--tachycons-->
    <link rel="stylesheet" href="../styling/css/tachyons.css">
    <link rel="stylesheet" href="../styling/css/tachyons.css">



    <title>Document</title>
</head>

<style>
.card {
    width: 90%;
    margin: 0% 5%;
    text-align: center;
    padding: 6% 0%;
    border: 2px solid var(--white);
    border-radius: 10px;
}

.card-img-top {
    width: 18% !important;
    margin: 3% 41% !important;
    border-radius: 100%;
    height: 160px;
    border: 4px solid var(--yellow);
}

.card-thread {
    font-size: 13px;
    margin-top: -15px;
    opacity: .6;
    margin-bottom: 35px;
}

#owl-poets {
    overflow: hidden;
    padding: 3% 0%;
    margin-top: 20px;
}


@media (min-width: 0px) and (max-width: 360px) {

    .card-img-top {
        width: 50% !important;
        margin: 3% 25% !important;
        border-radius: 100%;
        height: 140px !important;
        border: 4px solid var(--yellow);
    }

    .card {
        width: 90%;
        margin: 0% 5%;
        text-align: center;
        padding: 6% 0%;
        border: 2px solid var(--white);
        border-radius: 10px;
    }

}


@media (min-width: 361px) and (max-width: 428px) {

    .card-img-top {
        width: 50% !important;
        margin: 3% 25% !important;
        border-radius: 100%;
        height: 150px !important;
        border: 4px solid var(--yellow);
    }

}

@media (min-width: 429px) and (max-width: 565px) {

    .card-img-top {
        width: 42% !important;
        margin: 3% 29% !important;
        border-radius: 100%;
        height: 150px !important;
        border: 4px solid var(--yellow);
    }
}

@media (min-width: 566px) and (max-width: 650px) {

    .card-img-top {
        width: 38% !important;
        margin: 3% 31% !important;
        border-radius: 100%;
        height: 150px !important;
        border: 4px solid var(--yellow);
    }
}

@media (min-width: 650px) and (max-width: 767px) {

    .card-img-top {
        width: 38% !important;
        margin: 3% 31% !important;
        border-radius: 100%;
        height: 150px !important;
        border: 4px solid var(--yellow);
    }
}

@media (min-width: 767px) and (max-width: 991px) {

    .card-img-top {
        width: 30% !important;
        margin: 3% 35% !important;
        border-radius: 100%;
        height: 150px !important;
        border: 4px solid var(--yellow);
    }
}

@media (min-width: 992px) and (max-width: 1119px) {

    .card-img-top {
        width: 25% !important;
        margin: 3% 37.5% !important;
        border-radius: 100%;
        height: 150px !important;
        border: 4px solid var(--yellow);
    }
}


.wrap {
    overflow: hidden;
    height: 620px;
}

.profile_img {
    width: 30%;
    margin: 0% 35%;

}

.profile_img img {
    width: 100%;
    border-radius: 100%;
    height: 150px;
}

.btn-linked {
    background-color: var(--yellow);
    border: 1px solid var(--yellow);
    color: var(--white);
    font-weight: 600;
    border-radius: 100px;
    padding: 1% 3%;
    margin-top: 10px;
    text-transform: uppercase;
}


.btn-linked-alt {
    background-color: var(--white);
    border: 1px solid var(--yellow);
    color: var(--yellow);
    font-weight: 600;
    border-radius: 100px;
}

.btn-linked-alt:hover {
    background-color: var(--yellow);
    border: 1px solid var(--yellow);
    color: var(--white);
}

/* Preloader */

.preloader {
    background: #ffffff;
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
}

.rounder {
    width: 60px;
    height: 60px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -26px 0 0 -26px;
    font-size: 10px;
    border-right: 5px solid var(--yellow);
    border-left: 5px solid var(--dark);
    border-radius: 50%;
    -webkit-animation: spinner 700ms infinite linear;
    animation: spinner 700ms infinite linear;
    z-index: 10000;
}

@-webkit-keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
</style>

<?php include ('nav.php') ?>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="rounder"></div>
    </div>
    <!-- Preloader End -->
    <div class="wrap">



        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10" style='padding:0% 5%'>
                <div class="container pt5">

                    <?php
                    
                       $result = selectOne('users', ['Email' => $ad]);
                
                                $username = $result['Username'];
                                $email = $result['Email'];
                                $profile = $result['Picture'];

                                echo " 
                                 <div class='card '>
                                <img class='card-img-top shadow' src='images/$profile' alt='Card image cap'>
                                <div class='card-body'>
                                <h5 class='card-title'> $username </h5>
                    <h5 class='card-title'> $email </h5>
                    <p class='card-text'>35 Posts.</p>
                    <p class='card-text card-thread'>Favorite threads: Love, Family And Betrayal</p>
                    <a href='settings.php' class='btn btn-linked-alt'>Edit Profile</a>
                </div>
            </div>
            ";


            ?>



                </div>
            </div>
        </div>
    </div>





    <?php  include('footer.php')?>
</body>

</html>