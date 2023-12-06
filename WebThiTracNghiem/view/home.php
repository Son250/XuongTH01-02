<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Thi thử toán THPT Quốc Gia năm 2024</h1>
        <h2>Đề thi được thầy Nguyễn Viết Sơn tổng hợp từ các năm 2021,2022,2023. Tỉ lệ sát đề thi thật 80% </h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Bắt đầu thi</a>
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="../assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>
</section>
<main id="main">

  <div class="khung">
    <main id="main">
      <section class="containerfull">
        <div class="section-title">
          <h2>Top 10 sinh viên điểm cao nhất</h2>
        </div>
        <div class="top10">
          <table class="table">
            <tbody>
              <tr>
                <td>1</td>
                <td>Nguyễn Thị Thanh Thanh</td>
                <td>100 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Phan Thị Trang</td>
                <td>100 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Nguyễn Viết Sơn</td>
                <td>10 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Nguyễn Thị Thanh Thanh</td>
                <td>100 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Phan Thị Trang</td>
                <td>100 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Nguyễn Viết Sơn</td>
                <td>0 điểm j để chê</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Nguyễn Thị Thanh Thanh</td>
                <td>100 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Phan Thị Trang</td>
                <td>100 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Nguyễn Viết Sơn</td>
                <td>1 điểm</td>
                <td>kì thi thử quốc gia</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ngô Văn Hoàng</td>
                <td>-</td>
                <td>kì thi thử quốc gia</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="containerfull mr30">
          <div class="section-title">
            <h2>Chuyên đề</h2>
          </div>
          <?php foreach ($dscd as $dscd) : ?>
            
            <div class="box25 mr15">
              <img src="../assets/img/<?php echo $dscd['image_cd'] ?>" alt="" />
              <span><a href="" class="tenchuyende"><?php echo $dscd['name'] ?></a></span>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="containerfull mr30">
          <div class="section-title">
            <h2>kì thi</h2>
          </div>
          <?php foreach ($dslt as $key => $values) : ?>
            <div class="kithi">
              <div class="col62 imgchitiet">
                <img src="../assets/img/<?php echo $values['image_lt'] ?>" alt="" />
              </div>
              <div class="col62 textchitiet">
                <h2><?php echo $values['name'] ?></h2>
                <p>
                  Thi ĐGNL là một kỳ thi có bài thi (môn thi) tổng hợp thường gồm các câu hỏi để kiểm tra
                  trình độ ngôn ngữ; Toán học, tư duy logic và phân tích số liệu; và giải quyết vấn đề.
                </p>
                <?php
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time_start = $values['time_start'];
                $time_end = $values['time_end'];
                $time_now = date("Y-m-d H:i:s");
                if ($time_start < $time_now && $time_now < $time_end) {
                  echo '<a class="btn" name="btn-vaothi" href="#" onclick="startExam(' . $values['id'] . ');">Vào thi</a>';
                } elseif ($time_start > $time_now) {
                  echo '<a class="btn" name="btn-vaothi" >Chưa đến giờ</a>';
                } else {
                  echo '<a class="btn" name="btn-vaothi" >Quá giờ thi</a>';
                }
                ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- <div class="containerfull mr30">
          <div class="section-title">
            <h2>Tin tức</h2>
          </div>
          <div class="box25 mr15">
            <img src="../assets/img/sgk-toan-lop-4.jpg" alt="" />
            <span><a href="#" class="tenchuyende">Toán lớp 4</a></span>
          </div>
          <div class="box25 mr15">
            <img src="../assets/img/sgk-toan-lop-4.jpg" alt="" />
            <span><a href="#" class="tenchuyende">Toán lớp 4</a></span>
          </div>
          <div class="box25 mr15">
            <img src="../assets/img/sgk-toan-lop-4.jpg" alt="" />
            <span><a href="#" class="tenchuyende">Toán lớp 4</a></span>
          </div>
          <div class="box25 mr15">
            <img src="../assets/img/sgk-toan-lop-4.jpg" alt="" />
            <span><a href="#" class="tenchuyende">Toán lớp 4</a></span>
          </div>
        </div> -->
      </section>
    </main>
    <script>
      function startExam(id_lichthi) {
        // Thực hiện các thao tác cần thiết trước khi vào thi
        // Chuyển hướng đến trang thi mà không load lại trang
        window.location.href = '?act=trangthi&id_lichthi=' + id_lichthi;
      }
    </script>
  </div>
</main><!-- End #main -->
