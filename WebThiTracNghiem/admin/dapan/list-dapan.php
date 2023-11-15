<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>QUẢN LÝ ĐÁP ÁN</p>
    </div>

    <div class="navbar">
        <div class="container">
            
            <div class="content">
                <form action="index.php?act=dsda" method="post" enctype="multipart/form-data">
                <table border="1" class="table">
                    <tr>
                      
                        <th>Mã câu hỏi</th>
                        <th>Nội dung câu hỏi</th>
                        <th>Hình ảnh </th>
                        <th>Nội dung đáp án</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php foreach ($listdapan as $dapan){
                        extract($dapan);
                       
                        $suada = "index.php?act=editda&id=".$id;
                        $xoada = "index.php?act=xoada&id=".$id;
                        $hinhpath ="../uploads/".$image;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='".$hinhpath."' width='100px'>";
                        } else {
                            $hinh = "Không có hình";
                        }
                        echo '
                        <tr>
                   
                        <td>'.$id.'</td>
                        <td>'.$id_question.'</td>
                        <td><img src="'.$hinh.'" alt=""></td>
                        <td>'.$content.'</td>
                        <td>
                            <a href="'.$suada.'"><input type="button"  class="btn btn-success"  value="Sửa"></a>
                            <a href="'.$xoada.'"><input type="button"  class="btn btn-success"  value="Xoá"></a>
                        </td>
                    </tr>
                        ' ;
                    } ?>
                    
               
                </table>
                </form>
            </div>
        </div>

    </div>
  

