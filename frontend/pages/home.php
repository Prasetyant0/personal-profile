<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container-fluid px-md-0">
                <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <?php
                    $query = "SELECT * FROM home";
                    $result = mysqli_query($conn, $query);
                    $data = mysqli_fetch_assoc($result);
                    ?>

                    <div class="one-third order-md-last img" style="background-image:url(../image/<?= $data['foto']; ?>);">
                        <div class="overlay"></div>
                        <div class="overlay-1"></div>
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <h1 class="mb-4 mt-3">Hi, I am <span><?php echo $data['nama'];  ?></span></h1>
                            <h5><span style="position: relative; bottom:15px;"><?php echo $data['profesi'];  ?></span></h5>
                            <p><a href="#contact-section" class="btn btn-primary">Contact Me</a> <a href="<?= $data['drive']; ?>">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
