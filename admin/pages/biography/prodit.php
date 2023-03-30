<?php
session_start();
require_once "../../../config/config.php";

$id_bio = $_POST['id_bio'];

// Pengecekan inputan edit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $foto = $_FILES['foto']['name'];
    $old_foto = $_POST['old_foto'];

    if (!empty($_FILES['foto']['name'])) {
        $foto_name = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_ext = strtolower(pathinfo($foto_name, PATHINFO_EXTENSION));
        $foto_newname = uniqid() . '.' . $foto_ext;
        move_uploaded_file($foto_tmp, '../../../image/' . $foto_newname);
        unlink('../../../image/' . $old_foto);
    } else {
        $foto_newname = $old_foto;
    }

    if (!empty($nama) && !empty($tanggal_lahir) && !empty($email)
        && !empty($address)
        && !empty($phone)
        && !empty($title)
        && !empty($deskripsi)
    ) {
        $query = "UPDATE biography SET nama = '$nama', email = '$email', address = '$address', phone = '$phone', title = '$title', deskripsi = '$deskripsi', tanggal_lahir = '$tanggal_lahir', foto = '$foto_newname' WHERE id_bio = '$id_bio' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='biography.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='biography.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_bio'] = $id_bio;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}
?>
