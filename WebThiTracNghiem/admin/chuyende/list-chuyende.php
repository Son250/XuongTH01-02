<body>

    <div class="container">
        <h2>DANH SÁCH CHUYÊN ĐỀ </h2>

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>ID Chuyên đề </th>
                    <th>TÊN Chuyên đề </th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($listchuyende as $chuyende){
                    extract($chuyende);
                    $suacd="index.php?act=suacd&id_cd=".$id_cd;
                    $xoacd="index.php?act=xoacd&id_cd=".$id_cd;
                    echo' <tr>
                    <td> <input type="checkbox" name="" id=""></td>
                    <td>'.$id_cd.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'. $suacd.' "><input type="button" value="sửa"></a>, <a href="'.$xoacd.' "><input type="button" value="xóa"></a></td>
                </tr>';
                }
                 ?>
               
               
                
            </tbody>
        </table>
        <div class="row mb10">
            <button type="button" class="btn btn-success">CHỌN TẤT CẢ</button>
            <button type="button" class="btn btn-info">BỎ CHỌN TẤT CẢ</button>
            <button type="button" class="btn btn-warning">XÓA CÁC CHUYÊN ĐỀ ĐÃ CHỌN</button>
            <a href="?act=add-chuyende"><button type="button" class="btn btn-danger">NHẬP THÊM</button></a>
        </div>
    </div>

</body>

</html>
