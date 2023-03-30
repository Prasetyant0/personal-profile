<?php
include "../../kepala.php";
require_once "../../../config/config.php";

?>

<div class="content-wrapper">
    <div class="container">

        <h1>Halaman Detail</h1>
        <div class="contact-info">
            <?php
            $sql = "SELECT * FROM biography";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            ?>
            <div>
                <label>Foto</label>
                <img style="width:100px; height:100px" src="../../../image/<?= $data['foto']; ?>" alt="<?= $data['nama']; ?>">
            </div>
            <div>
                <label>Nama:</label>
                <p><?= $data['nama']; ?></p>
                <div>
                    <label>Email:</label>
                    <p><?= $data['email']; ?></p>
                </div>
                <div>
                    <label>Alamat:</label>
                    <p><?= $data['address']; ?></p>
                </div>
                <div>
                    <label>Telepon:</label>
                    <p><?= $data['phone']; ?></p>
                </div>
                <div>
                    <label>Title:</label>
                    <p><?= $data['title']; ?></p>
                </div>
                <div>
                    <label>Deskripsi:</label>
                    <p style="margin-right: 20px;" class="text-justify"><?= $data['deskripsi']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "../../includes/footer.php";
    ?>
