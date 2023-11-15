<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>QUẢN LÝ NGƯỜI DÙNG</p>
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
                    <td colspan="2">Chức Năng</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dslt as $key => $value) : ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['time_start'] ?></td>
                        <td><?php echo $value['time_end'] ?></td>
                        <td><?php echo $value['time'] ?>p</td>
                        <td><?php echo $value['so_de_thi'] ?></td>
                        <td><a href="?act=editlt&idlt=<?php echo $value['id'] ?>">Sửa</a> </td>
                        <td><a href="?act=deletelt&idlt=<?php echo $value['id'] ?>">Xóa</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>