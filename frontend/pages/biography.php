<?php
$query = "SELECT * FROM biography";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <!-- <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(../image/<?= $data['foto']; ?>);" style="margin-top:50px;"> -->
                    <img src="../image/<?= $data['foto']; ?>" class="img" style="position:relative; margin-top:110px; height:350px; ">
                    <!-- </div> -->
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                <div class="py-md-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Biography</h2>
                            <ul class="about-info mt-0 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span><?php echo $data['nama'];  ?></span></li>
                                <li class="d-flex"><span>Title:</span> <span><?php echo $data['title'];  ?></span></li>
                                <li class="d-flex"><span>Date of birth:</span> <span><?php echo $data['tanggal_lahir'];  ?></span></li>
                                <li class="d-flex"><span>Address:</span> <span><?php echo $data['address'];  ?></span></li>
                                <li class="d-flex"><span>Email:</span> <span><?php echo $data['email'];  ?></span></li>
                                <li class="d-flex"><span>Phone: </span> <span>+<?= $data['phone']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-justify" style="position:relative ; bottom:50px;"><?php echo $data['deskripsi'];  ?></p>
        </div>
    </div>
</section>
