<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/app.js"></script>
</head>

<body>
    <div class="container">

        <div class="menu">
            <ul>
                <li class='logo-cong-ty'><a href=""><img src="../assets/img/logo-cong-ty-removebg-preview.png" alt=""></a></li>
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Tài khoản</a></li>
                <li><a href="">Chuyên đề</a></li>
                <li><a href="">Câu hỏi</a></li>
                <li><a href="">Lịch thi</a></li>
                <li><a href="">Kết quả thi</a></li>
                <li class='login'><a href="">Đăng nhập</a></li>
            </ul>
        </div>

        <div class="banner" onclick="anh()">
            <img src="../assets/img/banner0.webp" alt="" id="anh">
            <br>
            <input type="button" value="<" id="pre" onclick="back();">
            <input type="button" value=">" id="next" onclick="next();">
        </div>

        <div class="content">
            <div class="box-left">
                <div class="info-all">
                    <div>
                        <h3>Thông tin chung</h3>
                    </div>
                    <div class="four-box">
                        <div class="box bg-blue">
                            <div class="box-img">
                                <img src="../assets/img/chuyende-removebg-preview.png" alt="">
                            </div>
                            <div class='box-content'>
                                <p>267</p>
                                <p>Chuyên đề</p>
                            </div>
                            <div class='xem-chi-tiet'>
                                <a href="">Xem chi tiết >></a>
                            </div>
                        </div>
                        <div class="box bg-yellow">
                            <div class="box-img">
                                <img src="../assets/img/cauhoi-removebg-preview.png" alt="">
                            </div>
                            <div class='box-content'>
                                <p>6</p>
                                <p>Câu hỏi</p>
                            </div>
                            <div class='xem-chi-tiet'>
                                <a href="">Xem chi tiết >></a>
                            </div>
                        </div>
                        <div class="box bg-green">
                            <div class="box-img">
                                <img src="../assets/img/kythi-removebg-preview.png" alt="">
                            </div>
                            <div class='box-content'>
                                <p>2</p>
                                <p>Kỳ thi</p>
                            </div>
                            <div class='xem-chi-tiet'>
                                <a href="">Xem chi tiết >></a>
                            </div>
                        </div>
                        <div class="box bg-red">
                            <div class="box-img">
                                <img src="../assets/img/bangbieu-removebg-preview.png" alt="">
                            </div>
                            <div class='box-content'>
                                <p>9</p>
                                <p>Bảng biểu</p>
                            </div>
                            <div class='xem-chi-tiet'>
                                <a href="">Xem chi tiết >></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-right">
                <div class="thong-ke">
                    <div class='box-title'>
                        <h4>Thống kê cơ bản</h4>
                    </div>
                    <div class="box-content">
                        <img src="" alt="">
                        <p>Hình ảnh biểu đồ thống kê </p>
                    </div>
                </div>
                <div class="top-5">
                    <div class='box-title'>
                        <h4>Top 5 sinh viên có điểm cao nhất</h4>
                    </div>
                    <div class="box-content">
                        <img src="" alt="">
                        <p>Hình ảnh biểu đồ thống kê </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="title-ky-thi">
            <h2>Trắc nghiệm online </h2>
            <h3>Đa dạng - Thông minh - Chính xác</h3>
        </div>
        <div class="ky-thi">

            <div class="box">
                <div class="box-title">
                    <img src="../assets/img/dethihocky.jpg" alt="">
                    <h3>ĐỀ THI HỌC KÌ</h3>
                </div>
                <div class="box-content">
                    <div class='text'>
                        <p>Ngân hàng câu hỏi đầy đủ các môn cấp 1,2,3 được trộn tạo đề theo cấu trúc phân loại giúp các em
                            dễ dàng ôn tập online đề thi giữa học kỳ, thi học kỳ theo các chủ đề đã học.</p>
                    </div>
                    <div class='lam-ngay'>
                        <a href="">Làm ngay</a>
                    </div>

                </div>
            </div>
            <div class="box">
                <div class="box-title">
                    <img src="../assets/img/dethithptqg.jpg" alt="">
                    <h3>ĐỀ THI THPT QUỐC GIA</h3>
                </div>
                <div class="box-content">
                    <div class='text'>
                        <p>Ngân hàng câu hỏi đầy đủ các môn cấp 1,2,3 được trộn tạo đề theo cấu trúc phân loại giúp các em
                            dễ dàng ôn tập online đề thi giữa học kỳ, thi học kỳ theo các chủ đề đã học.</p>
                    </div>

                    <div class='lam-ngay'>
                        <a href="">Làm ngay</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-title">
                    <img src="../assets/img/dekiemtra.jpg" alt="">
                    <h3>ĐỀ KIỂM TRA</h3>
                </div>
                <div class="box-content">
                    <div class='text'>
                        <p>Ngân hàng câu hỏi đầy đủ các môn cấp 1,2,3 được trộn tạo đề theo cấu trúc phân loại giúp các em
                            dễ dàng ôn tập online đề thi giữa học kỳ, thi học kỳ theo các chủ đề đã học.</p>
                    </div>

                    <div class='lam-ngay'>
                        <a href="">Làm ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Bản quyền thuộc về Xưởng Thực Hành 01 - Nhóm 02</p>
        </div>
    </div>


</body>


</html>