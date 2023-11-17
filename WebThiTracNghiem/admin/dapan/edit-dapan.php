<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>SỬA ĐÁP ÁN</p>
    </div>

    <div class="navbar">
        <div class="container">
            <form action="?act=editda" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $olddata['id'] ?>">
                <div>
                    <label for="">Nội dung đáp án</label> <br>
                    <input type="text" name="content" value="<?= $olddata['content'] ?>">
                </div><br>
                <div>
                    <label for="">Image</label> <br>
                    <?php
                    if ($olddata['image'] != "" && $olddata['image'] != null) {
                        echo "<img width='150' src='../uploads/{$olddata['image']}'>";
                    }

                    ?>
                    <input type="file" name="img">
                </div><br>
          
                <div>
                    <label for="">Đáp án</label> <br>
                    <select name="right_answer" id="">
                        <option value="2" <?php if ($olddata['right_answer'] == '2') echo 'selected'; ?>>Sai</option>
                        <option value="1" <?php if ($olddata['right_answer'] == '1') echo 'selected'; ?>>Đúng</option>
                    </select>
                </div>

                <div>
                    <label for="">Câu hỏi</label> <br>
                    <select name="id_question" id="">
                        <?php foreach ($idcauhoi as $key => $value) : ?>
                            <option value="<?= $value['id_ch']; ?>" <?php if ($olddata['id_question'] == $value['id_ch']) : ?> selected <?php endif; ?>>
                                <?= $value['content'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <br>
                <button type="submit" name="btnSubmit">Xác nhận</button>
            </form>

        </div>

    </div>