<?php
session_start();
require_once "../../../config/config.php";

$id_blog = $_POST['id_blog'];

// Pengecekan edit
if (isset($_POST['submit'])) {
    $blog = $_POST['blog'];
    $sub = $_POST['sub'];
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $tanggal_post = $_POST['tanggal_post'];
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

    if (!empty($blog) && !empty($sub) && !empty($deskripsi)
        && !empty($tanggal_post)
    ) {
        $query = "UPDATE blog SET blog = '$blog', sub = '$sub', deskripsi = '$deskripsi', tanggal_post = '$tanggal_post', foto = '$foto_newname' WHERE id_blog = '$id_blog' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='blog.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='blog.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_blog'] = $id_blog;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}
?>
