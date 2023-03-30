<?php
require_once "../../../config/config.php";
require "../../../config/function.php";

// ambil data dari form
$achivement = $_POST['achivement'];
$foto = $_FILES['foto'];

$nama_foto = uploadFoto($foto);

$query = "INSERT INTO achivement (achivement, foto) VALUES ('$achivement', '$nama_foto')";
mysqli_query($conn, $query);

// tampilkan pesan berhasil tambah data
session_start();
$_SESSION['editber'] = "Tambah Data Berhasil";
echo "<script>
                document.location.href='achivement.php';
            </script>";
?>
