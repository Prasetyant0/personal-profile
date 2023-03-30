<?php
session_start();
require_once "../../../config/config.php";
require "../../../config/function.php";

if (isset($_POST['submit'])) {
    // ambil data dari form
    $blog = $_POST['blog'];
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $tanggal_post = $_POST['tanggal_post'];
    $foto = $_FILES['foto'];

    $nama_foto = uploadFoto($foto);

    $query = "INSERT INTO blog (blog, deskripsi, tanggal_post, foto) VALUES ('$blog', '$deskripsi', '$tanggal_post', '$nama_foto')";
    mysqli_query($conn, $query);

    // tampilkan pesan berhasil tambah data
    $_SESSION['editber'] = "Tambah Data Berhasil";
    echo "<script>
    document.location.href='blog.php';
    </script>";
}
?>
