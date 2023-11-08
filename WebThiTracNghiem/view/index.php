<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "_header.php";
include "_menu.php";
include "_banner.php"

?>


<div>
    <?php

    //Controller
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];

        switch ($act) {
            case 'trangchu':
               
                include "home.php";
                break;

            case "login": {
                    if (isset($_POST['btnSubmit'])) {
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
                            $check_user = check_user($_POST['username'], $_POST['password']);
                            if (is_array($check_user)) {
                                //Tạo ra biến Session để lưu kết quả vừa tìm đc
                                $_SESSION['user'] = $check_user;

                                header("Location:?act=trangchu");
                              

                            } else {
                                $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                            }
                        } else {
                            $thongbao = "Tên đăng nhập và mật khẩu không được để trống";
                        }
                    }
                    include "login.php";
                    break;
                }

            case 'register':

                include "register.php";
                break;
            case 'logout':

                unset($_SESSION['user']);
                header('location:?act=trangchu');
                break;
            case 'admin':

                header("Location:../admin/index.php");
                break;

            default:
              
                include "home.php";
                break;
        }
    } else {
   
        include "home.php";
    }
    ?>
</div>

<?php
include "_footer.php";
?>