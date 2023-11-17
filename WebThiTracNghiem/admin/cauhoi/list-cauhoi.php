
<div class="container">   
     <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
          <h2>DANH SÁCH CÂU HỎI</h2>
          </div>
     </nav>
   
     <div>
          <table  class="table" >     
               <tr>    
                    <th scope="col">ID</th>
               
                    <th>Câu hỏi</th>
                    <th>Hình ảnh</th>
                    <th>Chuyên đề</th>
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
                    $hinh = "";
               } 
               echo
               '<tr>
                     
                    <td>'.$id_ch.'</td>
                    
                    <td>'.$content.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$id_cd.'</td>
                    <td><a href="'.$suach.'">Sửa</a>
                    <a href="' . $xoach . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');"> Xóa </a>
                    </td>
               </tr>';
               }
          ?>
          </table>
     </div>
     <div class="btn-group">
          <a href="?act=addch" class="btn btn-primary active" aria-current="page">Thêm mới</a>
       
     </div>
</div>

