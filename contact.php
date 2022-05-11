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
       include('styling/contact_styling.php')?>
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
                            <p data-aos="fade-up" data-aos-delay="500"><i>Keep us informed... <i class="fa fa-message"
                                        style='color:var(--yellow)'></i></i> </p>


                            <a href="donations.php"><button class=" btn btn-linked" data-aos="fade-up"
                                    data-aos-delay="1000">Contact Us <i class="fa fa-arrow-right"></i></button></a>
                        </div>

                    </div>
                </div>



            </div>

        </div>

        </div>
    </section>
    <!--end-->

    <!--- map -->
    <div class="col-12 p-0 mt-5 mb-5">
        <div class="container">
            <iframe style="width: 100%; height: 500px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>


    <!--end-->
    <div class="contact_form">
        <div class="container cont-form">

            <form class="">
                <h5 class=' mb-3'>MESSAGE <span class='link'> US</span></h5>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <textarea name="" id="" cols="40" rows="5" class="form-control"
                        placeholder="Write your message here..."></textarea>
                </div>

                <button type="submit" class="btn btn-linked-alt">Send Message</button>
            </form>
        </div>

    </div>


    <!--form-->








    <?php 
      include('./includes/footer.php')
    ?>


    <script>
    var typed = new Typed(".typed3", {
        stringsElement: '#typed-strings',
        strings: ["Send us a message..", " Chat with Kafee...",
            "We are ready to respond..."

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