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
       
    $postTitle = 'Recent Posts'; 
     if (isset($_POST['select'])) {
         $num = $_POST['select'];
          $po = selectAll('posts', ['Topic_id' => $num]);
          $topics = selectOne('topic', ['id' => $num]);
          $topic = $topics['Topic'];
          if (count($po) != 0) {
            $postTitle = "You searched for Posts Under '" . strtoupper($topic) . " ' ";
        }else{
            $postTitle = "You searched for Posts Under '" . strtoupper($topic) . " ' No records found";
        }
       
      }elseif (isset($_POST['search_term'])) {
            $po = searchTrack($_POST['search_term'], 0 , 4);
            if (count($po) != 0) {
                $postTitle = "You searched for '" . strtoupper($_POST['search_term']) . " ' ";
            }else{
                $postTitle = 'No record found on your search term....';
            }
     }else{
        $po = selectPageCondition('posts', 0,4);
     }
       ?>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="rounder"></div>
    </div>
    <!-- Preloader End -->


    <!--banner section-->
    <section class="banner">
        <!-- <video src="video/rain2.mp4" autoplay muted loop></video>
        <div class="overlay"></div> -->
        <div id="banner" class="" data-ride="">

            <div class="carousel-inner">
                <div class="carousel-item active bg1">
                    <div class=" banner__item">
                        <div class="banner__content">
                            <h3 data-aos="fade-down" data-aos-delay="100"> <i class='typed'></i> <i
                                    class="fa fa-pen"></i></h3>
                            <p data-aos="fade-up" data-aos-delay="500">Words are true and keeps us sane. <br> Share
                                them... <i class="fa fa-brain" style='color:var(--yellow)'></i>
                            </p>

                            <?php if (isset($_SESSION['users'])) {
                             echo " <a href='user/add_posts.php'><button class=' btn btn-linked' data-aos='fade-up'
                             data-aos-delay='1000'>Proceed <i class='fa fa-arrow-right'></i></button></a>";
                           }elseif(isset($_SESSION['admin'])){
                            echo " <a href='admin/add_posts.php'><button class=' btn btn-linked' data-aos='fade-up'
                            data-aos-delay='1000'>Proceed <i class='fa fa-arrow-right'></i></button></a>";
                           }else{
                            echo " <a href='user/login.php'><button class=' btn btn-linked' data-aos='fade-up'
                            data-aos-delay='1000'>Proceed <i class='fa fa-arrow-right'></i></button></a>";
                           }
                           ?>


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
                    <h3 class="baskerville fw1 ph3 ph0-l">Trending <span class='link'> Posts</span> </h3>
                    <div id="owl-demo" class="owl-carousel owl-theme">

                        <?php 
                    $sql = "SELECT * FROM posts WHERE Publish ='yes' ORDER BY rand() LIMIT 10";
                    $query = mysqli_query($conn,$sql);
                    ?>
                        <?php while( $posts = mysqli_fetch_assoc($query)) :?>
                        <div class="card shadow" style='width:92%; margin:0% 4%'>
                            <a href="images/post_images/<?php echo $posts['Picture'] ?>" class='shadow fresco'
                                data-fresco-group="projects"><img
                                    src="images/post_images/<?php echo $posts['Picture'] ?>" alt="image Image"
                                    style='width:100%' /></a>
                            <div class="card-body">
                                <h5 class="card-title" style='text-transform:capitalize'>
                                    <?php echo substr($posts['Title'], 0, 25) ?>...</h5>

                                <a href="single_post.php?post_id=<?php echo $posts['id']  ?>" class="btn btn-linked-alt"
                                    style='text-decoration:none'>See Write Up</a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-9 col-sm-12 col-xs-12">

                    <!--search Form-->
                    <div class="row search_post" style='margin-bottom:45px'>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">

                            <form action="index.php" method='post'>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Filter By Topics</label>
                                    <select name="select" id="" class="form-control" style=' font-weight:bold'
                                        onchange="this.form.submit()">

                                        <?php $topics = selectAll('topic'); foreach($topics as $topic): ?>
                                        <option value="<?php  echo $topic['id']?>"><?php  echo $topic['Topic']?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
                            <form action="index.php" method='post'>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Search</label>
                                    <input type="search" class="form-control"
                                        placeholder="Search for a post By Authur Or Title..."
                                        style='color:var(--yellow); font-weight:bold; text-transform:capitalize'
                                        name='search_term' value='<?php if (isset($_POST['search_term'])) {
                                   echo $_POST['search_term'];
                                } ?>'>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--end search form-->
                    <h3 class="baskerville fw1 ph3 ph0-l"><?php  echo $postTitle ?></h3>

                    <?php

                 

                    foreach($po as $pos):
                       
                    ?>
                    <article class="bt bb b--black-10">
                        <a class="db pv4 ph3 ph0-l no-underline black dim"
                            href="single_post.php?post_id=<?php echo $pos['id'] ?>">
                            <div class="row">
                                <div
                                    class="pr3-ns mb4 mb0-ns w-100 w-40-ns col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                                    <img src="images/post_images/<?php echo $pos['Picture']  ?>" class="db"
                                        alt="Photo of a dimly lit room with a computer interface terminal."
                                        style='width:100%; height:260px'>
                                </div>
                                <div class="w-100 w-60-ns pl3-ns col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                                    <h1 class="f3 fw1 baskerville mt0 lh-title">
                                        <?php echo $pos['Title']  ?></h1>
                                    <p class="f6 f5-l lh-copy" style='line-height:1.7rem'>
                                        <i style='opacity:.8'>
                                            <?php echo substr($pos['Descrip'], 0, 255) ?>...</i>
                                    </p>
                                    <span class="inf flex flex-row" style='opacity:.8; color:var(--yellow);'>
                                        <p class="f6 lh-copy mv0"> <i class="fa fa-user"></i> &nbsp By
                                            <?php echo $pos['Authur'] ?>
                                        </p>
                                        &nbsp&nbsp&nbsp
                                        <p class="f6 lh-copy mv0"> <i class="fa fa-calendar"></i>
                                            &nbsp<?php echo date('F j, Y', strtotime($pos['DateReg'])) ?></p>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endforeach; ?>



                    <a href='posts.php' class='btn btn-linked-alt mt-3'>View More</a>
                </div>
                <div class="col-md-12 col-lg-3 col-xl-3 col-sm-12 col-xs-12 trending_side_topics">
                    <h3 class="baskerville fw1 ph3 ph0-l"> Trending Top<span class="link">ics</span></h3>
                    <div class="">
                        <?php $sql = "SELECT * FROM `topic` ORDER BY rand() LIMIT 10";
                         $query = mysqli_query($conn,$sql);
                         
                       while($topics = mysqli_fetch_assoc($query)):
                        ?>

                        <a href="#" class="list-group-item list-group-item-action ">
                            <?php echo $topics['Topic'] ?>
                        </a>

                        <?php endwhile; ?>
                    </div>
                    <ul class="list ph3 ph5-ns pv4">

                        <?php $sql = "SELECT * FROM `topic` ORDER BY rand() LIMIT 10";
                         $query = mysqli_query($conn,$sql);
                         
                       while($topics = mysqli_fetch_assoc($query)):
                        ?>

                        <li class="dib mr1 mb2"><a href="#" class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">
                                <?php echo $topics['Topic'] ?></a></li>


                        <?php endwhile; ?>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--end- -->




    <!--section-->
    <section class="thoughts">
        <div class="container-fluid flex flex-column align-items-center justify-center">
            <h1 class="f3 fw1 baskerville mt0 lh-title" style=' color:var(--yellow); ' data-aos="fade-down"
                data-aos-delay="300">
                <i> What are your thoughts?</i>
            </h1>
            <p class="f6 f5-l lh-copy" style='margin-top:-22px; font-size:16px; color:var(--white);'
                data-aos="fade-down" data-aos-delay="500">
                <i class='typed2'></i> <i class="fa fa-pen"></i>
            </p>
            <a href="user/login.php"><button class=" btn btn-info" data-aos="fade-down" data-aos-delay="700"
                    style='background-color:var(--yellow); border:1px solid var(--yellow)'>Proceed <i
                        class="fa fa-arrow-right"></i></button></a>

        </div>
    </section>
    <!--section-->


    <!--section-->
    <section class="poets">

        <div class="container">
            <h3 class="baskerville fw1 ph3 ph0-l">Popular<span class="link"> Poets</span></h3>
            <div id="owl-poets" class="owl-carousel owl-theme">

                <?php $sql = "SELECT * FROM users ORDER BY rand() LIMIT 7";
                $result = mysqli_query($conn, $sql);
            while($user = mysqli_fetch_assoc($result)):
            ?>
                <div class="card shadow">
                    <img class="card-img-top shadow" src="user/images/<?php echo $user['Picture']  ?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $user['Username']  ?></h5>

                        <p class="card-text">35 Posts.</p>
                        <p class="card-text card-thread">Favorite threads: Love, Family And Betrayal</p>
                        <a href="profile.php?user_id=<?php echo $user['id'] ?>" class="btn btn-linked-alt">Visit
                            Profile</a>
                    </div>
                </div>
                <?php endwhile; ?>

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
    <?php 
      include('./includes/footer.php')
    ?>
</body>

</html>