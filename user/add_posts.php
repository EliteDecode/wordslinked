<?php

session_start();

$ad = $_SESSION['users'];
if (!isset($_SESSION['users'])) {
    header('location:login.php');
  }
include ('../includes/db.php');


//select all topics
$response = selectOne('users', ['Email' => $ad]);

$username = $response['Username'];



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
:root {
    --yellow: #333d51;
    --yellow: #d3ac2b;
    --white: #f4f3ea;
}

label {
    font-weight: 600;
}

.btn-linked-alt {
    background-color: var(--white);
    border: 1px solid var(--yellow);
    color: var(--yellow) !important;
    font-weight: 600;

}

.btn-linked-alt:hover,
.btn-linked-alt:focus,
.btn-styled:hover,
.btn-styled:focus {
    background-color: var(--yellow);
    border: 1px solid var(--yellow);
    color: var(--white) !important;
}

.form-control:focus {
    border: 1px solid var(--yellow);
    outline: 1px solid var(--yellow);
}



.form-group {
    margin-top: 1%;
    margin-bottom: 2%;
}

.invalid-feedback {
    position: absolute;
}

.wrap {
    overflow: hidden;
    height: 820px;
}

@media (min-width: 0px) and (max-width: 969px) {
    .wrap {
        overflow: hidden;
        height: 820px;
    }

    .form-group {
        margin-top: 4%;
        margin-bottom: 8%;
    }

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
                <div class="container pt5 ">
                    <h6>Add Posts</h6>
                    <div id="msg"></div>
                    <form id='post_form' enctype="multipart/form-data" onsubmit="return false">

                        <div class="form-group">
                            <label for="topic">Title</label>
                            <input type="text" class="form-control" placeholder="Title of Post" id='title' name='title'>
                            <div class="invalid-feedback error-title">
                                Please add a Title
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="topic">Genre</label>
                            <select name="topic_id" id="topic" class='form-control' style='font-weight:bold'>
                                <option value=""></option>
                                <?php $topics = selectAll('topic')?>
                                <?php 
                                    
                                    
                                    foreach ($topics as $topic) : ?>
                                <option value="<?php echo $topic['id'] ?>" style='font-weight:bold'>
                                    <?php echo $topic['Topic'] ?></option>
                                <?php endforeach ; ?>
                            </select>
                            <div class="invalid-feedback error-topic">
                                Please Select a Topic
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" placeholder="Enter email " name='image' id='image'>
                            <div class="invalid-feedback error-image">
                                Please add an Image
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="validationServer02">Body</label>
                            <textarea name="description" cols="30" rows="5" class="form-control"
                                placeholder=" Your write up goes here..." id='description'></textarea>
                            <div class="invalid-feedback error-description">
                                Please add your write up
                            </div>
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Authur of Post" id='authur'
                                name='authur' value="<?php echo $username ?>" hidden>
                            <div class="invalid-feedback error-authur">
                                Please add an Authur
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="publish">Publish Post</label>
                            <select name="publish" id="publish" class='form-control' style='font-weight:bold'>
                                <option value=""></option>
                                <option value="yes">Yes, Do publish </option>
                                <option value="no">No, Later</option>
                            </select>
                            <div class="invalid-feedback error-publish">
                                Please choose if you want your post published
                            </div>

                        </div>


                        <button class="btn btn-linked-alt" type="submit" onclick="add_post()"> <i id="hide-fa"
                                class="fa  fa-spinner fa-spin"></i> &nbsp ADD &nbsp</button>

                    </form>

                </div>
            </div>
        </div>
    </div>





    <?php  include('footer.php')?>

    <script>
    $("#hide-fa").hide();


    function add_post() {
        var topic = $("#topic").val();
        var title = $("#title").val();
        var image = $("#image").val();
        var authur = $("#authur").val();
        var publish = $("#publish").val();
        var description = $("#description").val();



        if (topic == "") {
            $("#topic").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-topic').show();

        } else {
            $("#topic").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-topic').hide();
        }


        if (title == "") {
            $("#title").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-title').show();

        } else {
            $("#title").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-title').hide();

        }

        if (image == "") {
            $("#image").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-image').show();

        } else {
            $("#image").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-image').hide();

        }

        if (authur == "") {
            $("#authur").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-authur').show();

        } else {
            $("#authur").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-authur').hide();

        }

        if (publish == "") {
            $("#publish").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-publish').show();

        } else {
            $("#publish").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-publish').hide();

        }



        if (description == "") {
            $("#description").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-description').show();
        } else {
            $("#description").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-description').hide();
        }



        if (topic != "" && description != "" && title != "" && image != "" && authur != "" && publish != "") {

            fetch('../ajax_controls/admin_add_post_ajax.php', {
                    method: 'POST',
                    body: new FormData(document.getElementById('post_form'))
                })
                .then(function(response) {
                    return response.text();
                })
                .then(function(text) {

                    $('#msg').html(text);
                })

        }
    }
    </script>
</body>

</html>