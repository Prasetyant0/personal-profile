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
                <th>Hobby</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM hobby";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['hobby'];  ?></td>
                <td style="max-width: 300px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; "><?php echo $data['deskripsi'];  ?></td>
                <td><img style="border-radius: 0;" src='../../../image/<?php echo $data['foto'];  ?>' width='100px' height='100px'></td>
                <td>
                    <a href='edit.php?id_hobby=<?php echo $data['id_hobby']; ?>' class="btn btn-success">Edit</a>
                    <a href='hapus.php?id_hobby=<?php echo $data['id_hobby']; ?>' class="btn btn-danger" id="hapusbutton">Hapus</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?php
include "../../includes/footer.php";
?>
