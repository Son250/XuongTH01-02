<div class="container">


    <div class="container-fluid">
      <h2>Thêm câu hỏi</h2>
    </div>
  
  <form action="index.php?act=addch" method="post" enctype="multipart/form-data">
   
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Câu hỏi</label>
      <input type="text" class="form-control" id="formGroupExampleInput" required placeholder="Điền câu hỏi" name="content">
    </div>
    <!-- Add an <img> tag for image preview -->
    <div class="mb-3">
      <label for="formFile" class="form-label">Hình ảnh</label>
      <input class="form-control" type="file" id="formFile" name="image">
      <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px; display: none;">
    </div>
    <br>


    <div class="row2 mb select">
      <select name="idcd" id="">
        <option value="0">Chuyên đề</option>
        <?php foreach ($listchuyende as $chuyende) {
          extract($chuyende);
          echo '<option value="' . $id_cd . '">' . $name . '</option>';
        } ?>
      </select>
    </div> <br>

    <div class="btn-group">

      <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?act=dsch'">Danh sách câu hỏi</button>
      <input class="btn btn-primary" type="submit" name="themch" value="Thêm mới">
    </div>
  </form>
</div>