<body>
    <div class="container">
        <h2>DANH SÁCH CHUYÊN ĐỀ </h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID Chuyên đề </th>
                    <th>Tên Chuyên đề </th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listchuyende as $chuyende) {
                    extract($chuyende);
                    $suacd = "index.php?act=suacd&id_cd=" . $id_cd;
                    $xoacd = "index.php?act=xoacd&id_cd=" . $id_cd;
                    echo ' <tr>
                 
                    <td>' . $id_cd . '</td>
                    <td>' . $name . '</td>
                    <td><a href="' . $suacd . ' ">Sửa</a>  <a href="' . $xoacd . '">Xóa</a>
                    </td>
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