<body>
    <div class="container">
        <h2>DANH SÁCH CHUYÊN ĐỀ </h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID Chuyên đề </th>
                    <th>Tên Chuyên đề </th>
                    <th>Hình ảnh</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($listchuyende as $chuyende) {
                    extract($chuyende);
                    $suacd = "index.php?act=suacd&id_cd=" . $id_cd;
                    $xoacd = "index.php?act=xoacd&id_cd=" . $id_cd;
                    $hinhpath = "../uploads/" . $image_cd;
                    if (is_file($hinhpath)) {
                         $hinh_cd = "<img src='" . $hinhpath . "' width='100px'>";
                    } else {
                         $hinh_cd = "";
                    }
                    echo' <tr>
                    <td>'.$id_cd.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh_cd.'</td>
                    <td><a href="'.$suacd.'"><input type="button" value="sửa"></a> <a href="'.$xoacd.'"><input type="button" value="xóa"></a></td>
                </tr>';
                }
                ?>
            </tbody>
        </table>
        <div class="row mb10">
            <a href="?act=add-chuyende"><button type="button" class="btn btn-danger">NHẬP THÊM</button></a>
        </div>
    </div>

</body>

</html>