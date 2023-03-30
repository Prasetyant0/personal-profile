<?php
session_start();
require_once "../../../config/config.php";
$id_education = $_POST['id_education'];

// Pengecekan edit
if (isset($_POST['submit'])) {
    $education = $_POST['education'];
    $deskripsi = $_POST['deskripsi'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $tahun_lulus = $_POST['tahun_lulus'];
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

    if (!empty($education) && !empty($deskripsi) && !empty($tahun_masuk) && !empty($tahun_lulus)) {
        $query = "UPDATE education SET education = '$education', deskripsi = '$deskripsi', tahun_masuk = '$tahun_masuk', tahun_lulus = '$tahun_lulus', foto = '$foto_newname' WHERE id_education = '$id_education' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0
        ) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='education.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='education.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_education'] = $id_education;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}
?>
