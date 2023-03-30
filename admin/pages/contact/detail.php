<?php
include "../../kepala.php";
require_once "../../../config/config.php";

?>

<div class="content-wrapper">
    <div class="container">

        <h1>Halaman Detail</h1>
        <div class="contact-info">
            <?php
            $sql = "SELECT * FROM contact";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            ?>
            <div>
                <label>Address:</label>
                <p><?= $data['address']; ?></p>
                <div>
                    <label>Phone:</label>
                    <p><?= $data['phone']; ?></p>
                </div>
                <div>
                    <label>Email:</label>
                    <p><?= $data['email']; ?></p>
                </div>
                <div>
                    <label>Instagram:</label>
                    <p><?= $data['instagram']; ?></p>
                </div>
                <div>
                    <label>Maps:</label>
                    <p><?= $data['iframe']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "../../includes/footer.php";
    ?>
