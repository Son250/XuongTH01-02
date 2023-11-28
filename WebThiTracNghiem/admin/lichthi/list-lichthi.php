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
                    <td>Thời gian bắt đầu</td>
                    <td>Thời gian kết thúc</td>
                    <td>Thời gian làm bài </td>
                    <td>Số lượng đề thi</td>
                    <td>Chức Năng</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dslt as $key => $value) : extract($value) ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $time_start ?></td>
                        <td>
                            <!-- <?php echo $time_end ?> -->
                            <?php
                            // Thời gian bắt đầu
                            $time_start = new DateTime($time_start);

                            // Số phút muốn cộng thêm
                            $minutes_to_add = $time;

                            // Thực hiện cộng thời gian
                            $time_end = clone $time_start; // Clone thời gian bắt đầu để không ảnh hưởng đến biến gốc
                            $time_end->add(new DateInterval('PT' . $minutes_to_add . 'M')); // Thêm số phút vào thời gian bắt đầu

                            // In ra thời gian kết thúc sau khi cộng
                            echo $time_end->format('Y-m-d H:i:s'); // Kết quả: 2023-11-25 23:50:00
                            ?>

                        </td>
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