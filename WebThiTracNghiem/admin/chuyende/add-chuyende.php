<div class="container">
    <h2>THÊM CHUYÊN ĐỀ</h2>
    <form action="index.php?act=add-chuyende" method="post">

        <div class="">
            <label for="">CHUYÊN ĐỀ:</label>
            <input type="text" class="form-control" name="tencd" placeholder="Nhập tên chuyên đề">
        </div>
        <br>

        <a href="index.php?act=dscd"><input type="button" value="Danh sách" class="btn btn-info"> </a>
        <input type="submit" value="Thêm mới" class="btn btn-success" name="themcd">

    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>


</div>