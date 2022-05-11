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


    <style>
    /* About Me (Left Sidebar) */




    @media (min-width: 0px) and (max-width: 767px) {
        .db {
            height: 100%;
            width: 100%;

        }
    }

    .menu-link li,
    .social-icon li {
        list-style-type: none;
    }
    </style>
</head>
<?php  include ('includes/admin_nav.php');
       include('includes/stylingIndex.php')?>

<body>

    <!-- Preloader End -->
    <!-- section posts -->

    <section class="post">
        <div class="container">

            <div class="row">
                <!-- About Me (Left Sidebar) Start -->
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                    <div class="about-fixed shadow pb-5">
                        <?php
                        
                        if (isset($_GET['user_id'])) {
                            $id = $_GET['user_id'];
                            $users = selectAll('users', ['id' => $id]);
                            foreach($users as $user){
                                $picture = $user['Picture'];
                                $username = $user['Username'];
                                $email = $user['Email'];
                                echo "<div class='my-pic'>
                                <img src='user/images/$picture' alt=''
                                    style='height:250px; width:100%'>
    
                            </div>
                            <div class='my-detail container text-center'>
    
                                <div class='white-spacing'>
                                    <h1>$username</h1>
                                    <h6 style='margin-top:-15px'>@$email</h6>
                                    <span style='font-weight:bold'>Poet</span> <br>
                                    <span>450 Published Posts</span>
                                </div>";
                            }
                          
                        }
                       
                      ?>

                    </div>
                </div>
            </div>
            <!-- About Me (Left Sidebar) End -->
            <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-xs-12">

                <h3 class="baskerville fw1 ph3 ph0-l">Authured Po<span class="link">sts </h3>
                <?php 

                    if (isset($_GET['user_id'])) {
                       $id = $_GET['user_id'];
                       $result = selectOne('users', ['id' => $id]);
                       $username = $result['Username'];
                        $post = selectAll('posts', ['Publish' => 'yes', 'Authur' => $username]);
                       foreach($post as $posts){

                        $description = $posts['Description'];
                        $id =  $posts['id'];
                        $picture = $posts['Picture'];
                        $title =  $posts['Title'];
                        $authur =  $posts['Authur'] ;
                        $date = date('F j, Y', strtotime( $posts['DateReg']));
                           echo "  <article class='bt bb b--black-10'>
                           <a class='db pv4 ph3 ph0-l no-underline black dim'
                               href='single_post.php?post_id=$id '>
                               <div class='row'>
                                   <div
                                       class='pr3-ns mb4 mb0-ns w-100 w-40-ns col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12'>
                                       <img src='images/post_images/$picture  ' class='db'
                                           alt='Photo of a dimly lit room with a computer interface terminal.'
                                           style='width:100%; height:260px'>
                                   </div>
                                   <div class='w-100 w-60-ns pl3-ns col-md-12 col-lg-6 col-xl-6 col-sm-12 col-xs-12'>
                                       <h1 class='f3 fw1 baskerville mt0 lh-title'>
                                           $title  </h1>
                                       <p class='f6 f5-l lh-copy' style='line-height:1.7rem'>
                                           <i style='opacity:.8'>
                                                substr($description, 0, 255) ...</i>
                                       </p>
                                       <span class='inf flex flex-row' style='opacity:.8; color:var(--yellow);'>
                                           <p class='f6 lh-copy mv0'> <i class='fa fa-user'></i> &nbsp By
                                               $authur
                                           </p>
                                           &nbsp&nbsp&nbsp
                                           <p class='f6 lh-copy mv0'> <i class='fa fa-calendar'></i>
                                               &nbsp $date </p>
                                       </span>
                                   </div>
                               </div>
                           </a>
                       </article>";
                       }
                    }
                    
                  
 
                 ?>



            </div>
        </div>



        </div>

    </section>
    <!--end- -->











    <?php 
      include('./includes/footer.php')
    ?>
</body>

</html>