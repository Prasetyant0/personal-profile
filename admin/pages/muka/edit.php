<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_muka'])) {
    $id_muka = $_SESSION['edit_id_muka'];
    unset($_SESSION['edit_id_muka']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_muka = $_GET['id_muka'];
}

$query = mysqli_query($conn, "SELECT * FROM muka WHERE id_muka = '$id_muka' ");
$data = mysqli_fetch_assoc($query);

?>
<div class="content-wrapper">
    <div class="container my-1">
        <form action="prodit.php" method="post" enctype="multipart/form-data">
            <input type="text" name="old_mukaku" value="<?= $data['mukaku'] ?>" hidden>
            <input type="text" name="id_muka" id="id_muka" hidden value="<?= $data['id_muka'] ?>">
            <div class="mb-3">
                <label for="jeneng" class="form-label">Nama</label>
                <input type="text" name="jeneng" class="form-control"  autocomplete="off" value="<?= $data['jeneng']; ?>" autofocus>
            </div>
            <div class="mb-3">
                <label for="mukaku" class="form-label">Foto</label>
                <div class="file-upload">
                    <input type="file" name="mukaku" id="mukaku" onchange="previewImg(event)">
                    <span>Pilih Foto</span>
                </div>
                <img id="img-preview" class="preview-img" src="../../../image/<?= $data['mukaku']; ?>" alt="Preview" width="100px" height="100px">
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                <a href="muka.php" class="btn btn-success">Keluar</a>
            </div>
        </form>
        <div class="image-preview mb-5" id="imagePreview"></div>
    </div>
    <script>
        function previewImg(event) {
            var img = document.getElementById('img-preview');
            img.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</div>
<?php
include "../../includes/footer.php";
?>
