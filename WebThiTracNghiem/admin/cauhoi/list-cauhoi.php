<div class="container">   
     <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
          <a class="navbar-brand" href="#">Danh sách câu hỏi</a>
          </div>
     </nav>
     <form action="index.php?act=listsp" method="post">
          <input type="hidden" name="kyw" id="">
          <div class="row2 mb select">
               <select name="idcd" id="">
               <option value="0" selected>Chuyên đề</option>
                    <?php foreach ($listchuyende as $chuyende){
                    extract($chuyende);
                    echo '<option value="'.$id_cd.'">'.$name.'</option>';
                    }?>
               </select>
          </div>
     </form>
     <div>
          <table  class="table" >     
               <tr>
                    <th></th>
                    <th scope="col">STT</th>
                    <th>Chuyên đề</th>
                    <th>Câu hỏi</th>
                    <th>Hình ảnh</th>
                    <th>Thao tác</th>
               </tr>     
          <?php 
               foreach($listcauhoi as $cauhoi){
               extract($cauhoi);
               $suach = "index.php?act=editch&id=".$id_ch;
               $xoach = "index.php?act=xoach&id=".$id_ch;
               $hinhpath ="../uploads/".$image;
               if (is_file($hinhpath)) {
                    $hinh = "<img src='".$hinhpath."' width='100px'>";
               } else {
                    $hinh = "Không có hình";
               } 
               echo
               '<tr>
                    <td><input type="checkbox"></td>         
                    <td>'.$id_ch.'</td>
                    <td>'.$id_cd.'</td>
                    <td>'.$content.'</td>
                    <td>'.$hinh.'</td>
                    <td><a href="'.$suach.'"><input type="button" value="Sửa"></a>
                    <a href="' . $xoach . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
                    <input type="button" value="Xóa">
                </a>
                    </td>
               </tr>';
               }
          ?>
          </table>
     </div>
     <div class="btn-group">
          <a href="?act=addch" class="btn btn-primary active" aria-current="page">Thêm mới</a>
          <a href="/quanlicauhoi/listcauhoi.html" class="btn btn-primary">Danh sách câu trả lời đúng</a>
     </div>
</div>
