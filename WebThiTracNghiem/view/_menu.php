<!-- ======= Menu ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="?act=trangchu">Arsha</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="?act=trangchu">Trang chủ</a></li>
        <li><a class="nav-link scrollto" href="#about">Kỳ thi</a></li>
        <li><a class="nav-link scrollto" href="?act=chuyende">Chuyên đề</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Hỗ trợ</a></li>
        <li><a class="nav-link scrollto" href="#team">Điểm</a></li>
        <?php
        if (isset($_SESSION['user'])) {
        ?>

          <li class="dropdown"><a href="#"><span>Tài khoản</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Xin chào <?php echo $_SESSION['user']['fullname'] ?></a></li>

              <li><a href="#">Thông tin cá nhân</a></li>
              <?php
              if ($_SESSION['user']['role'] == "1") {
                echo " <li><a href='../admin/index.php'>Đăng nhập Admin</a></li>";
              }
              ?>

              <li><a href="#">Quên mật khẩu</a></li>
              <li><a href="?act=logout">Đăng xuất</a></li>

            </ul>
          </li>
        

        <?php
        } else {
        ?>
          <li><a class="nav-link scrollto" href="?act=login">Đăng nhập</a></li>
        <?php
        }
        ?>

        <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->