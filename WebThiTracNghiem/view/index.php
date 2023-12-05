<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/chuyende.php";
include "../model/lichthi.php";

include "_header.php";
include "_menu.php";
include "../model/dethi_cauhoi.php" ;
?>

<div>
    <?php
    $dslt = loadall_lichthi();
    $dscd = loadall_chuyende();
   
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
            case 'chuyende':

                include "chuyende.php";
                break;
            case 'lichthi':

                include "trangchu.php";
                break;
            case 'logout':

                unset($_SESSION['user']);
                header('location:?act=trangchu');
                break;
            case 'admin':

                header("Location:../admin/index.php");
                break;
            case "trangthi":
               
                $list_trangthi = load_trangthi(8);
               
                
                include 'trang_thi.php';
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