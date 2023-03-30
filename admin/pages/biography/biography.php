<?php
include "../../kepala.php";
require_once "../../../config/config.php";

?>

<div class="content-wrapper">
    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Phone</th>
                <th>Title</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM biography";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['nama'];  ?></td>
                <td><?php echo $data['tanggal_lahir'];  ?></td>
                <td><?php echo $data['phone'];  ?></td>
                <td><?php echo $data['title'];  ?></td>
                <td><img style="position:relative; right:10px;" src="../../../image/<?php echo $data['foto'];  ?>"></td>
                <td>
                    <a href='detail.php?id_bio=<?php echo $data['id_bio']; ?>' class="btn btn-primary">Detail</a>
                    <a href='edit.php?id_bio=<?php echo $data['id_bio']; ?>' class="btn btn-success">Edit</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?php
include "../../includes/footer.php";
?>
