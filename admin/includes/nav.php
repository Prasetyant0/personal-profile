<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo" style="position: absolute; left:170px;" />
      <h2>ADMIN</h2>
    </a>
    <!-- <img src="../../images/logo.svg" class="mr-2" alt="logo" /> -->
    <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">


        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <?php
      require_once "../../../config/config.php";
      $query = "SELECT * FROM muka";
      $result = mysqli_query($conn, $query);
      $data = mysqli_fetch_assoc($result);
      ?>
      <li class="nav-item nav-profile dropdown">
        <p style="position:relative; right:10px; top:3px"><?php echo $data['jeneng'];  ?></p>
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="../../../image/<?= $data['mukaku']; ?>" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="../../logout/destroy.php">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
