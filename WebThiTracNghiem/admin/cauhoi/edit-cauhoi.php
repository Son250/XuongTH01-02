<?php 
if(is_array($cauhoi)){
        extract($cauhoi) ;
}
$hinhpath ="../uploads/".$image;
if (is_file($hinhpath)) {
    $hinh = "<img src='".$hinhpath."' width='100px'>";
} else {
    $hinh = "Không có hình";
}
?>
<div class="container">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cập nhật câu hỏi</a>
        </div>
    </nav>
    <form action="index.php?act=update_ch" method="post" enctype="multipart/form-data">
    <select class="form-select" aria-label="Default select example" name="idcd">
        <option value="0">Chuyên đề</option>
        <?php 
        foreach($listchuyende as $chuyende){
            extract($chuyende);
            if($cauhoi['id_cd'] == $id_cd) $s = "selected"; else $s = "" ;
            echo ' <option value="'.$id_cd.'" '.$s.' >'.$name.'</option>' ;
        }
        ?>
    </select>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Câu hỏi</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="content" value="<?=$content ?>" >
    </div>
    <div class="mb-3">
    <label for="formFile" class="form-label">Hình ảnh</label>
    <input class="form-control" type="file" id="formFile" name="image">
    <?php if (!empty($hinh)) : ?>
        <img id="imagePreview" src="../uploads/<?= $hinhpath ?>" alt="Current Image" style="max-width: 100%; max-height: 200px; margin-top: 10px;">
    <?php else : ?>
        <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px; display: none;">
    <?php endif; ?>
</div>

<script>
    document.getElementById('formFile').addEventListener('change', function () {
        var input = this;
        var imagePreview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            // Handle the case when no new image is selected
            imagePreview.src = (<?php echo !empty($hinh) ? "'../uploads/$hinh'" : "''"; ?>);
            imagePreview.style.display = 'block';
        }
    });
</script>

    <div class="btn-group">
        <input type="hidden" name="id" value="<?php echo $id_ch ?>">
        <input class="btn btn-primary"  type="submit" name="capnhat" value="Cập nhật">
        <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?act=dsch'">Danh sách câu hỏi</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='#'">Danh sách câu trả lời đúng</button>
    </div>
    </form>
</div>