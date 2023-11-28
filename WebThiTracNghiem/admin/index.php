<?php
session_start();
include "../model/pdo.php";
include "../model/chuyende.php";


include "../model/taikhoan.php";
include "../model/lichthi.php";
include "../model/ketqua.php";
include "../model/cauhoi.php";
include "../model/dapan.php";
include "../model/dethi.php";
include "header.php";
include "menu.php";


?>
<div>
    <?php
    if(!isset($_SESSION['user']) || $_SESSION['user']['role'] == "2") {
        header('location:../view/index.php');
    }
    //Controller
    if(isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];

        switch($act) {
            case 'trangchu':

                include "trangchu/trangchu.php";
                break;
            case 'dscd':
                $listchuyende = loadall_chuyende();

                include "chuyende/list-chuyende.php";
                break;
            case 'add-chuyende':
                if(isset($_POST['themcd']) && ($_POST['themcd'])) {
                    $name = $_POST['tencd'];
                    insert_chuyende($name);
                    header("location:?act=dscd");
                }
                include "chuyende/add-chuyende.php";
                break;
            case 'xoacd':
                if(isset($_GET['id_cd']) && ($_GET['id_cd'] > 0)) {
                    delete_chuyende($_GET['id_cd']);
                }
                $listchuyende = loadall_chuyende();
                include "chuyende/list-chuyende.php";
                break;
            case 'suacd':
                if(isset($_GET['id_cd']) && ($_GET['id_cd'] > 0)) {
                    $a = loadone_chuyende($_GET['id_cd']);
                }
                include "chuyende/edit-chuyende.php";
                break;

            case "updatecd":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $name = $_POST['tencd'];
                    $id_cd = $_POST['id_cd'];
                    update_chuyende($id_cd, $name);
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
                if(isset($_POST['btn-addtk'])) {
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

                if(isset($_GET['idtk'])) {
                    $old_taikhoan = getold_taikhoan($_GET['idtk']);
                }
                if(isset($_POST['btn-edit-user'])) {
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
                if(isset($_GET['idtk'])) {
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
                if(isset($_POST['themch']) && ($_POST['themch'])) {
                    $idcd = $_POST['idcd'];
                    $content = $_POST['content'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["image"]["name"]);

                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    }

                    insert_cauhoi($content, $image, $idcd);
                    header("Location:index.php?act=dsch");
                }
                $listchuyende = loadall_chuyende();
                include "cauhoi/add-cauhoi.php";
                break;

            case 'editch':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $cauhoi = loadone_cauhoi($id);
                }
                $listchuyende = loadall_chuyende();
                $listdanhmuc = loadall_cauhoi();
                include "cauhoi/edit-cauhoi.php";
                break;
            case 'update_ch':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $idcd = $_POST['idcd'];
                    $content = $_POST['content'];

                    $image = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["image"]["name"]);
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    }
                    update_cauhoi($idcd, $content, $image, $id);
                    header("Location:index.php?act=dsch");
                }
                $listchuyende = loadall_chuyende();
                $listcauhoi = loadall_cauhoi();
                include "cauhoi/list-cauhoi.php";
                break;
            case 'xoach':
                if(isset($_GET['id']) && ($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_cauhoi($id);
                }
                $listcauhoi = loadall_cauhoi();
                include "cauhoi/list-cauhoi.php";
                break;

            case 'dsda':
                if(isset($_GET['id'])) {
                    $oldcauhoi = loadone_cauhoi($_GET['id']);
                    $listdapan = loadall_dapan($_GET['id']);
                }

                include "dapan/list-dapan.php";
                break;


            // Thêm đáp án ở câu hỏi 
            case "themda":
                if(isset($_GET['id'])) {
                    $oldcauhoi = loadone_cauhoi($_GET['id']);
                }


                if(isset($_POST['btnSubmit'])) {

                    $id_question = $_POST['id_question'];
                    $content_dapan = $_POST['content_dapan'];
                    $right_answer = $_POST['right_answer'];
                    foreach($content_dapan as $key => $value) {
                        //var_dump($_FILES['image']['name'][$key]);
                        //die ;
                        $photo = "";
                        if($_FILES['image']['name'][$key] != "") {
                            $photo = time()."_".$_FILES['image']['name'][$key];
                            move_uploaded_file($_FILES['image']['tmp_name'][$key], "../uploads/$photo");
                        }
                        add_dapan($value, $photo, $right_answer[$key], $id_question);
                    }


                    header("Location: ?act=dsda&id=$id_question");
                }
                include "dapan/add-dapan.php";
                break;

            case 'editda':
                $idcauhoi = loadid_cauhoi();

                if(isset($_GET['idda'])) {
                    $olddata = loadone_dapan($_GET['idda']);
                }

                if(isset($_POST['btnSubmit'])) {
                    $photo = "";
                    if($_FILES['img']['name'] != "") {
                        unlink("../uploads/{$data['image']}");
                        $photo = time()."_".$_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$photo");
                    }
                    edit_dapan($_POST['id'], $_POST['content_dapan'], $photo, $_POST['right_answer'], $_POST['id_question']);

                    // Chuyển hướng đến trang danh sách đáp án của câu hỏi đã chỉnh sửa
                    header("Location: ?act=dsda&id=".$_POST['id_question']);
                }
                include "dapan/edit-dapan.php";
                break;


            case "deleteda":
                if(isset($_GET['idda'])) {
                    $id_deleted_answer = $_GET['idda'];
                    $question_id = get_question_id_from_answer($id_deleted_answer); // Thay thế hàm này với hàm lấy ID câu hỏi từ ID đáp án
    
                    delete_dapan($id_deleted_answer);


                    header("Location: ?act=dsda&id=$question_id");
                }
                include "dapan/list-dapan.php";
                break;

            case 'dslt':
                $dslt = loadall_lichthi();
                include "lichthi/list-lichthi.php";
                break;
            case 'addlt':
                if(isset($_POST['btnSubmit'])) {

                    $name = $_POST['name'];
                    $time_start = $_POST['time_start'];
                    // $time_end = $_POST['time_end'];
                    $time = $_POST['time'];
                    $so_de_thi = $_POST['so_de_thi'];

                    add_lichthi($name, $time_start, $time, $so_de_thi);
                    header("location: ?act=dslt");
                }
                include "lichthi/add-lichthi.php";
                break;
            case 'deletelt':
                if(isset($_GET['idlt'])) {
                    delete_lichthi($_GET['idlt']);
                    header("location: ?act=dslt");
                }
                include "lichthi/list-lichthi.php";
                break;
            case 'editlt':
                if(isset($_GET['idlt'])) {
                    $olddata = getold_lichthi($_GET['idlt']);
                }
                if(isset($_POST['btnSubmit'])) {
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

            case 'chon_cauhoi':
                $listcauhoi = loadall_cauhoi();
                if(isset($_GET['idlt'])) {
                    $olddata = getold_lichthi($_GET['idlt']);
                }

                if(isset($_POST['btnSubmit'])) {

                    if(isset($_POST['selected_ch_de1'])) {
                        // Lấy danh sách các câu hỏi đã được chọn từ checkbox đề 1
                        $id_dethi = $_POST['id_dethi'];
                        $selectedQuestions = $_POST['selected_ch_de1'];

                        foreach($selectedQuestions as $key => $value) {
                            add_cauhoidethi($id_dethi, $value);
                        }
                        header("Location: ?act=dslt");
                    }
                }


                include "lichthi/chon-cauhoi.php";
                break;



            case 'dskq':
                $dskq = loadall_ketqua();
                include "ketqua/list-ketqua.php";
                break;
            case 'addkq':
                if(isset($_POST['btnSubmit'])) {

                    $name = $_POST['name'];
                    $time_start = $_POST['time_start'];
                    $time_end = $_POST['time_end'];
                    $time = $_POST['time'];
                    $so_de_thi = $_POST['so_de_thi'];

                    add_lichthi($name, $time_start, $time, $so_de_thi);
                    header("location: ?act=dslt");
                }
                include "lichthi/add-lichthi.php";
                break;

            case "dsdt":
                $dsdt = loadall_dethicauhoi();
                include "dethi/list-dethi.php";
                break;
            case 'back-to-website':

                header("location:../view/index.php");
                break;
            case 'bieudo':
                include "thongke/bieudo.php";
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