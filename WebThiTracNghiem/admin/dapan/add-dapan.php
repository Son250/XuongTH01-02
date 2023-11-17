<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>THÊM MỚI ĐÁP ÁN</p>
    </div>

    <div class="navbar">
        <div class="container">
            <form action="?act=addda" method="post" enctype="multipart/form-data">
                <div>
                    <label for="">Nội dung đáp án</label> <br>
                    <input type="text" name="content">
                </div><br>
                <div>
                    <label for="">Image</label> <br>
                    <input type="file" name="img">
                </div><br>
                <div>
                    <label for="">Đáp án</label> <br>
                    <select name="right_answer" id="">
                        <option value="2">Sai</option>
                        <option value="1">Đúng</option>
                    </select>
                </div><br>
                <div>
                    <label for="">Câu hỏi</label> <br>
                    <select name="id_question" id="">
                        <?php foreach ($idcauhoi as $key => $value) : ?>
               
                            <option value="<?= $value['id_ch'] ?>"><?= $value['content'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <br>
                <button type="submit" name="btnSubmit">Xác nhận</button>
            </form>

        </div>

    </div>