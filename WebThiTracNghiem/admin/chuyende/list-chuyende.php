<body>

    <div class="container">
        <h2>DANH SÁCH CHUYÊN ĐỀ </h2>

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>MÃ MÔN HỌC </th>
                    <th>TÊN MÔN HỌC </th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($listchuyende as $chuyende){
                    extract($chuyende);
                    echo' <tr>
                    <td> <input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><input type="button" value="sửa"> <input type="button" value="xóa"></td>
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
