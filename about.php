<?php
  include('includes/header.php');
  session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php  include ('includes/nav.php');
       include('includes/stylingIndex.php');
       include('styling/about_styling.php')?>
?>


<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="rounder"></div>
    </div>
    <!-- Preloader End -->

    <!--banner section-->
    <section class="banner">

        <div class="overlay"></div>
        <div id="banner" class="" data-ride="">

            <div class="carousel-inner">
                <div class="carousel-item active bg1">
                    <div class=" banner__item">
                        <div class="banner__content">
                            <h3 data-aos="fade-down" data-aos-delay="100"> <i class='typed3'></i> <i
                                    class="fa fa-pen"></i></h3>
                            <p data-aos="fade-up" data-aos-delay="500"><i>What you need to know... <i
                                        class="fa fa-info-circle" style='color:var(--yellow)'></i></i> </p>


                            <a href="donations.php"><button class=" btn btn-linked" data-aos="fade-up"
                                    data-aos-delay="1000">About Us <i class="fa fa-arrow-right"></i></button></a>
                        </div>

                    </div>
                </div>



            </div>

        </div>

        </div>
    </section>
    <!--end-->




    <!--end-->
    <div class="about">
        <div class="container ">
            <div class="row">
                <div class="card  col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                    <div class="card-header">
                        What We <span class='link'>Are</span>
                    </div>
                    <div class="card-body">

                        <p class="card-text"> Words<span class="link">Linked</span> is one of the most interactive
                            poetry and writing
                            platform
                            where you can share your poems, stories,
                            quotes and thoughts as well as images. <br> It's simple to use, easy to post, and gives you
                            a
                            great
                            sense of pride once you see how many people actually like what you have posted. Whether it's
                            a
                            poem that describes exactly how you feel or a quote that explains something in your life -
                            Words<span class="link">Linked</span> is the place for poets!
                        </p>

                    </div>
                </div>

                <div class="card  col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                    <div class="card-header">
                        Why Words<span class="link">Linked</span>
                    </div>
                    <div class="card-body">

                        <p class="card-text"> Words<span class="link">Linked</span> is an interactive platform that
                            allows poets to share
                            their works and feelings
                            with people. <br> It gives a chance for people to get connected with the poet, read the
                            poems,
                            share thoughts and support them in every step.
                            We are a platform where writers can share.
                            <br>
                            their stories. And readers could get to know more about their favourite authors.
                            It's a platform that helps poets write about their emotions and share them with the
                            world. It is built to encourage people to express themselves in ways they never knew
                            possible before.
                        </p>

                    </div>
                </div>


            </div>

        </div>

    </div>
    <!--section-->
    <section class="poets">

        <div class="container">
            <h3 class="baskerville fw1 ph3 ph0-l">Poet's<span class="link"> Meet</span></h3>
            <div id="owl-poets" class="owl-carousel owl-theme">
                <div class="card shadow">
                    <img class="card-img-top shadow" src="images/sad1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wills James Jr.</h5>
                        <p class="card-text">35 Posts.</p>
                        <p class="card-text card-thread">Favorite threads: Love, Family And Betrayal</p>
                        <a href="#" class="btn btn-linked-alt">Visit Profile</a>
                    </div>
                </div>
                <div class="card shadow">
                    <img class="card-img-top shadow" src="images/sad2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wills James Jr.</h5>
                        <p class="card-text">35 Posts.</p>
                        <p class="card-text card-thread">Favorite threads: Love, Family And Betrayal</p>
                        <a href="#" class="btn btn-linked-alt">Visit Profile</a>
                    </div>
                </div>
                <div class="card shadow">
                    <img class="card-img-top shadow" src="images/sad3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wills James Jr.</h5>
                        <p class="card-text">35 Posts.</p>
                        <p class="card-text card-thread">Favorite threads: Love, Family And Betrayal</p>
                        <a href="#" class="btn btn-linked-alt">Visit Profile</a>
                    </div>
                </div>
                <div class="card shadow">
                    <img class="card-img-top shadow" src="images/sad4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wills James Jr.</h5>
                        <p class="card-text">35 Posts.</p>
                        <p class="card-text card-thread">Favorite threads: Love, Family And Betrayal</p>
                        <a href="#" class="btn btn-linked-alt">Visit Profile</a>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--section-->
    <!--section-->
    <section class="counter_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 ">
                    <div class="count_box shadow">
                        <i class="fa fa-user-md"></i>
                        <h3>Poets</h3>
                        <h5 class='counter'>100 <i class="fa fa-plus-sign"></i></h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 ">
                    <div class="count_box shadow">
                        <i class="fa fa-pen"></i>
                        <h3>Posts</h3>
                        <h5 class='counter'>750 <i class="fa fa-plus-sign"></i></h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 ">
                    <div class="count_box shadow">
                        <i class="fa fa-users"></i>
                        <h3>Subscribers</h3>
                        <h5 class='counter'>800 <i class="fa fa-plus-sign"></i></h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 ">
                    <div class="count_box shadow">
                        <i class="fa fa-heart"></i>
                        <h3>Likes</h3>
                        <h5 class='counter'>940 <i class="fa fa-plus-sign"></i></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section-->

    <!--form-->








    <?php 
      include('./includes/footer.php')
    ?>


    <script>
    var typed = new Typed(".typed3", {
        stringsElement: '#typed-strings',
        strings: ["All about WordsLinked..", " All you need to know...",
            "We are connected with you..."

        ],
        typeSpeed: 70,
        backSpeed: 70,
        backDelay: 1000,
        startDelay: 1000,
        loop: true
    });
    </script>
</body>

</html>