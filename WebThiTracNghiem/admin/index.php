<?php
include "../model/pdo.php";
include "header.php";
include "menu.php";
?>


<div>
    <?php

    //Controller
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];

        switch ($act) {
            case 'trangchu':

                include "trangchu/trangchu.php";
                break;
            case 'dscd':

                include "chuyende/list-chuyende.php";
                break;
            case 'add-chuyende':

                include "chuyende/add-chuyende.php";
                break;

            case 'dstk':

                include "taikhoan/list-taikhoan.php";
                break;
            case 'addtk':

                include "taikhoan/add-taikhoan.php";
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