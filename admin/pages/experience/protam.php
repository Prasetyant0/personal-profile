<?php
session_start();
require_once "../../../config/config.php";
require "../../../config/function.php";

if (isset($_POST['submit'])) {
    // ambil data dari form
    $experience = $_POST['experience'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto'];

    $nama_foto = uploadFoto($foto);

    $query = "INSERT INTO experience (experience, deskripsi, foto) VALUES ('$experience', '$deskripsi', '$nama_foto')";
    mysqli_query($conn, $query);

    // tampilkan pesan berhasil tambah data
    $_SESSION['editber'] = "Tambah Data Berhasil";
    echo "<script>
    document.location.href='experience.php';
    </script>";
}
?>
