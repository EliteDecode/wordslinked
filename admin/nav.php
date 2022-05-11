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
        color: var(--dark);
        outline: none;
    }

    @media(max-width: 767px) {
        .navbar-toggler-icon>i {
            font-size: 17px !important;
        }

    }

    .menu {
        border: 1px solid #05232c;
        width: 20%;
        color: #fff;
        min-height: 672px;
        background: #05232c;
        position: absolute;
        z-index: 1000000;
        margin-top: -90px;
        display: none;
    }

    @media(max-width: 767px) {
        .menu {
            width: 100%;
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
        color: #fff;
    }

    .menu>.close>button {
        margin-right: 15px;
        margin-top: 50px;
        border: none;
        outline: none;

        ;
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
        font-weight: 600;
        font-size: 14px;
        color: #fff;
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
        text-decoration: none !important;
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
        color: var(--dark);

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
        color: var(--dark);
        font-size: 15px;
        text-decoration: none !important;
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

    .post_link {
        list-style-type: none;
    }

    .post_link a {
        color: var(--dark);
        text-transform: capitalize;
        text-decoration: none;
        font-size: 15px;
    }

    .mob_post_link {
        margin-left: -87px;
        padding: 1px 80px 1px 15px;
    }
    </style>
</head>

<body>
    <section class="navbar-desk shadow">
        <div class="container">
            <a href='index.php' class="logo" style='text-decoration:none'>
                <h6>Words<span style='color: var(--yellow); font-family:cursive;'>Linked.</span></h6>
            </a>
            <div class="nav-links">
                <ul>
                    <li>
                        <a href="../index.php"><i class="fa fa-house"></i></a>
                    </li>
                    <li class="post_link" style='position:relative'>
                        <a href="#">
                            Posts <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="d-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../posts.php">View Posts</a>

                            <?php if (isset($_SESSION['admin'])) {
                               echo "<a class='dropdown-item' href='../admin/add_posts.php'>Add Post</a>";
                            }else{
                                echo "<a class='dropdown-item' href='login.php'>Add Post</a>";
                            }
                            
                            
                            ?>

                        </div>

                    </li>
                    <li>
                        <a href="../gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="../about.php">About Us</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact Us</a>
                    </li>

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
                           <a class='dropdown-item' href='../index.php'>Home</a>
                           <a class='dropdown-item' href='logout.php'>Logout</a>
                       </div>

                   </li>";
                    }else{
                        echo "";
                    } ?>

                </ul>
            </div>
        </div>
    </section>



    <!--===================Navigation Section for Mobile=========================-->
    <nav class="navbar shadow">
        <a href='index.php' class="logo" style='  text-decoration: none !important;'>
            <h6>Words<span style='color:  var(--yellow); font-family:cursive;'>Linked.</span></h6>
        </a>

        <?php 
                    if (isset($_SESSION['admin'])) {
                       $email = $_SESSION['admin'];
                       $result = selectOne('admin', ['Email' => $email]);
                       $username = $result['Username'];

                       echo "<li class='post_link ' style='position:relative'>
                       <a href='#'> <i class='fa fa-user'></i>&nbsp
                           $username <i class='fa fa-caret-down'></i>
                       </a>
                       <div class='d-menu mob_post_link' aria-labelledby='navbarDropdown'>
                           <a class='dropdown-item' href='../index.php'>Home</a>
                           <a class='dropdown-item' href='logout.php'>Logout</a>
                       </div>

                   </li>";
                    }else{
                        echo "";
                    } ?>
    </nav>


    <!--===================END Navigation Section=========================-->