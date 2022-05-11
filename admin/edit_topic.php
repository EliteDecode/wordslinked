<?php

session_start();

$ad = $_SESSION['admin'];
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
  }
include ('../includes/db.php');





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
    border: 2px solid var(--yellow);
    outline: 2px solid var(--yellow);
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

            <?php if (isset($_GET['id'])) {
               $id = $_GET['id'];

               $result = selectOne('topic', ['id' => $id]);

               $topic = $result['Topic'];
               $description = $result['Description'];
               $id = $result['id'];
            }?>
            <div class="col-md-10 col-lg-10 col-xl-10" style='padding:0% 5%'>
                <div class="container pt5">
                    <div id="msg" class="alert alert-success valid-feedback"></div>
                    <form class=''>
                        <div class="form-row ">
                            <div class="col-md-12 mb-3">
                                <label for="topic">Name</label>
                                <input type="text" class="form-control" placeholder="Name of topic" id='topic'
                                    value='<?php echo $topic ?>'>
                                <div class="invalid-feedback error-topic">
                                    Please add a topic
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationServer02">Description</label>
                                <textarea name="" cols="30" rows="5" class="form-control" placeholder="Description"
                                    id='description' autocomplete="on" autocapitalize="on"
                                    autocorrect='on'><?php echo $description ?></textarea>
                                <div class="invalid-feedback error-description">
                                    Please add your description
                                </div>
                            </div>

                        </div>

                    </form>
                    <button class="btn btn-linked-alt" type="submit" onclick="add_topic()"> <i id="hide-fa"
                            class="fa  fa-spinner fa-spin"></i> &nbsp ADD &nbsp</button>
                    <input type="text" id="id" value='<?php echo $id ?>' hidden>
                </div>
            </div>
        </div>
    </div>





    <?php  include('footer.php')?>

    <script>
    $("#hide-fa").hide();

    function add_topic() {


        var topic = $("#topic").val();
        var description = $("#description").val();
        var id = $('#id').val();


        if (topic == "") {
            $("#topic").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-topic').show();

        } else {
            $("#topic").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-topic').hide();

        }

        if (description == "") {
            $("#description").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-description').show();
        } else {
            $("#description").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-description').hide();
        }



        if (topic != "" && description != "") {

            $("#hide-fa").show();

            $.ajax({
                url: "../ajax_controls/admin_edit_topic_ajax.php",
                method: "post",
                data: {
                    topic: topic,
                    description: description,
                    id: id

                },
                dataType: "text",
                success: function(data) {
                    $("#msg").html(data);
                }
            });

        }



    }
    </script>
</body>

</html>