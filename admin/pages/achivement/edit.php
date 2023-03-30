<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_achivement'])) {
    $id_achivement = $_SESSION['edit_id_achivement'];
    unset($_SESSION['edit_id_achivement']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_achivement = $_GET['id_achivement'];
}

$query = mysqli_query($conn, "SELECT * FROM achivement WHERE id_achivement = '$id_achivement' ");
$data = mysqli_fetch_assoc($query);

?>


<div class="content-wrapper">
    <div class="container my-1">
        <form action="prodit.php" method="post" enctype="multipart/form-data">
            <input type="text" name="old_foto" value="<?= $data['foto'] ?>" hidden>
            <input type="text" name="id_achivement" id="id_achivement" hidden value="<?= $data['id_achivement'] ?>">
            <div class="mb-3">
                <label for="achivement" class="form-label">Achivement</label>
                <input type="text" name="achivement" class="form-control"  autocomplete="off" value="<?= $data['achivement']; ?>">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <div class="file-upload">
                    <input type="file" name="foto" id="foto" onchange="previewImg(event)">
                    <span>Pilih Foto</span>
                </div>
                <img id="img-preview" class="preview-img" src="../../../image/<?php echo $data['foto'];  ?>" alt="Preview" width="100px" height="100px">
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
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
