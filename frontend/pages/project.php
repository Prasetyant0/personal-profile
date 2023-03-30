<section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Accomplishments</span>
                <h2 class="mb-4">Our Projects</h2>
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            $query = "SELECT * FROM portfolio";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) :
            ?>
                <div class="card" style="width: 30rem; ">
                    <img src="../image/<?= $data['foto'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['project'];  ?></h5>
                        <p class="card-text text-justify"><?php echo $data['deskripsi'];  ?></p>
                    </div>
                </div>
            <?php endforeach  ?>
        </div>
    </div>
</section>
