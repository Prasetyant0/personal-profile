<?php
include "../../kepala.php";
require_once "../../../config/config.php";

?>

<div class="content-wrapper">
    <div class="container">

        <h1>Halaman Detail</h1>
        <a href="pesan.php" class="btn btn-success" style="position: absolute; top:120px; right:100px;">Keluar</a>
        <div class="contact-info">
            <?php
            $id_pesan = $_GET['id_pesan'];

            $sql = "SELECT * FROM pesan WHERE id_pesan = '$id_pesan' ";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            ?>
            <div>
                <label>Nama:</label>
                <p><?= $data['name']; ?></p>
                <div>
                    <label>Email:</label>
                    <p><?= $data['email']; ?></p>
                </div>
                <div>
                    <label>Subject:</label>
                    <p><?= $data['subject']; ?></p>
                </div>
                <div>
                    <label>Pesan:</label>
                    <p><?= $data['message']; ?></p>
                </div>

            </div>
        </div>
    </div>

    <?php
    include "../../includes/footer.php";
    ?>
