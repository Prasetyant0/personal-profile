<?php
session_start();
require_once "../../../config/config.php";
require "../../../config/function.php";

if (isset($_POST['submit'])) {
    // ambil data dari form
    $education = $_POST['education'];
    $deskripsi = $_POST['deskripsi'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $foto = $_FILES['foto'];

    $nama_foto = uploadFoto($foto);

    $query = "INSERT INTO education (education, deskripsi, tahun_masuk, tahun_lulus, foto) VALUES ('$education', '$deskripsi', '$tahun_masuk' ,'$tahun_lulus' ,'$nama_foto')";
    mysqli_query($conn, $query);

    // tampilkan pesan berhasil tambah data
    $_SESSION['editber'] = "Tambah Data Berhasil";
    echo "<script>
    document.location.href='education.php';
    </script>";
}
?>
