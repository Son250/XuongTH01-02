<?php
if (is_array($a)) {
    extract($a);
}
$hinhpath = "../uploads/" . $image_cd;
if (is_file($hinhpath)) {
    $hinh_cd = "<img src='" . $hinhpath . "' width='200px'>";
}else{
    $hinh_cd = "";
}
?>
<div class="container">
    <h2>CẬP NHẬP CHUYÊN ĐỀ</h2><br>
    <form action="index.php?act=updatecd" method="post" enctype="multipart/form-data">

        <div class="">
            <label for="">CHUYÊN ĐỀ:</label>
            <input type="text" class="form-control" name="tencd" value="<?php if (isset($name) && ($name != "")) echo $name ?>">
        </div><br>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label> <br>
            <?php echo $hinh_cd ?><br>
            <input class="form-control" type="file" name="image_cd">
        </div>
        <input type="hidden" name="id_cd" value="<?php if (isset($id_cd) && ($id_cd > 0)) echo $id_cd; ?>">

        <br>   <br> 


        <a class="btn" href="index.php?act=dscd">Danh sách</a>
        <input type="submit" name="capnhat" value="Cập nhật" class='btn'>

    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>


</div>