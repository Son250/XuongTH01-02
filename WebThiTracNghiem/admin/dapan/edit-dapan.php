<?php 
if(is_array($dapan)){
        extract($dapan) ;
}else{
   
}
$hinhpath ="../uploads/".$image;
if (is_file($hinhpath)) {
    $hinh = "<img src='".$hinhpath."' width='100px'>";
} else {
    $hinh = "Không có hình";
}

?>

<div class="container ">
        <div class="header">
            <h2>CHỈNH SỬA ĐÁP ÁN</h2>
        </div>
    </div>
    <div class="container">
        <div class="form">
            <div class="form-group"> 
            <form action="index.php?act=update_da" method="post" enctype="multipart/form-data">
            <label for="">Tên kỳ thi: </label> 
            <input type="text" id="" class="form-control" placeholder="Nhập tên kỳ thi..."><br><br>
            <label for="">Chuyên đề: </label>
            <select class="form-control" name="chuyende" id="">
                <option value="">Toán</option>
                <option value="">Văn</option>
                <option value="">Anh</option>
            </select> <br>
            
           <label for="">Câu hỏi: </label> <br>
          <input type="text" name="cauhoi" id="" class="form-control" value="<?= $id_question ?>"> <br>
          File đính kèm(nếu có): <input type="file" name="image" class="form-control-file" id="" value="<?= $hinh ?>"> <br>
           <label for="">Câu trả lời: </label> <br>
         <input type="text" name="traloi" class="form-control" id="" value="<?= $content ?>" > <br>

         <input type="hidden" name="id" value="<?= $id ?>">
          <input type="submit" name="capnhat" class="btn btn-info"  value="Cập nhập">
           <button type="reset" class="btn btn-info">Nhập lại</button>
          <a href="?act=listch"><button type="button" class="btn btn-success">Danh sách câu hỏi</button></a>
          <?php
                   if(isset($thongbao) && $thongbao != ""){
                    echo $thongbao;
                   }
                   ?>
        </form>
        </div>
        </div>
    </div>