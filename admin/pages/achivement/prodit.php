<?php
session_start();
require_once "../../../config/config.php";

$id_achivement = $_POST ['id_achivement'];

if (isset($_POST['submit'])) {
    $achivement = $_POST['achivement'];
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

    if (!empty($achivement)) {
        $query = "UPDATE achivement SET achivement = '$achivement', foto = '$foto_newname' WHERE id_achivement = '$id_achivement' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='achivement.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='achivement.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_achivement'] = $id_achivement;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}

?>
