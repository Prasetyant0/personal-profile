<?php
include "../../kepala.php";

if (isset($_SESSION['edit_id_about'])) {
    $id_about = $_SESSION['edit_id_about'];
    unset($_SESSION['edit_id_about']);
} else {
    // Jika tidak terdapat nilai pada $_SESSION, maka ambil dari URL
    $id_about = $_GET['id_about'];
}

$query = mysqli_query($conn, "SELECT * FROM about WHERE id_about = '$id_about'");
$data = mysqli_fetch_assoc($query);

?>
<div class="content-wrapper">
    <form action="prodit.php" method="post" enctype="multipart/form-data">
        <input type="text" name="old_foto" value="<?=$data['foto']?>" hidden>
        <input type="text" name="id_about" id="id_about" hidden value="<?= $data['id_about']?>">
        <div class="form-group">
            <label for="about">About:</label>
            <textarea name="about" id="about" class="form-input"><?php echo $data['about'];   ?></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="foto">Foto:</label>
            <div class="file-upload">
                <input type="file" name="foto" id="foto" onchange="previewImg(event)">
                <span>Pilih Foto</span>
            </div>
            <img id="img-preview" class="preview-img" src="../../../image/<?= $data['foto']; ?>" alt="Preview" width="100px" height="100px">
            <script>
                function previewImg(event) {
                    var img = document.getElementById('img-preview');
                    img.src = URL.createObjectURL(event.target.files[0]);
                }
            </script>
            <div class="form-group">
                <label class="form-label" for="nama">Nama:</label>
                <input class="form-input" type="text" id="nama" name="nama" value="<?= $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="pekerjaan">Pekerjaan:</label>
                <input class="form-input" type="text" id="pekerjaan" name="pekerjaan" value="<?= $data['pekerjaan']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <a href="about.php" class="btn btn-danger">Keluar</a>
        </div>
    </form>
</div>

<?php
include "../../includes/footer.php";
?>
