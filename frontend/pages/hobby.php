<section class="ftco-section ftco-project" id="hobby-section" style="color:#999999; background:#F8F9FA">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Favorite</span>
                <h2 class="mb-4">My Hobby</h2>
                <p></p>
            </div>
        </div>
        <div class="row" style="justify-content: center; position:relative; right:20px">
            <?php
            $query = "SELECT * FROM hobby";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) :
            ?>
                <div class="card" style="width: 24rem; position:relative; margin-left:50px;">
                    <img src="../image/<?= $data['foto']; ?>" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['hobby'];  ?></h5>
                        <p class="card-text text-justify"><?php echo $data['deskripsi'];  ?></p>
                    </div>
                </div>
            <?php endforeach  ?>
        </div>
    </div>
</section>
