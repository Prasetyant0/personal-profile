<?php

include "../../kepala.php";
require_once "../../../config/config.php";


// Mengambil data dari database
$query = "SELECT * FROM about";
$result = mysqli_query($conn, $query);
?>

<div class="content-wrapper">
    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th>No</th>
                <th>About</th>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //menampilkan data dalam bentuk tabel
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $i++ . "</td>";
                echo "<td style='max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; ' >" . $row['about'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['pekerjaan'] . "</td>";
                echo "<td><img style='border-radius: 0;'' src='../../../image/" . $row['foto'] . "' width='100px' height='100px'></td>";
                echo "<td>
                <a href='edit.php?id_about=" . $row['id_about'] . "' class='btn-edit btn btn-success '>Edit</a>
                <a href='detail.php?id_about=" . $row['id_about'] . "' class='btn-detail btn btn-primary'>Detail</a>
              </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</div>

<?php
include "../../includes/footer.php";
?>
