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
       include('styling/gallery_styling.php')?>


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
                            <p data-aos="fade-up" data-aos-delay="500"><i>Shared photos last longer in our hearts.. <i
                                        class="fa fa-camera" style='color:var(--yellow)'></i></i> </p>

                            <a href="donations.php"><button class=" btn btn-linked" data-aos="fade-up"
                                    data-aos-delay="1000">Proceed <i class="fa fa-arrow-right"></i></button></a>
                        </div>

                    </div>
                </div>



            </div>

        </div>

        </div>
    </section>
    <!--end-->



    <!-- section posts -->

    <section class="post">
        <div class="container">
            <div class="trending_post" style='margin-top:3%'>
                <div class="container">
                    <h3 class="baskerville fw1 ph3 ph0-l">Pictures Do <span class='link'> Speak</span> </h3>
                    <div id="owl-demo" class="owl-carousel owl-theme">

                        <div class="item"><a href="images/best.jpg" class=' shadow fresco'
                                data-fresco-group="projects"><img src="images/best.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/banner.jpg" class='shadow fresco'
                                data-fresco-group="projects"><img src="images/banner.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/happy1.jpg" class='shadow fresco'
                                data-fresco-group="projects"><img src="images/happy1.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/happy2.jpg" class='shadow fresco'
                                data-fresco-group="projects"><img src="images/happy2.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/happy3.jpg" class=' shadow fresco'
                                data-fresco-group="projects"><img src="images/happy3.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/sad1.jpg" class='shadow fresco'
                                data-fresco-group="projects"><img src="images/sad1.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/sad2.jpg" class='shadow fresco'
                                data-fresco-group="projects"><img src="images/sad2.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/sad4.jpg" class=' shadow fresco'
                                data-fresco-group="projects"><img src="images/sad4.jpg" alt="image Image" /></a>
                        </div>
                        <div class="item"><a href="images/sad6.jpg" class='shadow fresco'
                                data-fresco-group="projects"><img src="images/sad6.jpg" alt="image Image" /></a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-9 col-sm-12 col-xs-12 ">

                    <!--search Form-->
                    <div class="row search_post" style='margin-bottom:25px'>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 ">
                            <div class="container">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Filter By Topics</label>
                                        <select name="" id="" class="form-control" style=' font-weight:bold'>
                                            <option value="">Love</option>
                                            <option value="">Sad</option>
                                            <option value="">Family</option>
                                            <option value="">Friendship</option>
                                            <option value="">HeartBreak</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <!--end search form-->


                </div>

            </div>
        </div>
    </section>
    <!--end- -->





    <section class="main_gallery">
        <div class="container">
            <h3 class="baskerville fw1 ph3 ph0-l">Feelings In Pic<span class='link'>tures</span> </h3>
            <main class="cf pa2">
                <div class="fl w-100 w-50-ns ph2">
                    <a href="images/best.jpg" class="pv2 grow db no-underline black fresco"
                        data-fresco-group="projects"><img class="db w-100" src="images/best.jpg"></a>
                    <a href="" class="no-underline pv2 grow db"><img class="db w-100" src="images/happy1.jpg"></a>
                    <a href="#" class="no-underline pv2 grow db"><img class="db w-100" src="images/happy2.jpg" /></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad1.jpg"></a>
                </div>
                <div class="fl w-50 w-25-ns ph2">
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad2.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad6.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad4.jpg"> </a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad5.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad7.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad1.jpg"></a>
                </div>
                <div class="fl w-50 w-25-ns ph2">
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad2.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/happy1.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/happy2.jpg">
                    </a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/happy3.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad7.jpg"></a>
                    <a href="" class="pv2 grow db no-underline black"><img class="db w-100" src="images/sad1.jpg"></a>
                </div>
            </main>
            <nav aria-label="Page navigation example " class='flex justify-center mt5'>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

    </section>




    <?php 
      include('./includes/footer.php')
    ?>


    <script>
    var typed = new Typed(".typed3", {
        stringsElement: '#typed-strings',
        strings: ["Hmm... too tough to pen down?", " Let pictures do it...",
            "Sometimes pictures do justice to how we feel...",
            "Let's get started, the world is waiting..",
            "Your story begins from here..."
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