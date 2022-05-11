<?php

session_start();

$ad = $_SESSION['admin'];
if (!isset($_SESSION['admin'])) {
    header('location: login.php');
  }
include ('../includes/db.php');


//fetch topics




$limit = 6;
$page =isset( $_GET['page']) ? $_GET['page'] : 1;

$start=($page -1) * $limit;
$posts = selectPage('posts', $start, $limit);

$rowcount = selectAll('posts');
$count = count($rowcount);
$totalPages = ceil($count / $limit);

if ($page == 1) {
    $disabledPrev = 'disabled';
}else{
    $disabledPrev = '';
}
if($page == $totalPages){
    $disabledNext = 'disabled';
}else{
    $disabledNext = '';
}
$first = 1;
$last = $totalPages;
$previous = $page -1;
$next = $page +1;


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
    height: 630px;
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

                <div class="container mt-5" style='overflow-x:scroll'>

                    <?php  if (isset($_SESSION['success'])) {
                    $word = $_SESSION['success'];
                    echo " <div id='msg' class='alert alert-success '>$word</div>";

                   unset($_SESSION['success']);
                }?>
                    <div id="msg"></div>
                    <h6>All Posts Available</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Authur</th>
                                <th scope="col">Published</th>

                                <th scope="col" colspan="3">Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach($posts as $key=>$post): ?>
                            <tr>

                                <th scope="row"><?php echo $key + 1  ?></th>
                                <td><?php echo $post['Title']  ?></td>
                                <td><?php echo $post['Authur'] ?></td>


                                <?php if ($post['Publish'] === 'yes'):  ?>
                                <td><button id="<?php echo $post['id'] ?>" class="btn btn-secondary"
                                        onclick="unpublish(this)">Published</button></td>
                                <?php else: ?>
                                <td><button id="<?php echo $post['id'] ?>" class="btn btn-warning"
                                        onclick="publish(this)">Pending</button></td>
                                <?php endif; ?>

                                >View</button></td>
                                <td><a href="../single_post.php?post_id=<?php echo $posts['id'] ?>"><button
                                            class='btn btn-primary'>View</button></a></td>
                                >View</button></td>
                                <td><a href="edit_post.php?id=<?php echo $post['id'] ?>"><button
                                            class='btn btn-info'>Edit</button></a></td>
                                <td><button id="<?php echo $post['id'] ?>" class="btn btn-danger"
                                        onclick='deleteid(this)'>Delete</button></td>
                            </tr>
                            <?php endforeach;?>


                        </tbody>


                    </table>
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item <?php echo $disabledFirst?> ">
                                <a class="page-link" href="posts.php?page=<?php echo $first ?>" tabindex="-1">First</a>
                            </li>
                            <li class="page-item  <?php echo $disabledPrev?> ">
                                <a class="page-link " href="posts.php?page=<?php echo $previous ?>" tabindex="-1"><i
                                        class="fa fa-caret-left" style='cursor:pointer'></i></a>
                            </li>

                            <!-- Looping through pages to print numbers -->
                            <?php for ($i=1; $i <= $totalPages ; $i++) :?>
                            <li class="page-item"><a class="page-link " id='active'
                                    href="posts.php?page=<?php echo $i ?>" value='<?php echo $i ?>'><?php echo $i ?></a>
                            </li>
                            <?php endfor; ?>
                            <!-- End Looping through pages to print numbers -->

                            <li class="page-item <?php echo $disabledNext?>">
                                <a class="page-link" href="posts.php?page=<?php echo $next ?>"><i
                                        class="fa fa-caret-right" style='cursor:pointer'></i></a>
                            </li>
                            <li class="page-item <?php echo $disabledLast?> ">
                                <a class="page-link" href="posts.php?page=<?php echo $last ?>" tabindex="-1">Last</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>





    <?php  include('footer.php')?>



    <script>
    function deleteid(e) {
        var id = e.id;

        var vars = 'id=' + id;


        var delete_topic = new XMLHttpRequest();
        var method = 'POST';
        var url = '../ajax_controls/admin_delete_post.php';

        delete_topic.open(method, url, true);
        delete_topic.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        delete_topic.onreadystatechange = function() {
            if (delete_topic.readyState == 4 && delete_topic.status == 200) {
                var data = delete_topic.responseText;
                console.log(data);
                document.getElementById('msg').innerHTML = data;
            }
        }

        delete_topic.send(vars);
    }





    function unpublish(e) {
        var id = e.id;

        var vars = 'id=' + id;


        var unpublish = new XMLHttpRequest();
        var method = 'POST';
        var url = '../ajax_controls/admin_unpublish_post.php';

        unpublish.open(method, url, true);
        unpublish.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        unpublish.onreadystatechange = function() {
            if (unpublish.readyState == 4 && unpublish.status == 200) {
                var data = unpublish.responseText;
                console.log(data);
                document.getElementById('msg').innerHTML = data;
            }
        }

        unpublish.send(vars);
    }





    function publish(e) {
        var id = e.id;

        var vars = 'id=' + id;


        var publish = new XMLHttpRequest();
        var method = 'POST';
        var url = '../ajax_controls/admin_publish_post.php';

        publish.open(method, url, true);
        publish.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        publish.onreadystatechange = function() {
            if (publish.readyState == 4 && publish.status == 200) {
                var data = publish.responseText;
                console.log(data);
                document.getElementById('msg').innerHTML = data;
            }
        }

        publish.send(vars);
    }
    </script>
</body>

</html>