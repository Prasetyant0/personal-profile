<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_blog'])) {
    $id_blog = $_SESSION['edit_id_blog'];
    unset($_SESSION['edit_id_blog']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_blog = $_GET['id_blog'];
}

$query = mysqli_query($conn, "SELECT * FROM blog WHERE id_blog = '$id_blog' ");
$data = mysqli_fetch_assoc($query);




?>


<div class="content-wrapper">
    <div class="container my-1">
        <form action="prodit.php" method="post" enctype="multipart/form-data">
            <input type="text" name="old_foto" value="<?= $data['foto'] ?>" hidden>
            <input type="text" name="id_blog" id="id_blog" hidden value="<?= $data['id_blog'] ?>">
            <div class="mb-3">
                <label for="blog" class="form-label">Blog</label>
                <input type="text" name="blog" class="form-control"  autocomplete="off" value="<?= $data['blog']; ?>">
            </div>
            <div class="mb-3">
                <label for="sub" class="form-label">Sub</label>
                <input type="text" name="sub" class="form-control"  autocomplete="off" value="<?= $data['sub']; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="biotext" class="form-control"><?php echo $data['deskripsi'];  ?></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_post" class="form-label">Tanggal Post</label>
                <input type="date" name="tanggal_post" class="form-control"  autocomplete="off" value="<?= $data['tanggal_post']; ?>">
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
