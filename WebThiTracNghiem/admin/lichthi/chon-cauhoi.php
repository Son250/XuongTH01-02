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
            <thead>
                <tr>
                    <td>STT</td>
                    <td class='chuyen_de'>Chuyên đề</td>
                    <td class='cau_hoi'>Câu hỏi</td>
                    <td>Đề 1</td>

                </tr>
            </thead>

            <tbody>
                <form method="post" action="?act=chon_cauhoi">
                    <input type="text" hidden name='id_dethi' value='1'>Đề 1

                    <!-- Các checkbox cho từng đề thi -->
                    <?php foreach ($listcauhoi as $key => $value) : extract($value) ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $ten_cd ?></td>
                            <td><?= $content ?></td>
                            <td><input type="checkbox" name="selected_ch_de1[]" value="<?= $id_ch ?>"></td>

                        </tr>
                    <?php endforeach; ?>
                    <button type="submit" class="btn" name="btnSubmit">Xác nhận</button>
                </form>

            </tbody>
        </table>
    </div>
</div>