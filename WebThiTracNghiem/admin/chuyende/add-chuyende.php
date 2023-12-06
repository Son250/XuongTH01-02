<div class="container">
    <h2>THÊM CHUYÊN ĐỀ</h2>
    <form action="index.php?act=add-chuyende" method="post" enctype="multipart/form-data">

        <div class="">
            <label for="">Tên chuyên đề</label>
            <input type="text" class="form-control" name="tencd" placeholder="Nhập tên chuyên đề">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Hình ảnh</label>
            <input class="form-control" type="file" id="formFile" name="image_cd">
        </div>
        <br>
        <div class="mb-3">
            <a href="index.php?act=dscd"><input type="button" value="Danh sách" class="btn btn-info"> </a>
            <input type="submit" value="Thêm mới" class="btn btn-success" name="themcd">
        </div>
        
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>


</div>