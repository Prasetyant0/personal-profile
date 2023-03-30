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
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM muka";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['jeneng'];  ?></td>
                <td>
                    <img style="position:relative; right:60px;" src="../../../image/<?php echo $data['mukaku'];  ?>">
                </td>
                <td>
                    <a href='edit.php?id_muka=<?php echo $data['id_muka']; ?>' class="btn btn-success">Edit</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?php
include "../../includes/footer.php";
?>
