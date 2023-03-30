<?php
include "../../kepala.php";
require_once "../../../config/config.php";

?>

<div class="content-wrapper">
    <div class="container">

        <h1>Halaman Detail</h1>
        <a href="about.php" class="btn btn-success" style="position: absolute; top:120px; right:100px;">Keluar</a>
        <div class="contact-info">
            <?php
            $sql = "SELECT * FROM about";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            ?>
            <div>
                <label>Foto</label>
                <img style="width:100px; height:100px" src="../../../image/<?= $data['foto']; ?>" alt="<?= $data['nama']; ?>">
            </div>
            <div>
                <label>About:</label>
                <p class="text-justify" style="margin-right:20px;"><?= $data['about']; ?></p>
                <div>
                    <label>Nama:</label>
                    <p><?= $data['nama']; ?></p>
                </div>
                <div>
                    <label>Pekerjaan:</label>
                    <p><?= $data['pekerjaan']; ?></p>
                </div>

            </div>
        </div>
    </div>

    <?php
    include "../../includes/footer.php";
    ?>
