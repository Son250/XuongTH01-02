<?php
session_start();
include "../model/pdo.php";
include "../model/chuyende.php";
include "header.php";
include "menu.php";
include "../model/taikhoan.php";

?>

<!--  -->
<div>
    <?php

    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] == "2") {
        header('location:../view/index.php');
    }
    //Controller
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];

        switch ($act) {
            case 'trangchu':

                include "trangchu/trangchu.php";
                break;
            case 'dscd':
                $listchuyende = loadall_chuyende();

                include "chuyende/list-chuyende.php";
                break;
            case 'add-chuyende':
                if (isset($_POST['themcd']) && ($_POST['themcd'])) {
                    $tencd = $_POST['tencd'];
                    insert_chuyende($tencd);
                    $thongbao = '<script>
                    var thongbao = new Object();
                    thongbao.name = "bạn đã thêm chuyên đề thành công";
                   
                    thongbao.intro = function() {
                        alert("bạn đã thêm chuyên đề thành công ");
            
            
                    }
                  
                    thongbao.intro();
                </script>';
                }
                include "chuyende/add-chuyende.php";
                break;


            case 'dstk':
                $listtaikhoan = loadall_taikhoan();

                include "taikhoan/list-taikhoan.php";
                break;
            case 'addtk':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tentk=$_POST['user'];
                    $pass=$_POST['password'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];   
                    header("Location:index.php?act=dstk");
                }
                $listtaikhoan = insert_taikhoan($user,$password, $email, $address);
                include "sanpham/add.php";
                break;
            case 'edittk':

                include "taikhoan/edit-taikhoan.php";
                break;
            case 'dsch':

                include "cauhoi/list-cauhoi.php";
                break;
            case 'addch':

                include "cauhoi/add-cauhoi.php";
                break;
            case 'editch':

                include "cauhoi/edit-cauhoi.php";
                break;
            case 'dsda':

                include "dapan/list-dapan.php";
                break;
            case 'editda':

                include "dapan/edit-dapan.php";
                break;
            case 'back-to-website':

                header("location:../view/index.php");
                break;


            default:
                include "trangchu/trangchu.php";
                break;
        }
    } else {
        include "trangchu/trangchu.php";
    }
    ?>
</div>

<?php
include "footer.php";
?>