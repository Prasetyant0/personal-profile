<section class="ftco-section bg-light" id="blog-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-0">Our Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php
            $query = "SELECT * FROM blog";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) :
            ?>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog/detailblog.php?id_blog=<?= $data['id_blog']; ?>" class="block-20" style="background-image: url('../image/<?= $data['foto']; ?>');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2"><?php echo $data['tanggal_post'];  ?></span>
                                    <!-- <a href="#" class="mr-2">Admin</a> -->
                                </p>
                            </div>
                            <h3 class="heading"><a href="blog/detailblog.php?id_blog=<?= $data['id_blog']; ?>"><?php echo $data['blog'];  ?></a></h3>
                            <p class="text-justify"><?php echo $data['sub'];  ?></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">July 03, 2020</span>
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">July 03, 2020</span>
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div> -->
            <?php endforeach  ?>
        </div>
    </div>
</section>
