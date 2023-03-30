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
                <th>Achivement</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM achivement";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['achivement'];  ?></td>
                <td><img style="border-radius: 0;" src='../../../image/<?php echo $data['foto'];  ?>' width='100px' height='100px'></td>
                <td>
                    <a href='edit.php?id_achivement=<?php echo $data['id_achivement']; ?>' class="btn btn-success">Edit</a>
                    <a href='hapus.php?id_achivement=<?php echo $data['id_achivement']; ?>' class="btn btn-danger" id="hapusbutton">Hapus</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?php
include "../../includes/footer.php";
?>

