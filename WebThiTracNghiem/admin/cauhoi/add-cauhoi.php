<div class="container">
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Thêm câu hỏi</a>
    </div>
  </nav>
  <form action="index.php?act=addch" method="post" enctype="multipart/form-data">
    <div class="row2 mb select">
      <select name="idcd" id="">
        <option value="0">Chuyên đề</option>
        <?php foreach ($listchuyende as $chuyende) {
          extract($chuyende);
          echo '<option value="' . $id_cd . '">' . $name . '</option>';
        } ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Câu hỏi</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Điền câu hỏi" name="content">
    </div>
    <!-- Add an <img> tag for image preview -->
    <div class="mb-3">
      <label for="formFile" class="form-label">Hình ảnh</label>
      <input class="form-control" type="file" id="formFile" name="image">
      <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px; display: none;">
    </div>

    <!-- Add JavaScript to handle image preview -->
    <script>
      document.getElementById('formFile').addEventListener('change', function() {
        var input = this;
        var imagePreview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
          };

          reader.readAsDataURL(input.files[0]);
        } else {
          imagePreview.src = '#';
          imagePreview.style.display = 'none';
        }
      });
    </script>

    <div class="btn-group">
      <input class="btn btn-primary" type="submit" name="themch" value="Thêm mới">
      <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?act=dsch'">Danh sách câu hỏi</button>
      <button type="button" class="btn btn-primary" onclick="window.location.href='#'">Danh sách câu trả lời đúng</button>
    </div>
  </form>
</div>