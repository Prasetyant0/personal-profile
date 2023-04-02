<?php
include "../../kepala.php";
require_once "../../../config/config.php";
?>

<div class="content-wrapper">
    <div class="container">
        <h1>Halaman Detail</h1>
        <a href="blog.php" class="btn btn-success" style="position: absolute; top:120px; right:100px;">Keluar</a>
        <div class="contact-info">
            <?php
            $id_blog = $_GET['id_blog'];
            $sql = "SELECT * FROM blog WHERE id_blog = '$id_blog' ";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            ?>
            <div>
                <label style="margin-left: 30px;">Foto:</label>
                <img style="width:100px; height:100px; margin-left:50px;" src="../../../image/<?= $data['foto']; ?>" alt="<?= $data['blog']; ?>">
            </div>
            <div>
                <label style="margin-left: 30px;">Title:</label>
                <p class="text-justify" style="margin-right: 50px; margin-left:50px;"><?= $data['blog']; ?></p>
                <div>
                    <label style="margin-left: 30px;">Deskripsi:</label>
                    <p class="text-justify" style="margin-right: 50px; margin-left:50px;"><?= $data['deskripsi']; ?></p>
                </div>
                <div>
                    <label style="margin-left: 30px;">Tanggal:</label>
                    <p class="text-justify" style="margin-right: 50px; margin-left:50px;"><?= $data['tanggal_post']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "../../includes/footer.php";
    ?>
