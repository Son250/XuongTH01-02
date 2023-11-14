<div class="container">
        
          <nav class="navbar bg-body-tertiary">
               <div class="container-fluid">
               <a class="navbar-brand" href="#">Danh sách câu hỏi</a>
               </div>
          </nav>
                    <table  class="table" >     
                        <tr>
                            <th></th>
                            <th>STT</th>
                            <th>Câu hỏi</th>
                            <th>Hình ảnh</th>
                            <th>Thao tác</th>
                        </tr>
                         
                    <?php 
                    foreach($listcauhoi as $cauhoi){
                        extract($cauhoi);
                        $suach = "index.php?act=editch&id=".$id;
                        $xoach = "index.php?act=xoach&id=".$id;
                        $hinhpath ="../uploads/".$image;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='".$hinhpath."' width='100px'>";
                        } else {
                            $hinh = "Không có hình";
                        }
                        echo 
                        '<tr>
                            <td><input type="checkbox"></td>        
                            <td>'.$id.'</td>
                            <td>'.$content.'</td>
                            <td>'.$hinh.'</td>
                            <td><a href="'.$suach.'" onclick="return confirm("bạn vhawcs chắn muốn xoá")"><input type="button" value="Sửa"></a>
                            <a href="'.$xoach.'"><input type="button" value="Xoá"></a></td>
                         </tr>';
                    }
                    ?>
                    </table>
          <div class="btn-group">
               <a href="?act=editch" class="btn btn-primary active" aria-current="page" >Cập nhật</a>
               <a href="?act=addch" class="btn btn-primary active" aria-current="page">Thêm mới</a>
               <a href="/quanlicauhoi/listcauhoi.html" class="btn btn-primary">Danh sách câu trả lời đúng</a>
             </div>
    </div>
