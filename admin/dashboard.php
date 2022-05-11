<?php

session_start();

$ad = $_SESSION['admin'];
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
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
.track {
    margin-top: 4%;
}

.inner_box {
    width: 90%;
    padding: 10% 8%;
    margin: 0% 5% 4% 5%;
}

.dash {
    color: #fff !important;
    text-decoration: none !important;
}

.dash:hover {
    color: var(--white) !important;
}

.dash i {
    font-size: 25px;
    margin-bottom: 8%;
}

.wrap {
    overflow: hidden;
    height: 820px;
}

@media (min-width: 0px) and (max-width: 969px) {
    .wrap {
        overflow: hidden;
        height: 1020px;
    }

    .form-group {
        margin-top: 4%;
        margin-bottom: 8%;
    }

}

@media (min-width: 0px) and (max-width: 969px) {

    .tabss {
        overflow: scroll;
        margin-top: 7%;
    }



    .track {
        margin-top: 9%;
    }
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
                    <div class="row">
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-primary inner_box" style='border-radius:10px;'>
                                <a href='profile.php' class='dash'>
                                    <i class="fa fa-user"></i>

                                    <h4>My Profile</h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-secondary inner_box" style='border-radius:10px;'>
                                <a href='posts.php' class='dash'>
                                    <i class="fa fa-pen"></i>


                                    <h4>Total Posts : <?php $num = selectAll('posts');
                                    $res = count($num);
                                  if ($res > 0) {
                                      echo" <span>$res</span>";
                                  }else{
                                    echo "<span>2</span>";
                                  }
                                 
                                 ?>
                                    </h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-info inner_box" style='border-radius:10px;'>
                                <a href='add_posts.php' class='dash'>
                                    <i class="fa fa-file-edit"></i>

                                    <h4>Add Post </h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-warning inner_box" style='border-radius:10px;'>
                                <a href='posts.php' class='dash'>
                                    <i class="fa fa-folder-closed"></i>

                                    <h4>Published Posts : <?php $num = selectAll('posts', ['Publish' => 'yes']);
                                    $res = count($num);
                                  if ($res > 0) {
                                      echo" <span>$res</span>";
                                  }else{
                                    echo "<span>0</span>";
                                  }
                                 
                                 ?></h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-dark inner_box" style='border-radius:10px;'>
                                <a href='posts.php' class='dash'>
                                    <i class="fa fa-folder-open"></i>

                                    <h4>Unpublished Posts : <?php $num = selectAll('posts', ['Publish' => 'no']);
                                    $res = count($num);
                                  if ($res > 0) {
                                      echo" <span>$res</span>";
                                  }else{
                                    echo "<span>0</span>";
                                  }
                                 
                                 ?></h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-danger inner_box" style='border-radius:10px;'>
                                <a href='logout.php' class='dash'>
                                    <i class="fa fa-sign-out"></i>

                                    <h4>Logout</h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php  include('footer.php')?>
</body>

</html>