<?php
include "../../config/config.php";

$query = "SELECT * FROM blog";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $data['blog'];  ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <?php
            $query = "SELECT namapang FROM home";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            $nama = $data['namapang'];
            ?>
            <a class="navbar-brand" href="index.php"><?php echo $data['namapang'];  ?><span>.</span></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="../index.php#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="../index.php#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="../index.php#achivement-section" class="nav-link"><span>Achivement</span></a></li>
                    <li class="nav-item"><a href="../index.php#skills-section" class="nav-link"><span>Skills</span></a></li>
                    <li class="nav-item"><a href="../index.php#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="../index.php#blog-section" class="nav-link"><span>Blog</span></a></li>
                    <li class="nav-item"><a href="../index.php#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    $id_blog = $_GET['id_blog'];
    $query = "SELECT * FROM blog WHERE id_blog = '$id_blog' ";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../../image/<?= $data['foto']; ?>');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="../index.php#home-section" style="color:white;">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="seemore.php" style="color:white;">Blog <i class="fa fa-chevron-right"></i></a></span> <span style="color:white;">Blog Single <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread" style="color:white;"><?php echo $data['blog'];  ?></h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section position-relative">
        <div class="container" style="position: relative; bottom:74px;">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p class="text-justify"><?php echo $data['deskripsi'];  ?></p>

                    <div class="about-author d-flex p-4 bg-light">
                        <?php
                        $query = "SELECT * FROM biography";
                        $result = mysqli_query($conn, $query);
                        $data = mysqli_fetch_assoc($result);
                        ?>
                        <div class="bio mr-5" style="position: relative; top:13px;">
                            <img src="../../image/<?= $data['foto']; ?>" alt="Image placeholder" width="100" height="100" class="img-fluid mb-4">
                        </div>
                        <div class="desc" style="position: relative; right:30px; top:10px;">
                            <p style="position:relative; top:25px;">Author :</p>
                            <h3><?php echo $data['nama'];  ?></h3>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->

    <!-- Include Footer -->
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>

    <script src="../js/main.js"></script>

</body>

</html>
