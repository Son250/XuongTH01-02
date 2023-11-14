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
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Chuyên đề</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" href="#">Câu hỏi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-disabled="true">Trả lời</a>
        </li>
    </ul>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cập nhật câu hỏi</a>
        </div>
    </nav>
    <form action="index.php?act=update_ch" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Câu hỏi</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="content" value="<?=$content ?>" >
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Hình ảnh</label>
        <input class="form-control" type="file" id="formFile" name="image" value="<?=$hinh?>">
    </div>
    <div class="btn-group">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <a href="#" class="btn btn-primary active" aria-current="page" ><input type="submit" name="capnhat" value="Cập nhật"></a>
        <a href="/quanlicauhoi/listcauhoi.html" class="btn btn-primary">Danh sách câu hỏi</a>
        <a href="#" class="btn btn-primary">Danh sách câu trả lời đúng</a>
    </div>
    </form>
    <?php
    if(isset($thongbao)&&($thongbao!=""))
    echo $thongbao;
    ?>
</div>