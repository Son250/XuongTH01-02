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

                    // Check if content and image are not empty
                    if (empty($content) || empty($_FILES['image']['name'])) {
                        echo '<script>alert("Vui lòng điền đầy đủ thông tin câu hỏi và chọn hình ảnh.");</script>';
                    } else {
                        // Continue with file upload and processing
                        $image = $_FILES['image']['name'];

                        // Change the file name to something unique, for example, based on the current timestamp
                        $timestamp = time();
                        $imageFileName = $timestamp . '_' . $image;

                        $target_dir = "../uploads/";
                        $target_file = $target_dir . $imageFileName;

                        // Check if the file already exists and rename it
                        $counter = 1;
                        while (file_exists($target_file)) {
                            $imageFileName = $timestamp . '_' . $counter . '_' . $image;
                            $target_file = $target_dir . $imageFileName;
                            $counter++;
                        }

                        // Check if the file is an image
                        $check = getimagesize($_FILES["image"]["tmp_name"]);
                        if ($check !== false) {
                            // Check file size
                            if ($_FILES["image"]["size"] > 500000) {
                                echo '<script>alert("Xin lỗi, kích thước tệp quá lớn.");</script>';
                            } else {
                                // Allow certain file formats
                                $allowed_types = array("jpg", "jpeg", "png", "gif");
                                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                                if (!in_array($imageFileType, $allowed_types)) {
                                    echo '<script>alert("Xin lỗi, chỉ chấp nhận tệp JPG, JPEG, PNG, và GIF.");</script>';
                                } else {
                                    // Move the uploaded file to the target directory
                                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                        // Insert the question with the image into the database
                                        insert_cauhoi($content, $imageFileName, $idcd);
                                        echo '<script>alert("Tệp ' . $imageFileName . ' đã được tải lên và câu hỏi đã được thêm.");</script>';
                                    } else {
                                        echo '<script>alert("Xin lỗi, có lỗi khi tải lên tệp của bạn.");</script>';
                                    }
                                }
                            }
                        } else {
                            echo '<script>alert("Tệp không phải là hình ảnh.");</script>';
                        }
                    }

                    // You may want to redirect the user or perform other actions after processing the form.
                    // header("Location: redirect_page.php");
                }
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

                    // Check if an image was uploaded
                    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                        $image = $_FILES['image']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);

                        // Check if the file is an image
                        $check = getimagesize($_FILES["image"]["tmp_name"]);
                        if ($check !== false) {
                            if (file_exists($target_file)) {
                                echo '<script>alert("Xin lỗi, tệp đã tồn tại.");</script>';
                            } else {

                                if ($_FILES["image"]["size"] > 500000) {
                                    echo '<script>alert("Xin lỗi, kích thước tệp quá lớn.");</script>';
                                } else {
                                    $allowed_types = array("jpg", "jpeg", "png", "gif");
                                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                                    if (!in_array($imageFileType, $allowed_types)) {
                                        echo '<script>alert("Xin lỗi, chỉ chấp nhận tệp JPG, JPEG, PNG, và GIF.");</script>';
                                    } else {
                                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                            update_cauhoi($idcd, $content, $image, $id);
                                            echo '<script>alert("Tệp ' . basename($_FILES["image"]["name"]) . ' đã được tải lên và câu hỏi đã được cập nhật.");</script>';
                                        } else {
                                            echo '<script>alert("Xin lỗi, có lỗi khi tải lên tệp của bạn.");</script>';
                                        }
                                    }
                                }
                            }
                        } else {
                            echo '<script>alert("Tệp không phải là hình ảnh.");</script>';
                        }
                    } else {
                        update_cauhoi($idcd, $content, null, $id);
                        echo '<script>alert("Câu hỏi đã được cập nhật mà không có thay đổi hình ảnh.");</script>';
                    }
                }
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