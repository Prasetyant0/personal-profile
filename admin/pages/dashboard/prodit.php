<?php
session_start();
require_once "../../../config/config.php";

$id_home = $_POST['id_home'];

// Pengecekan edit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $namapang = $_POST['namapang'];
    $profesi = $_POST['profesi'];
    $drive = mysqli_real_escape_string($conn, $_POST['drive']);
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

    if (!empty($nama) && !empty($namapang) && !empty($profesi) && !empty($drive)) {
        $query = "UPDATE home SET nama = '$nama', namapang = '$namapang', profesi = '$profesi', foto = '$foto_newname', drive = '$drive' WHERE id_home = '$id_home' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0
        ) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='dashboard.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='dashboard.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_home'] = $id_home;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}
?>
