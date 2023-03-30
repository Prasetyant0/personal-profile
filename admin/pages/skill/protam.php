<?php
session_start();
require_once "../../../config/config.php";
require "../../../config/function.php";

if (isset($_POST['submit'])) {
    // ambil data dari form
    $skill = $_POST['skill'];
    $persen = $_POST['persen'];
    $foto = $_FILES['foto'];

    $nama_foto = uploadFoto($foto);

    $query = "INSERT INTO skill (skill, persen, foto) VALUES ('$skill', '$persen', '$nama_foto')";
    mysqli_query($conn, $query);

    // tampilkan pesan berhasil tambah data
    $_SESSION['editber'] = 'Tambah Data Berhasil';
    echo "<script>
    document.location.href='skill.php';
    </script>";
}
?>
