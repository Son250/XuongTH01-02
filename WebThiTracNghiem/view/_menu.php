<div class="menu">
    <ul class="main-menu">
        <li class='logo-cong-ty'><a href="?act=trangchu"><img src="../assets/img/logo-cong-ty-removebg-preview.png" alt=""></a></li>
        <li><a href="?act=trangchu">Trang chủ</a></li>
        <li><a href="">Tài khoản</a></li>
        <li><a href="">Chuyên đề</a></li>
        <li><a href="">Câu hỏi</a></li>
        <li><a href="">Lịch thi</a></li>
        <li><a href="">Kết quả thi</a></li>
        <li class='login'>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
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
                            <?php
                            if ($_SESSION['user']['role'] == "1") {
                                echo "<a href='?act=admin'>Đăng nhập Admin</a>";
                            }
                            ?>
                        </div>
                        <div>
                            <a href="?act=logout">Đăng xuất</a>
                        </div>
                    </div><br>
                </div> <br>
            <?php
            } else {
            ?>
                <a href="?act=login">Đăng nhập</a>
            <?php
            }
            ?>
        </li>
    </ul>
</div>