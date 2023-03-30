<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_testimonial'])) {
    $id_testimonial = $_SESSION['edit_id_testimonial'];
    unset($_SESSION['edit_id_testimonial']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_testimonial = $_GET['id_testimonial'];
}

$query = mysqli_query($conn, "SELECT * FROM testimonial WHERE id_testimonial = '$id_testimonial' ");
$data = mysqli_fetch_assoc($query);

?>
<div class="content-wrapper">
    <div class="container my-1">
        <form action="prodit.php" method="post" enctype="multipart/form-data">
            <input type="text" name="old_foto" value="<?= $data['foto'] ?>" hidden>
            <input type="text" name="id_testimonial" id="id_testimonial" hidden value="<?= $data['id_testimonial'] ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control"  autocomplete="off" value="<?= $data['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control"  autocomplete="off" value="<?= $data['title']; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control"  autocomplete="off" value="<?= $data['deskripsi']; ?>">
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
