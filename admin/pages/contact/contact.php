<?php
include "../../kepala.php";
require_once "../../../config/config.php";
?>

<div class="content-wrapper">
    <!-- <a href="tambah.php" class="btn btn-primary" style="bottom:20px; position:relative;">Tambah Data</a> -->
    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th>No</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Instagram</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM contact";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td style="max-width: 120px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; "><?php echo $data['address'];  ?></td>
                <td><?php echo $data['phone'];  ?></td>
                <td><?php echo $data['email'];  ?></td>
                <td><?php echo $data['instagram'];  ?></td>
                <td>
                    <a href='detail.php?id_contact=<?php echo $data['id_contact']; ?>' class="btn btn-primary">Detail</a>
                    <a href='edit.php?id_contact=<?php echo $data['id_contact']; ?>' class="btn btn-success">Edit</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?php
include "../../includes/footer.php";
?>
