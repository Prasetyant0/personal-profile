<section class="ftco-section testimony-section bg-primary">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Testimonies</span>
                <h2 class="mb-4">What client says about?</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <?php
                    $query = "SELECT * FROM testimonial ";
                    $result = mysqli_query($conn, $query);
                    foreach ($result as $data) :
                    ?>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <span class="fa fa-quote-left"></span>
                                    <p class="mb-4 pl-5 text-justify"><?php echo $data['deskripsi'];  ?></p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(../image/<?= $data['foto'] ?>)"></div>
                                        <div class="pl-3">
                                            <p class="name"><?php echo $data['nama'];  ?></p>
                                            <span class="position"><?php echo $data['title'];  ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach  ?>
                </div>
            </div>
        </div>
    </div>
</section>
