<?php
session_start();
require_once "../../../config/config.php";

$id_contact = $_POST['id_contact'];

// Pengecekan edit
if (isset($_POST['submit'])) {
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
    $iframe = mysqli_real_escape_string($conn, $_POST['iframe']);

    if (!empty($address) && !empty($phone) && !empty($email) && !empty($instagram) && !empty($iframe)) {
        $query = "UPDATE contact SET address = '$address', phone = '$phone', email = '$email', instagram = '$instagram', iframe = '$iframe' WHERE id_contact = '$id_contact' ";
        $result = mysqli_query($conn, $query);
        $hass = mysqli_affected_rows($conn);

        if ($hass > 0
        ) {
            $_SESSION['editber'] = "Edit Data Berhasil";
            echo "<script>
                    document.location.href='contact.php';
                </script>";
        } else {
            $_SESSION['editber'] = "Tidak ada data yang diubah";
            echo "<script>
                    document.location.href='contact.php';
                </script>";
        }
    } else {
        $_SESSION['editgal'] = "Inputan tidak boleh kosong!";
        $_SESSION['edit_id_contact'] = $id_contact;
        echo "<script>
                document.location.href='edit.php';
            </script>";
    }
}
