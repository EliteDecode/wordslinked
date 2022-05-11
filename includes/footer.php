<!--===================Footer Section=========================-->
<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <div class="logo">
                                    <h6 class='text-dark'>Words<span
                                            style='color: var(--yellow); font-family:cursive;'>Linked.</span></h6>
                                </div>
                            </a>
                        </div>
                        <p>
                            <a href="#">conbusi@support.com</a> <br>
                            +10 873 672 6782 <br>
                            600/D, Green road, NewYork
                        </p>


                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Important Info
                        </h3>
                        <ul>
                            <li><a href="#">Events</a></li>
                            <li><a href="donations.php">Become A Volunteer</a></li>
                            <li><a href="donations.php">Send Giftings</a></li>
                            <li><a href="donations.php">Donate Regularly</a></li>
                            <li><a href="#">Outreaches</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="about.php">About</a></li>
                            <li><a href="donation.php">Donations</a></li>
                            <li><a href="contact.php"> Contact</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 col-sm-4">
                    <div class="footer_widget">
                        <h3 class="footer_title" id="subscribe">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form" style='position:relative'>
                            <div class="wrap-input1 validate-input-btn"
                                data-validate="Valid email is required: ex@abc.xyz">
                                <div id="msg"></div>
                                <input class="input2" type="text" name="email" placeholder="Email" required
                                    id='subscribers'>
                                <span class="shadow-input2"></span>


                            </div>

                        </form>
                        <div class="container-contact1-form-btn">

                            <button class="contact1-fom-btn btn btn-linked text-center"
                                style=" display:flex; flex-direction:row; justify-content:space-between; align-items:center;"
                                onclick="subscribers()">
                                <h6 style='margin-top:3%;'>Subscribe</h6> <span id='spin'
                                    class="spinner-border text-light" style="display: none;"></span>
                            </button>

                        </div>

                        <p class="newsletter_text">Subscribe today, and get our newsletter regularly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">

                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright ELITE_DECODE &copy;<script>
                        document.write(new Date().getFullYear());
                        </script>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--===================End Footer Section=========================-->



<script type='text/javascript' src="./styling/js/jquery-1.12.4.min.js"></script>
<script type='text/javascript' src="./styling/js/typed.js"></script>

<script type="text/javascript" src="./styling/js/owl.carousel.min.js"></script>
<script src="./styling/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./styling/js/wow.min.js"></script>
<script type="text/javascript" src="./styling/js/waypoints.min.js"></script>
<script type="text/javascript" src="./styling/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="./styling/js/aos.js"></script>
<script type="text/javascript" src="./styling/js/fresco.min.js"></script>

<!-- 
Navbar -->
<script>
var btnToggle = document.querySelector(".navbar-toggler");
var close = document.querySelector(".close");
btnToggle.addEventListener('click', openNav)
var menu = document.querySelector(".menu");


function openNav() {
    $(".menu").toggle(300)
}
close.addEventListener('click', event => {
    $(".menu").toggle(300)
})



// wow js
new WOW().init();
//aos
AOS.init({
    duration: 800,
    easing: 'slide',
    once: false,


});


// counter 
$('.counter').counterUp({
    delay: 10,
    time: 10000
});

//

/* Preloader */


$(document).ready(function() {

    $(window).load(function() {
        $(".preloader").delay(800).fadeOut("slow");
    });

    $("#owl-demo").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds
        loop: true,
        items: 3,

        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },

            978: {
                items: 3,
            }
        },

    });

});

$(document).ready(function() {

    $("#owl-poets").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds
        loop: true,
        items: 3,

        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },

            978: {
                items: 3,
            }
        },

    });

});




var typed = new Typed(".typed", {
    stringsElement: '#typed-strings',
    strings: ["What do you feel?..", "Feel! Connect! Express!..",
        "Your feelings are real.", "Let's get started...", " Sign up now...",
        "Your story begins here..."
    ],
    typeSpeed: 70,
    backSpeed: 70,
    backDelay: 1000,
    startDelay: 1000,
    loop: true
});

var typed = new Typed(".typed2", {
    stringsElement: '#typed-strings',
    strings: ["Put them in writing, Your story begins from here......"],
    typeSpeed: 70,
    backSpeed: 70,
    backDelay: 1000,
    startDelay: 1000,
    loop: true
});




function subscribers() {

    var email = document.getElementById('subscribers').value;
    console.log('hello');

    document.getElementById('spin').style.display = 'block';

    console.log(email);
    var vars = "email=" + email;

    var subscribe = new XMLHttpRequest();

    var method = "POST";
    var url = "./ajax/subscribe.php";
    var sync = true;

    subscribe.open(method, url, sync);

    subscribe.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    subscribe.onreadystatechange = function() {
        if (subscribe.readyState == 4 && subscribe.status == 200) {
            var data = subscribe.responseText;
            if (data) {
                console.log(data);
                document.getElementById('msg').innerHTML = data;
                document.getElementById('spin').style.display = 'none';

            }


        }
    }

    subscribe.send(vars);

}
</script>



</body>

</html>