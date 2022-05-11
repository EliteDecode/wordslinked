<style>
.banner {
    background-image: url('./images/ban.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

}

.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

.db {
    display: block;
}

.fl {
    float: left;
    _display: inline;
}

.w-50 {
    width: 50%;
}

.w-100 {
    width: 100%;
}

.black {
    color: #000;
}

.pa2 {
    padding: .5rem;
}

.pv2 {
    padding-top: .5rem;
    padding-bottom: .5rem;
}

.ph2 {
    padding-left: .5rem;
    padding-right: .5rem;
}

.no-underline {
    text-decoration: none;
}

.grow {
    -moz-osx-font-smoothing: grayscale;
    backface-visibility: hidden;
    transform: translateZ(0);
    transition: transform .25s ease-out;
}

.grow:hover,
.grow:focus {
    transform: scale(1.05);
}

.grow:active {
    transform: scale(.9);
}

@media screen and (min-width: 30em) {
    .w-25-ns {
        width: 25%;
    }

    .w-50-ns {
        width: 50%;
    }
}

#owl-demo .item a img {
    height: 270px;
    width: 95%;
    margin: 0% 2.5%;
}

ul li .page-link {
    color: var(--yellow) !important;
}


@media (min-width: 0px) and (max-width: 360px) {
    .banner {
        background-image: url('./images/sad3.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: -220px -8px;
        background-color: rgba(0, 0, 0, 0.4);
        background-blend-mode: overlay;

    }
}

@media (min-width: 361px) and (max-width: 678px) {
    .banner {
        background-image: url('./images/sad3.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: -320px -100px;
        background-color: rgba(0, 0, 0, 0.4);
        background-blend-mode: overlay;

    }
}

@media (min-width: 678px) and (max-width: 991px) {
    .banner {
        background-image: url('./images/ban.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: -720px -8px;
        background-color: rgba(0, 0, 0, 0.4);
        background-blend-mode: overlay;

    }
}
</style>