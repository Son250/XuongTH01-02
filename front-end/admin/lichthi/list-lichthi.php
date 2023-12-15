<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>QUẢN LÝ LỊCH THI</p>
    </div>
    <br>
    <div class="add-user">
        <a href="?act=addlt">
            Nhập thêm
        </a>
    </div>
    <div class="main-user">
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Tên kì thi</td>
                    <td>Hình ảnh</td>
                    <td>Thời gian bắt đầu</td>
                    <td>Thời gian kết thúc</td>
                    <td>Thời gian làm bài </td>
                    <td>Số lượng đề thi</td>
                    <td>Chức Năng</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dslt as $key => $value) : extract($value) ?>
                <?php   $hinhpath = "../uploads/" . $image_lt;
                    if (is_file($hinhpath)) {
                         $hinh_lt = "<img src='" . $hinhpath . "' width='100px'>";
                    } else {
                         $hinh_lt = "";
                    } ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $hinh_lt ?></td>
                        <td><?php echo $time_start ?></td>
                        <td><?php echo $time_end ?></td>
                        <td><?php echo $time ?>p</td>
                     
                        <td><?php echo $so_de_thi ?></td>
                        <td><a href="?act=chon_cauhoi&idlt=<?php echo $id ?>">Chọn câu hỏi</a>
                            <a href="?act=editlt&idlt=<?php echo $id ?>">Sửa</a>
                            <a href="?act=deletelt&idlt=<?php echo $id ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>