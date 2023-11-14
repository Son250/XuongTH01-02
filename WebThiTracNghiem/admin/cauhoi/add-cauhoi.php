<div class="container">
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Thêm câu hỏi</a>
          </div>
        </nav>
        <form action="index.php?act=addch" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Câu hỏi</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Điền câu hỏi" name="content">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Hình ảnh</label>
          <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <!-- <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Câu trả lời 1</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Điền câu trả lời 1" name="dapan1">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Câu trả lời 2</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Điền câu trả lời 2" name="dapan2">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Câu trả lời 3</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Điền câu trả lời 3" name="dapan3">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Câu trả lời 4</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Điền câu trả lời 4" name="dapan4">
        </div>       -->
        <div class="btn-group">

        <input class="mr20" type="submit" name="themch" value="THÊM MỚI">
          <a href="" class="btn btn-primary">Danh sách câu hỏi</a>
          <a href="#" class="btn btn-primary">Danh sách câu trả lời đúng</a>
        </div>
        </form>
        <?php
    if(isset($thongbao)&&($thongbao!=""))
    echo $thongbao;
    ?>
        
   
    </div>