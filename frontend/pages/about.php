<?php
$query = "SELECT * FROM about";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="color:#999999; background:#F8F9FA;">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <img src="../image/<?= $data['foto']; ?>" class="img" style="position:relative; margin-top:103px;">
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                <div class="py-md-5" style="position: relative; right:100px;">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">My Intro</span>
                            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me</h2>
                            <p class="text-justify " style="position: relative;"><?php echo $data['about'];  ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
