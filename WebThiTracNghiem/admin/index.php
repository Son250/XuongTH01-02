<?php
session_start();
include "../model/pdo.php";
include "../model/chuyende.php";

include "../model/taikhoan.php";
include "../model/lichthi.php";
include "../model/ketqua.php";
include "../model/cauhoi.php";
include "header.php";
include "menu.php";





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
                    $name= $_POST['tencd'];
                    insert_chuyende($name);
                  header("location:?act=dscd");
                }
                include "chuyende/add-chuyende.php";
                break;
            case 'xoacd':
                if (isset($_GET['id_cd']) && ($_GET['id_cd'] > 0)) {
                    delete_chuyende($_GET['id_cd']);
                }
                $listchuyende = loadall_chuyende();
                include "chuyende/list-chuyende.php";
                break;
            case 'suacd':
                if (isset($_GET['id_cd']) && ($_GET['id_cd'] > 0)) {
                   $a=loadone_chuyende ($_GET['id_cd']);
                }
                include "chuyende/edit-chuyende.php";
                break;
              
            case "updatecd":
            if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                $name=$_POST['tencd'];
                $id_cd=$_POST['id_cd'];
                update_chuyende($id_cd,$name);
                $thongbao = "cap nhap thanh cong";
            }
            $listchuyende = loadall_chuyende();
            include "chuyende/list-chuyende.php";
            break;
                
            case 'dstk':
                $listtaikhoan = loadall_taikhoan();

                include "taikhoan/list-taikhoan.php";
                break;
            case 'addtk':

                $listtaikhoan = loadall_taikhoan();
                if (isset($_POST['btn-addtk'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['password'];
                    $fullname = $_POST['full_name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $role = $_POST['role'];
                    add_taikhoan($user, $pass, $fullname, $email, $address, $role);
                    header("location: ?act=dstk");
                }
                include "taikhoan/add-taikhoan.php";
                break;
            case 'edittk':
                if (isset($_GET['idtk'])) {
                    $old_taikhoan = getold_taikoan($_GET['idtk']);
                }
                if (isset($_POST['btn-edit-user'])) {
                    $id = $_POST['idtk'];
                    $user = $_POST['user'];
                    $pass = $_POST['password'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    update_taikhoan($id, $user, $pass, $email, $address, $role);
                    header("location: ?act=dstk");
                }
                include "taikhoan/edit-taikhoan.php";
                break;
            case 'dltk':
                if (isset($_GET['idtk'])) {
                    delete_taikhoan($_GET['idtk']);
                    header("location: ?act=dstk");
                }
                include "taikhoan/list-taikhoan.php";
                break;

            case 'dsch':
                $listcauhoi = loadall_cauhoi();
                $listchuyende = loadall_chuyende();
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
                        insert_cauhoi($content, $image, $idcd);
                    }
                    }
            //Bạn bỏ mấy cái thông báo script di
                $listchuyende = loadall_chuyende();
                include "cauhoi/add-cauhoi.php";
                break;

            case 'editch':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $cauhoi = loadone_cauhoi($id);
                }
                $listchuyende = loadall_chuyende();
                $listdanhmuc = loadall_cauhoi();
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
                    } else {

                    }
                    }
                    update_cauhoi($idcd, $content, $image, $id);
                $listchuyende = loadall_chuyende();
                $listcauhoi = loadall_cauhoi();
                include "cauhoi/list-cauhoi.php";
                break;
            case 'xoach':
                if (isset($_GET['id']) && ($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_cauhoi($id);
                }
                $listcauhoi = loadall_cauhoi();
                include "cauhoi/list-cauhoi.php";
                break;





            case 'dsda':
                // $dsdp = loadall_dapan();
                include "dapan/list-dapan.php";
                break;
            case 'editda':

                include "dapan/edit-dapan.php";
                break;







            case 'dslt':
                $dslt = loadall_lichthi();
                include "lichthi/list-lichthi.php";
                break;
            case 'addlt':
                if (isset($_POST['btnSubmit'])) {

                    $name = $_POST['name'];
                    $time_start = $_POST['time_start'];
                    $time_end = $_POST['time_end'];
                    $time = $_POST['time'];
                    $so_de_thi = $_POST['so_de_thi'];

                    add_lichthi($name, $time_start, $time_end, $time, $so_de_thi);
                    header("location: ?act=dslt");
                }
                include "lichthi/add-lichthi.php";
                break;
            case 'deletelt':
                if (isset($_GET['idlt'])) {
                    delete_lichthi($_GET['idlt']);
                    header("location: ?act=dslt");
                }
                include "lichthi/list-lichthi.php";
                break;
            case 'editlt':
                if (isset($_GET['idlt'])) {
                    $olddata = getold_lichthi($_GET['idlt']);
                }
                if (isset($_POST['btnSubmit'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $time_start = $_POST['time_start'];
                    $time_end = $_POST['time_end'];
                    $time = $_POST['time'];
                    $so_de_thi = $_POST['so_de_thi'];
                    update_lichthi($id, $name, $time_start, $time_end, $time, $so_de_thi);
                    header("location: ?act=dslt");
                }
                include "lichthi/edit-lichthi.php";
                break;
            case 'dskq':
                $dskq = loadall_ketqua();
                include "ketqua/list-ketqua.php";
                break;
            case 'addkq':
                if (isset($_POST['btnSubmit'])) {

                    $name = $_POST['name'];
                    $time_start = $_POST['time_start'];
                    $time_end = $_POST['time_end'];
                    $time = $_POST['time'];
                    $so_de_thi = $_POST['so_de_thi'];

                    add_lichthi($name, $time_start, $time_end, $time, $so_de_thi);
                    header("location: ?act=dslt");
                }
                include "lichthi/add-lichthi.php";
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
