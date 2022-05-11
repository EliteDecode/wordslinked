<style>
* {
    padding: 0%;
    margin: 0%;
    box-sizing: border-box;
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



:root {
    --yellow: #333d51;
    --yellow: #d3ac2b;
    --white: #f4f3ea;
}

.btn-linked {
    background-color: var(--yellow);
    border: 1px solid var(--yellow);
    color: var(--white);
    font-weight: 600;
    padding: 1.5% 3%;
    margin-top: 10px;
    text-transform: uppercase;

}



.btn-linked-alt {
    background-color: var(--white);
    border: 1px solid var(--yellow);
    color: var(--yellow);
    font-weight: 600;

}

.btn-linked-alt:hover {
    background-color: var(--yellow);
    border: 1px solid var(--yellow);
    color: var(--white);
}



.link {
    border-bottom: 4px solid var(--yellow);
    font-weight: 600;
}

.btn-linked:hover {
    background-color: var(--white);
    border: 1px solid var(--yellow);
    color: var(--yellow);
}

.banner {
    width: 100%;
    padding: 0% 0%;
    z-index: 5;
    position: relative;
    margin-top: -132px;
    background-image: url('./images/write1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.4);
    background-blend-mode: overlay;


}

/* .banner {

    background-position: -400px -8px;
    background-color: rgba(0, 0, 0, 0.4);
    background-blend-mode: overlay;

} */

@media (min-width:0px) and (max-width: 405px) {


    .banner__content h3 {
        font-size: 25px;

    }

    .banner__content p {
        font-size: 15px !important;
        width: 90%;
        margin: 2% 5% 1% 5%;
        opacity: .8 !important;
    }

    .btn-linked-alt,
    .btn-linked {
        font-size: 14px !important;
        text-transform: uppercase !important;
        padding: 3% 4% !important;

    }

    .section_banner {
        height: 330px;
        margin-top: -21%;

    }

    .banner__content {

        padding: 5% 2% !important;
        margin-top: 59%;
    }

    .banner__item {
        border: none !important;
        padding: 4 0% !important;
        width: 90% !important;
        margin: 4% 5% !important;
        text-align: center;
    }

    .carousel-item {
        width: 100%;
        padding: 0% 0% !important;
        z-index: 1000;
        height: 500px;
    }
}

/*min width 361px and max 600px */
@media (min-width: 406px) and (max-width: 501px) {


    .banner__content h3 {
        font-size: 20px;

    }

    .banner__content p {
        font-size: 14px !important;
        width: 90%;
        margin: 3% 5% !important;
        opacity: .8 !important;
    }

    .btn-linked-alt,
    .btn-linked {
        font-size: 16px !important;
    }

    .section_banner {
        height: 330px;
        margin-top: -21%;

    }

    .banner__content {

        padding: 5% 2% !important;
        margin-top: 40%;
    }

    .banner__item {
        border: none !important;
        padding: 4 0% !important;
        width: 90% !important;
        margin: 4% 5% !important;
        text-align: center;
    }

    .carousel-item {
        width: 100%;
        padding: 0% 0% !important;
        z-index: 1000;
        height: 450px !important;
    }
}

/*min width 501px and max 650px */
@media (min-width: 501px) and (max-width: 650px) {


    .banner__content h3 {
        font-size: 20px;

    }

    .banner__content p {
        font-size: 14px !important;
        width: 90%;
        margin: 3% 5% !important;
        opacity: .8 !important;
    }

    .btn-linked-alt,
    .btn-linked {
        font-size: 16px !important;
    }

    .section_banner {
        height: 330px;
        margin-top: -21%;

    }

    .banner__content {

        padding: 5% 2% !important;
        margin-top: 20%;
    }

    .banner__item {
        border: none !important;
        padding: 4 0% !important;
        width: 90% !important;
        margin: 4% 5% !important;
        text-align: center;
    }

    .carousel-item {
        width: 100%;
        padding: 0% 0% !important;
        z-index: 1000;
        height: 450px !important;
    }
}

/*min width 501px and max 650px */
@media (min-width: 651px) and (max-width: 767px) {


    .banner__content h3 {
        font-size: 25px;

    }

    .banner__content p {
        font-size: 14px;
        width: 90%;
        margin: 3% 5% !important;
        opacity: .8 !important;
    }

    .btn-linked-alt,
    .btn-linked {
        font-size: 16px !important;
    }

    .section_banner {
        height: 330px;
        margin-top: -21%;

    }

    .banner__content {

        padding: 5% 2% !important;
        margin-top: 12%;
    }

    .banner__item {
        border: none !important;
        padding: 4 0% !important;
        width: 90% !important;
        margin: 4% 5% !important;
        text-align: center;
    }

    .carousel-item {
        width: 100%;
        padding: 0% 0% !important;
        z-index: 1000;
        height: 450px !important;
    }
}


/*min width 501px and max 650px */
@media (min-width: 768px) and (max-width: 991px) {


    .banner__content h3 {
        font-size: 26px;

    }

    .banner__content p {
        font-size: 14px;
        width: 90%;
        margin: 3% 5% !important;
        opacity: .8 !important;
    }

    .btn-linked-alt,
    .btn-linked {
        font-size: 16px !important;
    }

    .section_banner {
        height: 330px;
        margin-top: -21%;

    }

    .banner__content {

        padding: 5% 2% !important;
        margin-top: 7%;
    }

    .banner__item {
        border: none !important;
        padding: 4 0% !important;
        width: 90% !important;
        margin: 4% 5% !important;
        text-align: center;
    }

    .carousel-item {
        width: 100%;
        padding: 0% 0% !important;
        z-index: 1000;
        height: 450px !important;
    }
}

a:hover {
    text-decoration: none;
}

.carousel-item {
    width: 100%;
    padding: 7% 0%;
    z-index: 1000;
}

.banner__item {
    border: 4px solid #d3ac2b5e;
    padding: 5% 0%;
    width: 65%;
    margin: 4% 17.5%;
    text-align: center;
}

.banner__content {
    color: #fff;

}

video {
    position: absolute;
    right: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.overlay {

    position: absolute;
    right: 0%;
    width: 100%;
    height: 100%;
    z-index: 1;
    background-color: rgba(0, 0, 0, .6);
}



.btn-life {
    padding: 1.5% 3.7%;
    font-weight: bold;
    text-transform: uppercase;
    margin-top: 3%;
    border: none;
    background-color: #17a2b8;
    color: #fff;
    border-radius: 100px;
    font-size: 14px;
}

.btn-life:hover {
    transition: .5s ease all;
    background-color: #05313f;
}



.meadow {
    color: #17a2b8;
    font-weight: bolder;
}




/* posts */
.post {
    border: 1px solid #fff;
    padding: 2% 0%;
}

.trending_post .container h2 {
    padding: 0%;
}

#owl-demo {
    overflow: hidden;
    padding: 3% 0%;
    margin-bottom: 5%;
}

.card-body a {
    text-decoration: none;
}

#owl-demo .card .card-body .card-title {
    font-size: 15px;
}


.card a img {
    height: 220px;
    margin-top: -22px;
}



.bt {
    border-top-style: solid;
    border-top-width: 1px;
}

.bb {
    border-bottom-style: solid;
    border-bottom-width: 1px;
}

.b--black-10 {
    border-color: rgba(0, 0, 0, .1);
}

.db {
    display: block;
}

.flex {
    display: flex;
}

.flex-column {
    flex-direction: column;
}

.avenir {
    font-family: 'avenir next', avenir, sans-serif;
}

.baskerville {
    font-family: baskerville, serif;
}

.fw1 {
    font-weight: 100;
}

.lh-title {
    line-height: 1.25;
}

.lh-copy {
    line-height: 1.5;
}

.mw7 {
    max-width: 48rem;
}

.w-100 {
    width: 100%;
}



.black {
    color: #000;
}

.pv4 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.ph3 {
    padding-left: 1rem;
    padding-right: 1rem;
}

.mb4 {
    margin-bottom: 2rem;
}

.mt0 {
    margin-top: 0;
}

.mv0 {
    margin-top: 0;
    margin-bottom: 0;
}

.no-underline {
    text-decoration: none;
}

.f3 {
    font-size: 1.5rem;
}

.f6 {
    font-size: .875rem;
}

.center {
    margin-right: auto;
    margin-left: auto;
}

.dim {
    opacity: 1;
    transition: opacity .15s ease-in;
}


.dim:hover,
.dim:focus {
    opacity: 1 !important;
    color: var(--yellow);
    transition: opacity .15s ease-in;
}

.dim:active {
    opacity: .8;
    transition: opacity .15s ease-out;
}

@media screen and (min-width: 30em) {
    .flex-row-ns {
        flex-direction: row;
    }

    .w-40-ns {
        width: 40%;
    }

    .w-60-ns {
        width: 60%;
    }

    .pl3-ns {
        padding-left: 1rem;
    }

    .pr3-ns {
        padding-right: 1rem;
    }

    .mb0-ns {
        margin-bottom: 0;
    }
}

@media screen and (min-width: 60em) {
    .ph0-l {
        padding-left: 0;
        padding-right: 0;
    }

    .f5-l {
        font-size: 1rem;
    }
}

/*topics in posts*/
.ba {
    border-style: solid;
    border-width: 1px;
}

.b--black-20 {
    border-color: rgba(0, 0, 0, .2);
}

.db {
    display: block;
}

.dib {
    display: inline-block;
}

.b {
    font-weight: bold;
}

.link {
    text-decoration: none;
    transition: color .15s ease-in;
}

.link:link,
.link:visited {
    transition: color .15s ease-in;
}

.link:hover {
    transition: color .15s ease-in;
}

.link:active {
    transition: color .15s ease-in;
}

.link:focus {
    transition: color .15s ease-in;
    outline: 1px dotted currentColor;
}

.list {
    list-style-type: none;
    padding: 2rem 0rem 0rem 0rem !important;
}

.dark-gray {
    color: #4d4d4f;
}

.pa2 {
    padding: .5rem;
}

.pv4 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.ph3 {
    padding-left: 1rem;
    padding-right: 1rem;
}

.mr1 {
    margin-right: .25rem;
}

.mb2 {
    margin-bottom: .5rem;
}

.f6 {
    font-size: .875rem;
}

.dim {
    opacity: 1;
    transition: opacity .15s ease-in;
}

.dim:hover,
.dim:focus {
    opacity: .5;
    transition: opacity .15s ease-in;
}

.dim:active {
    opacity: .8;
    transition: opacity .15s ease-out;
}

@media screen and (min-width: 30em) {

    .f5-ns {
        font-size: 1rem;
    }
}

@media screen and (max-width: 991px) {
    .trending_side_topics {
        display: none;
    }
}

/* 
/* Thoughts */

.thoughts {
    background: url('./images/banner2.jpg');
    background-color: rgba(0, 0, 0, .4);
    background-blend-mode: overlay;
    background-repeat: none;
    background-size: cover;
    background-attachment: fixed;
    padding: 10% 0%;

}

.thoughts .container-fluid h1 {
    font-size: 40px;
}

@media (min-width: 361px) and (max-width: 575px) {
    .thoughts .container-fluid h1 {
        font-size: 30px !important;
    }

    .thoughts {
        padding: 20% 0% !important;
        background: url('./images/sad3.jpg');
        background-color: rgba(0, 0, 0, .8) !important;
        background-blend-mode: overlay !important;
        background-repeat: none !important;

        background-attachment: fixed;
        padding: 10% 0%;
    }
}

@media (min-width: 0px) and (max-width: 360px) {
    .thoughts .container-fluid h1 {
        font-size: 25px !important;

    }

    .thoughts .container-fluid p {
        font-size: 11px !important;
        margin-top: -15px !important;
    }

    .thoughts {
        padding: 20% 0% !important;
        background: url('./images/sad3.jpg');
        background-color: rgba(0, 0, 0, .8) !important;
        background-blend-mode: overlay !important;
        background-repeat: none !important;

        background-attachment: fixed;
        padding: 10% 0%;
    }

}




/* poets */

.poets {
    padding: 3% 0%
}

.poets .container {
    margin-top: 8%;
}

.card {
    width: 90%;
    margin: 0% 5%;
    text-align: center;
    padding: 6% 0%;
    border: 2px solid var(--white);
    border-radius: 10px;
}

.card-img-top {
    width: 50% !important;
    margin: 3% 25% !important;
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

}


@media (min-width: 361px) and (max-width: 575px) {

    .card-img-top {
        width: 50% !important;
        margin: 3% 25% !important;
        border-radius: 100%;
        height: 150px !important;
        border: 4px solid var(--yellow);
    }
}



/*counter*/

.counter_section {
    border: 1px solid var(--white);
    padding: 10% 0%;
    background-color: var(--white);
}

.count_box {
    padding: 10%;
    text-align: center;
    border-radius: 10px;
    z-index: 1;
    background-color: #fff;
    margin-bottom: 30px;
}

.count_box h3 {
    text-transform: uppercase;
    font-size: 23px;
    font-weight: bold;
    margin: 2% 0%;
}

.count_box h5 {
    border: 1px solid var(--yellow);
    width: 30%;
    margin: 0% 35%;
    border-radius: 100%;
    padding: 6% 0%;
    background-color: var(--yellow);
    color: var(--white);
}

@media (min-width: 0px) and (max-width: 360px) {
    .count_box h5 {
        border: 1px solid var(--yellow);
        width: 20% !important;
        margin: 0% 40%;
        border-radius: 100%;
        padding: 4% 0%;
        background-color: var(--yellow);
        color: var(--white);
        font-size: 18px !important;
    }
}



/*footer*/


/* <!--===================Footer Section=========================-->*/
.footer {
    background-repeat: no-repeat;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.footer .footer_top {
    padding-top: 145px;
    padding-bottom: 129px;
    background: #fff;
}

@media (max-width: 767px) {
    .footer .footer_top {
        padding-top: 60px;
        padding-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .footer .footer_top .footer_widget {
        margin-bottom: 30px;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .footer .footer_top .footer_widget {
        margin-bottom: 30px;
    }
}

.footer .footer_top .footer_widget .footer_title {
    font-size: 22px;
    font-weight: 600;
    color: #001D38;
    text-transform: capitalize;
    margin-bottom: 40px;
}

@media (max-width: 767px) {
    .footer .footer_top .footer_widget .footer_title {
        margin-bottom: 20px;
    }
}

.footer .footer_top .footer_widget .footer_logo {
    font-size: 22px;
    font-weight: 400;
    color: #fff;
    text-transform: capitalize;
    margin-bottom: 40px;
}

@media (max-width: 767px) {
    .footer .footer_top .footer_widget .footer_logo {
        margin-bottom: 20px;
    }
}

.footer .footer_top .footer_widget p {
    color: #919191;
    font-size: 13px;
    font-weight: 400;
    line-height: 28px;
}

.footer .footer_top .footer_widget p a {
    color: #919191;
}

.footer .footer_top .footer_widget p a:hover {
    color: var(--yellow);
}

.footer .footer_top .footer_widget p.footer_text {
    font-size: 16px;
    color: #B2B2B2;
    margin-bottom: 23px;
    font-weight: 400;
    line-height: 28px;
}

.footer .footer_top .footer_widget p.footer_text a.domain {
    color: var(--dark);
    font-weight: 400;
}

.footer .footer_top .footer_widget p.footer_text a.domain:hover {
    color: #5DB2FF;
    border-bottom: 1px solid #5DB2FF;
}

.footer .footer_top .footer_widget p.footer_text.doanar a {
    font-weight: 500;
    color: #B2B2B2;
}

.footer .footer_top .footer_widget p.footer_text.doanar a:hover {
    color: #5DB2FF;
    border-bottom: 1px solid #5DB2FF;
}

.footer .footer_top .footer_widget p.footer_text.doanar a.first {
    margin-bottom: 10px;
}

.footer .footer_top .footer_widget ul li {
    color: #919191;
    font-size: 13px;
    line-height: 32px;
    list-style-type: none;
}

.footer .footer_top .footer_widget ul li a {
    color: #919191;
    text-decoration: none;
    font-weight: 400;
}

.footer .footer_top .footer_widget ul li a:hover {
    color: var(--yellow);
}

.footer .footer_top .footer_widget .newsletter_form {
    position: relative;
    margin-bottom: 20px;
}

.footer .footer_top .footer_widget .newsletter_form input {
    width: 100%;
    height: 50px;
    background: #fff;
    padding-left: 20px;
    font-size: 15px;
    color: #000;
    border: none;
    border: 1px solid #E8E8E8;
    border-radius: 30px;
}

.footer .footer_top .footer_widget .newsletter_form input::placeholder {
    font-size: 15px;
    color: #919191;
}

.footer .footer_top .footer_widget .newsletter_form button {
    position: absolute;
    top: 0;
    right: 0;
    height: 40px;
    border: none;
    font-size: 14px;
    color: #fff;
    background: #5DB2FF;
    padding: 10px;
    padding: 0 22px;
    cursor: pointer;
    border-radius: 30px;
    top: 5px;
    right: 5px;
    font-size: 13px;
    font-weight: 500;
}

.footer .footer_top .footer_widget .newsletter_text {
    font-size: 13px;
    color: #919191;
    line-height: 26px;
}

.footer .copy-right_text {
    padding-bottom: 30px;
    background: #fff;
    margin-top: -80px;
}

.footer .copy-right_text .footer_border {
    border-top: 1px solid #E8E8E8;
    padding-bottom: 30px;
}

.footer .copy-right_text .copy_right {
    font-size: 15px;
    color: #919191;
    margin-bottom: 0;
    font-weight: 500;
}

@media (max-width: 767px) {
    .footer .copy-right_text .copy_right {
        font-size: 13px;
    }
}

.footer .copy-right_text .copy_right a {
    color: #5DB2FF;
}



@media (max-width: 767px) {
    .footer .socail_links {
        margin-top: 30px;
    }
}




/*<!--===================End Footer Section=========================-->*/
</style>