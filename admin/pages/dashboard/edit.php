<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_home'])) {
    $id_home = $_SESSION['edit_id_home'];
    unset($_SESSION['edit_id_home']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_home = $_GET['id_home'];
}

$query = mysqli_query($conn, "SELECT * FROM home WHERE id_home = '$id_home' ");
$data = mysqli_fetch_assoc($query);

?>


<div class="content-wrapper">
    <div class="container my-1">
        <form action="prodit.php" method="post" enctype="multipart/form-data">
            <input type="text" name="old_foto" value="<?= $data['foto'] ?>" hidden>
            <input type="text" name="id_home" id="id_home" hidden value="<?= $data['id_home'] ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" autocomplete="off" class="form-control"  value="<?= $data['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="namapang" class="form-label">Nama Panggilan</label>
                <input type="text" name="namapang" autocomplete="off" class="form-control"  value="<?= $data['namapang']; ?>">
            </div>
            <div class="mb-3">
                <label for="profesi" class="form-label">Profesi</label>
                <input type="text" name="profesi" class="form-control"  autocomplete="off" value="<?= $data['profesi']; ?>">
            </div>
            <div class="mb-3">
                <label for="drive" class="form-label">Link Drive</label>
                <input type="text" name="drive" class="form-control"  autocomplete="off" value="<?= $data['drive']; ?>">
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
                <a href="dashboard.php" class="btn btn-success">Keluar</a>
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
