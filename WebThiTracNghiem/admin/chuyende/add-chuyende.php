<div class="container">
    <h2>THÊM CHUYÊN ĐỀ</h2>
    <form action="index.php?act=add-chuyende" method="post">

        <div class="">
            <label for="">CHUYÊN ĐỀ:</label>
            <input type="text" class="form-control" name="tencd" placeholder="Tên chuyên đề">
        </div>
        <div class="checkbox">

        </div>
        <input type="submit" value="submit"class="btn btn-success" name="themcd">
        <a href="index.php?act=dscd"><input type="button" value="DANH SACH" class="btn btn-info">
        </a>
        
    </form>
    <?php
    if(isset($thongbao)&&($thongbao!=""))
    echo $thongbao;
    ?>
   

</div>
