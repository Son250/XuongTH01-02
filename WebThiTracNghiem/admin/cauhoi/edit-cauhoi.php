
<?php
if (is_array($cauhoi)) {
    extract($cauhoi);
}
$hinhpath = "../uploads/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='200px'>";
}
?>
<div class="container">
    <div class="container-fluid">
        <h2>Cập nhật câu hỏi</h2>
    </div>

    <form action="index.php?act=update_ch" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id_ch ?>">

        <div class="mb-3">
            <label class="form-label">Câu hỏi</label>
            <input type="text" class="form-control" name="content" value="<?= $content ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label> <br>
            <?php echo $hinh ?><br>
            <input class="form-control" type="file" name="image">

        </div> <br>
        <div>

            <select class="form-select" aria-label="Default select example" name="idcd">
                <option value="0">Chuyên đề</option>
                <?php
                foreach ($listchuyende as $chuyende) {
                    extract($chuyende);
                    if ($cauhoi['id_cd'] == $id_cd) $s = "selected";
                    else $s = "";
                    echo ' <option value="' . $id_cd . '" ' . $s . ' >' . $name . '</option>';
                }
                ?>
            </select>

        </div>
        <br> <br>
        <div class="btn-group">
            <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?act=dsch'">Danh sách câu hỏi</button>
            <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
        </div>
    </form>
</div>