<?php
require_once "../../../config/config.php"; // menghubungkan ke database

$id_portfolio = $_GET['id_portfolio']; // mengambil nilai id yang dikirimkan melalui URL

// mengambil nama file foto berdasarkan id
$query = "SELECT foto FROM portfolio WHERE id_portfolio = '$id_portfolio'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$foto = $data['foto'];

// menghapus data dari tabel
$query_delete = "DELETE FROM portfolio WHERE id_portfolio = '$id_portfolio'";
$result_delete = mysqli_query($conn, $query_delete);

// menghapus file foto terkait
if ($result_delete && file_exists("../../../image/" . $foto)) {
    unlink("../../../image/" . $foto);
    echo "<script>
        document.location.href='project.php';
  </script>";
} else {
    echo "Data gagal dihapus";
}

mysqli_close($conn); // menutup koneksi ke database


?>
