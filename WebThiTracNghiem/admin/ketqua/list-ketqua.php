<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>QUẢN LÝ KẾT QUẢ</p>
    </div>
    <br>
    <div class="add-user">
       
    </div>
    <div class="main-user">
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Bộ kết quả</td>
                    <td>Tên người dùng</td>
                    <td>ID đề thi </td>
                    <td>Điểm</td>

                    <td colspan="2">Chức Năng</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dskq as $key => $value) : ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['bo_ket_qua'] ?></td>
                        <td><?php echo $value['username'] ?></td>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['diem'] ?>đ</td>

                        <td><a href="">Xem chi tiết</a>
                     
                        </td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>