
<?php
if(is_array($a)){
    extract($a);
}
 ?>
 <div class="container">
    <h2>CẬP NHẬP CHUYÊN ĐỀ</h2>
    <form action="index.php?act=updatecd" method="post">

        <div class="">
            <label for="">CHUYÊN ĐỀ:</label>
            <input type="text" class="form-control" name="tencd"
               value="<?php if(isset($name)&&($name!="")) echo $name ?>">
            </div>
            <div class="checkbox">

            </div>
            <input type="hidden" name="id_cd" value="<?php if (isset($id_cd) && ($id_cd > 0)) echo $id_cd; ?>">
        <input type="submit" name="capnhat" value="CẬP NHẬP">
        <input type="reset" value="NHẬP LẠI ">
        <a href="index.php?act=dscd"><input type="button" value="DANH SACH"></a>
        </a>

    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>


</div>