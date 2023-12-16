<div class="content-boder-user chon_cauhoi">
    <div class="title-boder-top-user">
        <p>CHỌN CÂU HỎI CHO ĐỀ THI</p>
    </div>
    <br>
    <div class="add-user">
        <a href="?act=dslt">
            Trở về
        </a>
        <a href="">
            Chọn tất cả
        </a>
        <a href="">Bỏ chọn tất cả</a>

    </div><br>
    <div class="main-user">
        <table>
            <form method="post" action="?act=chon_cauhoi">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td class='chuyen_de'>Chuyên đề</td>
                        <td class='cau_hoi'>Câu hỏi</td>
                        <?php for($i = 1; $i <= $olddata['so_de_thi']; $i++): ?>
                            <td>Đề <?=$i ?> </td>
                        <?php endfor; ?>
                    </tr>
                </thead>

                <tbody>

                    <input type="text" hidden name='id_lichthi' value='<?= $_GET['idlt'] ?>'>

                    <!-- Các checkbox cho từng đề thi -->
                    <?php foreach ($listcauhoi as $key => $value) : extract($value) ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $ten_cd ?></td>
                            <td><?= $content ?></td>
                            <?php for($i = 1; $i <= $olddata['so_de_thi']; $i++): ?>
                                <td><input type="checkbox" name="selected_ch_de<?= $i ?>[]" value="<?= $id_ch ?>"></td>
                            <?php endfor; ?>
                           

                        </tr>
                    <?php endforeach; ?>
                


                </tbody>
                <button type="submit" class="btn" name="btnSubmit">Xác nhận</button>
            </form>
        </table>
    </div>
</div>