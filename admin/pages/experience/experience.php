<?php
include "../../kepala.php";
require_once "../../../config/config.php";

?>

<div class="content-wrapper">
    <a href="tambah.php" class="btn btn-primary" style="bottom:20px; position:relative;">Tambah Data</a>
    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th>No</th>
                <th>Experience</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM experience";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['experience'];  ?></td>
                <td style="max-width: 300px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; "><?php echo $data['deskripsi'];  ?></td>
                <td>
                    <a href='edit.php?id_experience=<?php echo $data['id_experience']; ?>' class="btn btn-success">Edit</a>
                    <a href='hapus.php?id_experience=<?php echo $data['id_experience']; ?>' class="btn btn-danger" id="hapusbutton">Hapus</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>


<?php
include "../../includes/footer.php";
?>
