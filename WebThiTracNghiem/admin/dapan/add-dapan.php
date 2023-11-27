<?php
if (is_array($oldcauhoi)) {
    extract($oldcauhoi);
}
$hinhpath = "../uploads/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='200px'>";
} else {
    $hinh = "";
}
?>
<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>THÊM MỚI ĐÁP ÁN</p>
    </div>

    <div class="navbar">
        <div class="container">
            <form action="?act=themda" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_question" value="<?php echo $oldcauhoi['id_ch'] ?>">
                <div class="cauhoi">
                    <label for="formGroupExampleInput" class="form-label">Câu hỏi</label>
                    <div class="row2 mb select">
                        <input type="text" name="content" value="<?php echo $oldcauhoi['content'] ?>">
                    </div> <br>
                    <div class="mb-3">
                        <label class="form-label">Hình ảnh câu hỏi</label> <br>
                        <?php echo $hinh ?>

                    </div>
                </div> <br>

                <!-- Thêm đáp án -->
                <div id="dapan-container">
                    <div class="dapan">
                        <div class="mb-3">
                            <label class="form-label">Nội dung đáp án 1</label>
                            <input type="text" class="form-control" name="content_dapan[]" required>
                            <label for="">Đáp án</label>
                            <select name="right_answer[]" id="">
                                <option value="2">Sai</option>
                                <option value="1">Đúng</option>
                            </select> <br>
                            <input type="file" id="formFile" name="image[]">
                            <br>
                        </div>
                    </div> <br>
                </div>
                <a href="#" onclick="addAnswer()">+Thêm đáp án</a>


                <br>
                <button name="btnSubmit">Xác nhận</button>
            </form>

        </div>

    </div>


    <script>
        let answerCount = 1; // Số đáp án hiện tại, bắt đầu từ 0

        function addAnswer() {
            answerCount++; // Tăng số đáp án lên 1

            const dapanContainer = document.getElementById('dapan-container');

            // Tạo phần tử div mới cho đáp án
            const newAnswerDiv = document.createElement('div');
            newAnswerDiv.classList.add('dapan', 'mb-3');

            // Tạo input cho nội dung đáp án
            const answerLabel = document.createElement('label');
            answerLabel.textContent = `Nội dung đáp án ${answerCount}`;
            const answerInput = document.createElement('input');
            answerInput.type = 'text';
            answerInput.classList.add('form-control');
            answerInput.name = `content_dapan[]`;
            answerInput.required = true;

            // Tạo input cho hình ảnh đáp án

            const imageInput = document.createElement('input');
            imageInput.type = 'file';
            imageInput.name = `image[]`;
            imageInput.accept = 'image/*'; // Chỉ chấp nhận file ảnh

            // Tạo select cho đáp án đúng/sai
            const rightAnswerLabel = document.createElement('label');
            rightAnswerLabel.textContent = 'Đáp án';
            const rightAnswerSelect = document.createElement('select');
            rightAnswerSelect.name = `right_answer[]`;
            const option1 = document.createElement('option');
            option1.value = '2';
            option1.textContent = 'Sai';
            const option2 = document.createElement('option');
            option2.value = '1';
            option2.textContent = 'Đúng';
            rightAnswerSelect.appendChild(option1);
            rightAnswerSelect.appendChild(option2);

            // Thêm input và select vào div mới
            newAnswerDiv.appendChild(answerLabel);
            newAnswerDiv.appendChild(answerInput);
            newAnswerDiv.appendChild(rightAnswerLabel);
            newAnswerDiv.appendChild(rightAnswerSelect);

            newAnswerDiv.appendChild(imageInput);


            // Thêm div mới vào container đáp án
            dapanContainer.appendChild(newAnswerDiv);
        }
    </script>