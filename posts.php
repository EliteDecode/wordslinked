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

       $limit = 4;
       $page =isset( $_GET['page']) ? $_GET['page'] : 1;
       $date = 'DateReg';
       $start=($page -1) * $limit;
      
       
       $rowcount = selectAll('posts', ['Publish' => 'yes']);
       $count = count($rowcount);
       $totalPages = ceil($count / $limit);
       
       if ($page == 1) {
           $disabledPrev = 'disabled';
           $bg = 'grey';
       }else{
           $disabledPrev = '';
           $bg = '';
       }
       if($page == $totalPages){
           $disabledNext = 'disabled';
           $bg = 'grey';
       }else{
           $disabledNext = '';
           $bg = '';
       }
       $first = 1;
       $last = $totalPages;
       $previous = $page -1;
       $next = $page +1;
       
       $postTitle = 'Recent Posts'; 
       if (isset($_POST['search_term'])) {
        $po = searchTrack($_POST['search_term'], $start , 10);
        if (count($po) != 0) {
            $postTitle = "You searched for '" . strtoupper($_POST['search_term']) . " ' ";
        }else{
            $postTitle = 'No record found on your search term....';
        }
       
     }elseif(($_POST['search_term'] == '')){
        $po = selectPageCondition('posts', $start,$limit);
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
        <video src="video/rain3.mp4" autoplay muted loop></video>
        <div class="overlay"></div>
        <div id="banner" class="" data-ride="">

            <div class="carousel-inner">
                <div class="carousel-item active bg1">
                    <div class=" banner__item">
                        <div class="banner__content">
                            <h3 data-aos="fade-down" data-aos-delay="100"> <i class='type'></i> <i
                                    class="fa fa-pen"></i></h3>
                            <p data-aos="fade-up" data-aos-delay="500">Words keeps us sane. Share them... <i
                                    class="fa fa-brain" style='color:var(--yellow)'></i>
                            </p>

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

            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-9 col-sm-12 col-xs-12">

                    <!--search Form-->
                    <div class="row search_post" style='margin-bottom:45px'>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Filter By Topics</label>
                                    <select name="" id="" class="form-control" style=' font-weight:bold'>

                                        <?php $topics = selectAll('topic'); foreach($topics as $topic): ?>
                                        <option value=""><?php  echo $topic['Topic']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
                            <form action="posts.php" method='post'>
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


                    <div class="container" style="overflow-x: scroll">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item <?php echo $disabledFirst?> "
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link" href="posts.php?page=<?php echo $first ?>"
                                        tabindex="-1">First</a>
                                </li>
                                <li class="page-item  <?php echo $disabledPrev?> "
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link " href="posts.php?page=<?php echo $previous ?>" tabindex="-1"><i
                                            class="fa fa-caret-left" style='cursor:pointer'></i></a>
                                </li>

                                <!-- Looping through pages to print numbers -->
                                <?php for ($i=1; $i <= $totalPages ; $i++) :?>
                                <li class="page-item"><a class="page-link " id='active'
                                        href="posts.php?page=<?php echo $i ?>"
                                        value='<?php echo $i ?>'><?php echo $i ?></a>
                                </li>
                                <?php endfor; ?>
                                <!-- End Looping through pages to print numbers -->

                                <li class="page-item <?php echo $disabledNext?>"
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link" href="posts.php?page=<?php echo $next ?>"><i
                                            class="fa fa-caret-right" style='cursor:pointer'></i></a>
                                </li>
                                <li class="page-item <?php echo $disabledLast?> "
                                    style='background-color:<?php echo $bg ?>'>
                                    <a class="page-link" href="posts.php?page=<?php echo $last ?>"
                                        tabindex="-1">Last</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="col-md-12 col-lg-3 col-xl-3 col-sm-12 col-xs-12 trending_side_topics">
                    <h3 class="baskerville fw1 ph3 ph0-l"> Trending Top<span class="link">ics</span></h3>
                    <div class="">
                        <a href="#" class="list-group-item list-group-item-action ">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action ">Vestibulum at eros</a>
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action ">Vestibulum at eros</a>
                        <a href="#" class="list-group-item list-group-item-action ">Vestibulum at eros</a>
                    </div>
                    <ul class="list ph3 ph5-ns pv4">
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Abyssinian</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Aegean</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Arabian</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Australian</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Asian</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Balinese</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Bambino</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Bengal</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Birman</a></li>
                        <li class="dib mr1 mb2"><a href="#"
                                class="f6 f5-ns b db pa2 link dim dark-gray ba b--black-20">Bombay</a></li>

                    </ul>
                </div>
            </div>


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
        </div>

    </section>
    <!--end- -->











    <?php 
      include('./includes/footer.php')
    ?>

    <script>
    var typed = new Typed(".type", {
        stringsElement: '#typed-strings',
        strings: ["See what poets have written..", " Ice cold...",
            "Feel! Connect! and Express!..."

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