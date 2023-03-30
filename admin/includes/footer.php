<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. Made with&nbsp;<i class="ti-heart text-danger ml-1"></i>&nbsp;by Prasetyanto Tri Prabowo</span>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- <script>
  $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 100
  });
</script> -->

<script>
  tinymce.init({
    selector: 'textarea#biotext',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [{
        value: 'First.Name',
        title: 'First Name'
      },
      {
        value: 'Email',
        title: 'Email'
      },
    ],
  });
</script>

<!-- plugins:js -->
<script src="../../vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../../vendors/chart.js/Chart.min.js"></script>
<script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
<script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="../../js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>
<!-- <script src="../../js/settings.js"></script> -->
<script src="../../js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../../js/dashboard.js"></script>
<script src="../../js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<!-- sweetalert -->
<script src="../../../sweet_alert/sweetalert2@11.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Sweetalert about -->
<script>
  $(document).ready(function() {
    <?php
    // cek session apakah ada message
    if (isset($_SESSION['editber'])) {
    ?>
      // alert("session edit berhasil ada");
      swal({
        title: '<?= $_SESSION['editber']; ?>',
        icon: 'success',
        button: 'Oke',
      });
    <?php
      // hapus session di session
      unset($_SESSION['editber']);
    }
    ?>
  });
</script>

<!-- sweet gagal -->
<script>
  $(document).ready(function() {
    <?php
    // cek session apakah ada message
    if (isset($_SESSION['editgal'])) {
    ?>
      // alert("session edit berhasil ada");
      swal({
        title: '<?= $_SESSION['editgal']; ?>',
        icon: 'warning',
        button: 'Oke',
      });
    <?php
      // hapus message di session
      unset($_SESSION['editgal']);
    }
    ?>
  });
</script>


<!-- Swet Hapus -->

<!-- Sintaks delete swal -->
<script>
  // Jquery
  $(document).on('click', '#hapusbutton', function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    Swal.fire({
      title:'',
      text: 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
            'Data Berhasil di Hapus.',
            '',
            'success'
          )
          .then(() => {
            window.location = link;
          })
      }
    })
  })
</script>
</body>

</html>
