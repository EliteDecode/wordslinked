<?php
  include('includes/header.php');
  session_start();


  if (isset($_GET['post_id'])) {
     $id = $_GET['post_id'];
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
    .db {

        width: 80%;
        margin: 0%;
    }

    @media (min-width: 0px) and (max-width: 767px) {
        .db {
            height: 100%;
            width: 100%;

        }
    }
    </style>
</head>
<?php  include ('includes/admin_nav.php');
       include('includes/stylingIndex.php')?>

<body>




    <!-- section posts -->

    <section class="post">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-9 col-sm-12 col-xs-12">

                    <h3 class="baskerville fw1 ph3 ph0-l"> <span class="link">Re</span>cent Posts</h3>
                    <?php $sql = "SELECT * FROM posts WHERE Publish = 'yes' AND id=$id " ;
                                      $query = mysqli_query($conn,$sql);
                                      
                                      $posts = mysqli_fetch_assoc($query);

                                      $authur = $posts['Authur'];
                                      $users = selectAll('users', ['Username' => $authur]);

                                     foreach($users as $user){
                                         
                                     }
                                      
 
                                ?>
                    <article class="bt bb b--black-10">
                        <div class="db pv4 ph3 ph0-l no-underline black dim" href="#0">

                            <div class="pr3-ns mb4 mb0-ns w-100 w-40-ns ">
                                <img src="images/post_images/<?php echo $posts['Picture']  ?>" class="db"
                                    alt="Photo of a dimly lit room with a computer interface terminal.">
                            </div>
                            <div class="w-100 w-60-ns pl3-ns ">
                                <h1 class="f3 fw1 baskerville mt0 lh-title"> <?php echo $posts['Title']  ?></h1>
                                <p class="f6 f5-l lh-copy">
                                    <i style='opacity:.8'> <?php echo $posts['Descrip'] ?></i>
                                </p>
                                <span class="inf flex flex-row" style='opacity:.8; color:var(--yellow);'>

                                    <a href="profile.php?user_id=<?php echo $user['id'] ?>" class="f6 lh-copy mv0"
                                        style='color:var(--yellow)'> <i class="fa fa-user"></i> &nbsp By
                                        <?php echo $posts['Authur'] ?>
                                    </a>
                                    &nbsp&nbsp&nbsp
                                    <p class="f6 lh-copy mv0"> <i class="fa fa-calendar"></i>
                                        &nbsp<?php echo date('F j, Y', strtotime($posts['DateReg'])) ?></p>
                                </span>
                            </div>

                        </div>
                    </article>



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