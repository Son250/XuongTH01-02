<?php
session_start();
include "../model/pdo.php";
include "../model/chuyende.php";
include "../model/cauhoi.php";
include "header.php";
include "menu.php";
include "../model/taikhoan.php";
?>
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
            case'dsch':
                $listcauhoi = loadall_cauhoi();
                $listchuyende=loadall_chuyende();
                include "cauhoi/list-cauhoi.php";
                break;
            case 'addch':
                if (isset($_POST['themch']) && ($_POST['themch'])) {
                    $idcd = $_POST['idcd'];
                    $content = $_POST['content'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    
                    }
                    insert_cauhoi($content, $image, $idcd);
                    header("Location: index.php?act=dsch");
                    }
                $listchuyende = loadall_chuyende();
                include "cauhoi/add-cauhoi.php";
                break;
                
            case 'editch':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id=$_GET['id'];
                    $cauhoi=loadone_cauhoi($id);
                }
                $listchuyende=loadall_chuyende();
                $listdanhmuc=loadall_cauhoi();
                include "cauhoi/edit-cauhoi.php";
                break;
            case 'update_ch':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $idcd = $_POST['idcd'];
                    $content = $_POST['content'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    }
                    update_cauhoi($idcd, $content, $image, $id);
                }
                    
                $listchuyende = loadall_chuyende();
                $listcauhoi = loadall_cauhoi();
                include "cauhoi/list-cauhoi.php";
                break;
            case 'xoach':
                if(isset($_GET['id']) && ($_GET['id'])){
                    $id=$_GET['id'];
                        delete_cauhoi($id);
                }
                $listcauhoi= loadall_cauhoi();
                include "cauhoi/list-cauhoi.php";
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