<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_skill'])) {
    $id_skill = $_SESSION['edit_id_skill'];
    unset($_SESSION['edit_id_skill']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_skill = $_GET['id_skill'];
}

$query = mysqli_query($conn, "SELECT * FROM skill WHERE id_skill = '$id_skill' ");
$data = mysqli_fetch_assoc($query);

?>
<div class="content-wrapper">
    <div class="container my-5">
        <form action="prodit.php" method="post" enctype="multipart/form-data">
            <input type="text" name="old_foto" value="<?= $data['foto'] ?>" hidden>
            <input type="text" name="id_skill" id="id_skill" hidden value="<?= $data['id_skill'] ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Skill</label>
                <input type="text" name="skill" class="form-control"  autocomplete="off" value="<?= $data['skill'] ?>">
            </div>
            <div class="mb-3">
                <label for="persen" class="form-label">Persen</label>
                <input type="number" name="persen" class="form-control"  autocomplete="off" value="<?= $data['persen'] ?>">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <div class="file-upload">
                    <input type="file" name="foto" id="foto" onchange="previewImg(event)">
                    <span>Pilih Foto</span>
                </div>
                <img id="img-preview" class="preview-img" src="../../../image/<?= $data['foto']; ?>" alt="Preview" width="100px" height="100px">
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
