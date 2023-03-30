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
                <th>Nama Panggilan</th>
                <th>Profesi</th>
                <th>Foto</th>
                <th>Link Drive</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM home";
            $result = mysqli_query($conn, $sql);
            $i = 1;
            foreach ($result as $data) :
            ?>
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['nama'];  ?></td>
                <td><?php echo $data['namapang'];  ?></td>
                <td><?php echo $data['profesi'];  ?></td>
                <td><img style="border-radius: 0;" src='../../../image/<?php echo $data['foto'];  ?>' width='100px' height='100px'></td>
                <td style="max-width: 100px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;"><?php echo $data['drive'];  ?></td>
                <td>
                    <a href='edit.php?id_home=<?php echo $data['id_home']; ?>' class=" btn btn-success"></i>Edit</a>
                </td>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?php
include "../../includes/footer.php";
?>
