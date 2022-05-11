<?php
  include('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    * {

        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;

    }


    :root {
        --yellow: #333d51;
        --yellow: #d3ac2b;
        --white: #f4f3ea;
    }

    /*--------------------------NAVBAR-------------------------------*/
    nav {
        z-index: 10;
    }

    .navbar-toggler-icon {
        position: relative;
        color: #fff;
        outline: none;
    }

    @media(max-width: 767px) {
        .navbar-toggler-icon>i {
            font-size: 17px !important;
        }

    }

    .menu {
        border: 1px solid #fff;
        width: 20%;
        color: var(--dark);
        min-height: 672px;
        background: #fff;
        position: absolute;
        z-index: 10;
        margin-top: -60px;
        display: none;
    }

    @media(max-width: 767px) {
        .menu {
            width: 60%;
            min-height: 450px;
        }

        .menu-content>ul>i>li {
            list-style-type: none;
            margin-bottom: 10px;
        }
    }

    .display {
        display: block;
    }

    .hide {
        display: none;
    }

    .menu>.close>button>i {
        font-size: 20px;
        width: 30px;
        height: 25px;
        color: var(--dark);
    }

    .menu>.close>button {
        margin-right: 15px;
        margin-top: 30px;
        border: none;
        outline: none;
        background-color: var(--dark);
    }

    .menu-content>ul {
        margin-top: 70px;
        margin-left: 40px;
    }

    .menu-content>ul>li {
        list-style-type: none;
        margin-bottom: 30px;
    }

    .menu-content>ul>.post_link a {
        font-size: 13px;
        font-weight: bold;
    }

    .menu-content>ul>li>a {
        text-decoration: none;
        font-weight: bold;
        font-size: 15px;
        color: var(--dark);
    }

    .menu-content>ul>li>a:hover {
        transition: .5s ease all;
        color: var(--yellow);
    }

    .menu-content>ul>li>a>i {
        padding-right: 3%;
        color: #fff;
    }

    .menu-content>ul>button {
        margin-top: 20px;
    }



    .active {
        color: #007bff !important;
    }

    .navbar {
        display: none;
    }

    .navbar .logo {
        margin-top: 4%;
        margin-left: 3%;
    }



    @media(max-width: 767px) {
        .navbar-desk {
            display: none;
        }

        .navbar {
            display: block;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
    }


    .navbar-desk {
        width: 100%;
        height: 90px;
        padding: 2% 2%;
        z-index: 1000 !important;
        position: relative;
    }

    .navbar-desk .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }



    .logo h6 {
        font-size: 18px;
        color: #fff;
    }

    .nav-links {
        margin-right: 0%;
        width: 60%;

    }

    .nav-links ul {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .nav-links ul li {
        list-style-type: none;
        margin-left: 2%;

        padding: 0% 1%;
    }

    .nav-links ul li a {
        color: var(--white);
        font-size: 15px;
        font-weight: 600;
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .nav-links ul li a {
            color: var(--white);
            font-size: 10px;
            font-weight: 600;
        }
    }

    .nav-links ul li a:hover {
        color: var(--yellow);
        transition: .3s ease all;
    }

    .nav-links ul a li {
        list-style-type: none;
        color: #fff;

    }

    .d-menu {
        position: absolute;
        background-color: #fff;
        padding: 8px 80px 8px 15px;
        margin-left: 0px;
        background-color: var(--white);
        border-top: 6px solid var(--yellow);
        display: none;
        transition: .3s ease all;
    }

    .d-menu a {
        padding: 5% 2%;
        margin: 2%;
        font-size: 18px;
        color: var(--dark);
    }

    .dropdown-item {
        color: var(--dark) !important;
    }

    .d-menu .dropdown-item:hover {
        background-color: var(--white) !important;
        color: var(--yellow) !important;
    }

    .post_link:hover>.d-menu {
        display: block;
        transition: .3s ease all;
    }



    .nav_sign .post_link,
    .nav_sign li {
        list-style-type: none;
    }

    .nav_sign .post_link {
        top: 5px;
        position: absolute;
    }

    .nav_sign .post_link a {
        text-decoration: none;
        color: #fff;
        font-size: 12px;
        text-transform: uppercase;
    }

    .nav_sign .post_link .d-menu {
        margin-left: -37px;
        padding: 1px 50px 1px 15px;
    }
    </style>
</head>

<body>
    <section class="navbar-desk">
        <div class="container">
            <a href='index.php' class="logo">
                <h6>Words<span style='color: var(--yellow); font-family:cursive;'>Linked.</span></h6>
            </a>
            <div class="nav-links">
                <ul>
                    <li>
                        <a href="index.php"><i class="fa fa-house"></i></a>
                    </li>
                    <li class="post_link" style='position:relative'>
                        <a href="#">
                            Posts <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="d-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="posts.php">View Posts</a>
                            <?php if (isset($_SESSION['admin'])) {
                               echo "<a class='dropdown-item' href='./admin/add_posts.php'>Add Post</a>";
                            }else if (isset($_SESSION['users'])) {
                                echo "<a class='dropdown-item' href='./user/add_posts.php'>Add Post</a>";
                            }else{
                                echo "<a class='dropdown-item' href='./user/login.php'>Add Post</a>";
                            }
                            
                            
                            ?>
                        </div>

                    </li>
                    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>

                    <?php 
                    if (isset($_SESSION['admin'])) {
                       $email = $_SESSION['admin'];
                       $result = selectOne('admin', ['Email' => $email]);
                       $username = $result['Username'];

                       echo "<li class='post_link' style='position:relative'>
                       <a href='#' style='text-transform:uppercase'> <i class='fa fa-user'></i>&nbsp
                           $username <i class='fa fa-caret-down'></i>
                       </a>
                       <div class='d-menu' aria-labelledby='navbarDropdown'>
                           <a class='dropdown-item' href='./admin/dashboard.php'>Dashboard</a>
                           <a class='dropdown-item' href='./admin/logout.php'>Logout</a>
                       </div>

                   </li>";
                    }else if (isset($_SESSION['users'])) {
                        $email = $_SESSION['users'];
                        $result = selectOne('users', ['Email' => $email]);
                        $username = $result['Username'];
 
                        echo "<li class='post_link' style='position:relative'>
                        <a href='#' style='text-transform:uppercase'> <i class='fa fa-user'></i>&nbsp
                            $username <i class='fa fa-caret-down'></i>
                        </a>
                        <div class='d-menu' aria-labelledby='navbarDropdown'>
                            <a class='dropdown-item' href='./user/dashboard.php'>Dashboard</a>
                            <a class='dropdown-item' href='./user/logout.php'>Logout</a>
                        </div>
 
                    </li>";}else{
                        echo " <li>
                        <a href='./user/signup.php'><button class='btn btn-info btn-small'
                         style='background-color:var(--yellow); margin-top:-4px;border:1px solid var(--yellow); font-size:13px'>SIGN IN</button></a>
                    </li>";
                    } ?>


                </ul>
            </div>
        </div>
    </section>



    <!--===================Navigation Section for Mobile=========================-->
    <nav class="navbar">
        <a href='index.php' class="logo">
            <h6>Words<span style='color:  var(--yellow); font-family:cursive;'>Linked.</span></h6>
        </a>

        <div class="bind flex flex-row">
            <ul class="nav_sign ">
                <?php 
                    if (isset($_SESSION['admin'])) {
                       $email = $_SESSION['admin'];
                       $result = selectOne('admin', ['Email' => $email]);
                       $username = $result['Username'];

                       echo "<li class='post_link' style='position:relative'>
                       <a href='#'> <i class='fa fa-user'></i>&nbsp
                           $username <i class='fa fa-caret-down'></i>
                       </a>
                       <div class='d-menu' aria-labelledby='navbarDropdown'>
                           <a class='dropdown-item' href='./admin/dashboard.php'>Dashboard</a>
                           <a class='dropdown-item' href='./admin/logout.php'>Logout</a>
                       </div>

                   </li>";
                    }else  if (isset($_SESSION['users'])) {
                        $email = $_SESSION['users'];
                        $result = selectOne('users', ['Email' => $email]);
                        $username = $result['Username'];
 
                        echo "<li class='post_link' style='position:relative'>
                        <a href='#'> <i class='fa fa-user'></i>&nbsp
                            $username <i class='fa fa-caret-down'></i>
                        </a>
                        <div class='d-menu' aria-labelledby='navbarDropdown'>
                            <a class='dropdown-item' href='./user/dashboard.php'>Dashboard</a>
                            <a class='dropdown-item' href='./user/logout.php'>Logout</a>
                        </div>
 
                    </li>";
                     }else{
                        echo "";
                    } ?>
            </ul>
            <button class="navbar-toggler" type="button" style="outline: none;">
                <span>
                    <i class="fa fa-bars" style="color: #fff; font-size: 25px;"></i>
                </span>
            </button>

        </div>

    </nav>

    <div class="menu">
        <div class="close">
            <button class="close">
                <i class="fa fa-close"></i>
            </button>

        </div>

        <div class="menu-content">
            <ul>
                <li>
                    <i class="fa fa-house" style='margin-right:4%'></i> <a href="index.php">Home</a>
                </li>
                <li class="post_link" style='position:relative'>
                    <i class="fa fa-pen" style='margin-right:4%'></i>
                    <a style='font-size:15px'>
                        Posts <i class="fa fa-caret-down" style='color:var(--dark)'></i>
                    </a>
                    <div class="d-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="posts.php">View Posts</a>
                        <?php if (isset($_SESSION['admin'])) {
                               echo "<a class='dropdown-item' href='./admin/add_posts.php'>Add Post</a>";
                            }else if (isset($_SESSION['users'])) {
                                echo "<a class='dropdown-item' href='./user/add_posts.php'>Add Post</a>";
                            }else{
                                echo "<a class='dropdown-item' href='./user/login.php'>Add Post</a>";
                            }
                            
                            
                            ?>
                    </div>

                </li>
                <li>
                    <i class="fa fa-camera" style='margin-right:6%'></i><a href="gallery.php">Gallery</a>
                </li>
                <li>
                    <i class="fa fa-info-circle" style='margin-right:6%'></i><a href="about.php">About Us</a>
                </li>
                <li>
                    <i class="fa fa-message" style='margin-right:6%'></i><a href="contact.php">Contact Us</a>
                </li>

                <?php
                if (!isset($_SESSION['admin']) && (!isset($_SESSION['users']))) {
                    echo " <li>
                    <a href='./user/signup.php'><button class='btn btn-info btn-small'
                     style='background-color:var(--yellow); margin-top:-4px;border:1px solid var(--yellow); font-size:13px'>SIGN IN</button></a>
                </li>";
                }else{
                    echo "";
                }
                
                ?>




            </ul>
        </div>
    </div>
    <!--===================END Navigation Section=========================-->