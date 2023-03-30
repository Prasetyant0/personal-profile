<?php
require_once "../../../config/config.php"; // menghubungkan ke database

$id_pesan = $_GET['id_pesan']; // mengambil nilai id yang dikirimkan melalui URL

// menghapus data dari tabel
$query_delete = "DELETE FROM pesan WHERE id_pesan = '$id_pesan'";
$result_delete = mysqli_query($conn, $query_delete);

// menghapus file foto terkait
if ($result_delete) {
    echo "<script> 
        document.location.href='pesan.php';
  </script>";
} else {
    echo "Data gagal dihapus";
}

mysqli_close($conn); // menutup koneksi ke database


?>
