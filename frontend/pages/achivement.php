<section class="ftco-section ftco-project" id="achivement-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Accomplishments</span>
                <h2 class="mb-4">Achivement</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            $query = "SELECT * FROM achivement";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) :
            ?>
                <div class="col-md-3">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(../image/<?= $data['foto']; ?>);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#"><?php echo $data['achivement'];  ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach  ?>
        </div>
    </div>
</section>
