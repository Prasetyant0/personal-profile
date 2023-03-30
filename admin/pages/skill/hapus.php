<?php
require_once "../../../config/config.php"; // menghubungkan ke database

$id_skill = $_GET['id_skill']; // mengambil nilai id yang dikirimkan melalui URL

// mengambil nama file foto berdasarkan id
$query = "SELECT foto FROM skill WHERE id_skill = '$id_skill'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$foto = $data['foto'];

// menghapus data dari tabel
$query_delete = "DELETE FROM skill WHERE id_skill = '$id_skill'";
$result_delete = mysqli_query($conn, $query_delete);

// menghapus file foto terkait
if ($result_delete && file_exists("../../../image/" . $foto)) {
    unlink("../../../image/" . $foto);
    echo "<script>
        document.location.href='skill.php';
  </script>";
} else {
    echo "Data gagal dihapus";
}

mysqli_close($conn); // menutup koneksi ke database


?>
