<body>
    <div class="container">

        <div class="menu">
            <ul class="main-menu">
                <li class='logo-cong-ty'><a href="?act=trangchu"><img src="../assets/img/logo-cong-ty-removebg-preview.png" alt=""></a></li>
                <!-- <li><a href="?act=trangchu">Trang chủ</a></li> -->
                <li><a href="?act=dstk">Tài khoản</a></li>
                <li><a href="?act=dscd">Chuyên đề</a></li>
                <li><a href="?act=dsch">Câu hỏi</a></li>
                <!-- <li><a href="?act=dsda">Đáp án</a></li> -->
                <li><a href="?act=dslt">Lịch thi</a></li>
                <li><a href="?act=dsdt">Đề thi</a></li>
                <li><a href="?act=dskq">Kết quả thi</a></li>
                <li><a href="?act=bieudo">Thống Kê</a></li>
                <li class='login'>

                    <div class='xin-chao-user'>
                        Xin chào
                        <?php echo $_SESSION['user']['fullname'] ?>
                        <div class='setup-user'>
                            <div>
                                <a href="?act=fg_password">Quên mật khẩu</a>
                            </div>
                            <div>
                                <a href="?act=edit_tk">Cập nhật tài khoản</a>
                            </div>
                            <div>
                                <a href="?act=back-to-website">Quay về website</a>
                            </div>

                        </div><br>
                    </div> <br>

                </li>
            </ul>
        </div>