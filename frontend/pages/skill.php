<section class="ftco-section bg-light" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Skills</span>
                <h2 class="mb-4">My Skills</h2>
            </div>
        </div>
        <div class="row progress-circle mb-5">
            <?php
            $query = "SELECT * FROM skill";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_assoc($result)) :
            ?>
                <div class="col-lg-4 mb-4">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h2 class="h5 font-weight-bold text-center mb-4"><?php echo $data['skill'];  ?></h2>
                        <img src="../image/<?= $data['foto']; ?>" width="50" height="50" style="position:absolute; left:300px; bottom:175px;">
                        <div class="progress mx-auto" data-value='<?= $data['persen']; ?>'>
                            <span class="progress-left">
                                <span class="progress-bar border-primary"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar border-primary"></span>
                            </span>
                            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <!-- <img src="../image/<?= $data['foto']; ?>" class="position-absolute" style="width: 70px; height: 100px; bottom:60px;"> -->
                                <div class="h2 font-weight-bold"><?php echo $data['persen'];  ?><sup class="small">%</sup></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile  ?>
            <!-- END -->
        </div>
    </div>
</section>
