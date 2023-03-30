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
                <th>Blog</th>
                <th>Sub</th>
                <th>Foto</th>
                <th>Tanggal Post</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM blog";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['blog'];  ?></td>
                <td style="max-width: 100px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; "><?php echo $data['sub'];  ?></td>
                <td><img style="border-radius: 0;" src='../../../image/<?php echo $data['foto'];  ?>' width='100px' height='100px'></td>
                <td><?php echo $data['tanggal_post'];  ?></td>
                <td>
                    <a href='detblog.php?id_blog=<?php echo $data['id_blog']; ?>' class="btn btn-primary">Detail</a>
                    <a href='edit.php?id_blog=<?php echo $data['id_blog']; ?>' class="btn btn-success">Edit</a>
                    <a href='hapus.php?id_blog=<?php echo $data['id_blog']; ?>' class="btn btn-danger" id="hapusbutton">Hapus</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>

</div>

<?php
include "../../includes/footer.php";
?>
