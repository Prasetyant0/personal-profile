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
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pesan";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['name'];  ?></td>
                <td><?php echo $data['email'];  ?></td>
                <td style="max-width: 300px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; "><?php echo $data['message'];  ?></td>
                <td>
                    <a href="detail.php?id_pesan=<?php echo $data['id_pesan']; ?>" class="btn btn-primary">Detail</a>
                    <a href="hapus.php?id_pesan=<?php echo $data['id_pesan']; ?>" class="btn btn-danger" id="hapusbutton">Hapus</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?php
include "../../includes/footer.php";
?>
