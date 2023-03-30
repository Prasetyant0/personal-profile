<?php
session_start();
require_once "../../../config/config.php";

$id_muka = $_POST['id_muka'];

// Pengecekan edit
if (isset($_POST['submit'])) {
    $jeneng = $_POST['jeneng'];
    $foto = $_FILES['mukaku']['name'];
    $old_foto = $_POST['old_mukaku'];

    if (!empty($_FILES['mukaku']['name'])) {
        $foto_name = $_FILES['mukaku']['name'];
        $foto_tmp = $_FILES['mukaku']['tmp_name'];
        $foto_ext = strtolower(pathinfo($foto_name, PATHINFO_EXTENSION));
        $foto_newname = uniqid() . '.' . $foto_ext;
        move_uploaded_file($foto_tmp, '../../../image/' . $foto_newname);
        unlink('../../../image/' . $old_foto);
    } else {
        $foto_newname = $old_foto;
    }

    if (!empty($jeneng)) {
        $query = "UPDATE muka SET jeneng = '$jeneng', mukaku = '$foto_newname' WHERE id_muka = '$id_muka' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0
        ) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='muka.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='muka.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_muka'] = $id_muka;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}
?>
