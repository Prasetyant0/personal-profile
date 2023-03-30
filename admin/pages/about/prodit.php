<?php
session_start();

require_once "../../../config/config.php";

$id_about = $_POST ['id_about'];

if (isset($_POST['submit'])) {
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
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

    if (!empty($about) && !empty($nama) && !empty($pekerjaan)) {
        $query = "UPDATE about SET about = '$about', nama = '$nama', pekerjaan = '$pekerjaan', foto = '$foto_newname' WHERE id_about = '$id_about' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='about.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='about.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_about'] = $id_about;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}
?>
