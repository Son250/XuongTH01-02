<div class="container">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <h2>DANH SÁCH ĐỀ THI</h2>
        </div>
    </nav>

    <div>
        <table class="table table_dsch">
            <tr>
                <th scope="col">STT</th>
                <th>Tên kỳ thi</th>
                <th>Tên đề thi</th>
                <th>Các câu hỏi</th>
                <th>Thao tác</th>
            </tr>

            <?php
            $previousTestId = null;
            $previousExamId = null;
            foreach ($dsdt as $key => $value) : extract($value) ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td>
                        <?php
                        // Kiểm tra nếu đề thi hiện tại khác đề thi trước đó thì mới hiển thị tên kỳ thi
                        if ($id_lichthi != $previousExamId) {
                            echo $ten_kythi;
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        // Kiểm tra nếu đề thi hiện tại khác đề thi trước đó thì mới hiển thị tên đề thi
                        if ($id != $previousTestId) {
                            echo $ten_de;
                        }
                        ?>
                    </td>
                    <td><?= $ten_cauhoi . "</br>" ?></td>
                    <td>
                        <a class="btn" href="">Sửa</a>
                        <a class="btn" href="">Xóa</a>
                    </td>
                </tr>
                <?php
                $previousTestId = $id;
                $previousExamId = $id_lichthi;
                ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>
