<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_contact'])) {
    $id_contact = $_SESSION['edit_id_contact'];
    unset($_SESSION['edit_id_contact']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_contact = $_GET['id_contact'];
}

$sql = mysqli_query($conn, "SELECT * FROM contact WHERE id_contact = '$id_contact' ");
$data = mysqli_fetch_assoc($sql);

?>


<div class="content-wrapper">
    <div class="container my-1">
        <form action="prodit.php" method="post" enctype="multipart/form-data">
            <input type="text" name="id_contact" id="id_contact" hidden value="<?= $data['id_contact'] ?>">
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" class="form-control"  autofocus><?php echo $data['address'];  ?></textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control"  autocomplete="off" value="<?= $data['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control"  autocomplete="off" value="<?= $data['phone']; ?>">
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" name="instagram" class="form-control"  autocomplete="off" value="<?= $data['instagram']; ?>">
            </div>
            <div class="mb-3">
                <label for="iframe" class="form-label">Maps</label>
                <textarea name="iframe" id="iframe" class="form-control"><?= $data['iframe']; ?></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php
include "../../includes/footer.php";
?>
