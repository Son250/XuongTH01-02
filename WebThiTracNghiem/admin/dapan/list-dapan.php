<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>QUẢN LÝ ĐÁP ÁN</p>
    </div>

    <div class="navbar">
        <div class="container">
            <a class="btn" href="?act=addda">Thêm mới</a> <br>
            <div>
                <form action="index.php?act=dsda" method="post" enctype="multipart/form-data">
                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th>STT </th>
                                <th>Nội dung đáp án</th>
                                <th>Hình ảnh </th>
                                <th>Đáp án (1:Đúng, 2:Sai)</th>
                                <th>Tên câu hỏi</th>
                                <th>Thao tác</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($listdapan as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value['content'] ?></td>
                                    <td><?php
                                        if ($value['image'] != "" && $value['image'] != null) {
                                            echo "<img width='70' src='../uploads/{$value['image']}'>";
                                        }

                                        ?>
                                    </td>
                                    <td><?php
                                        if ($value['right_answer'] == 1) {
                                            echo "Đúng";
                                        } else {
                                            echo "Sai";
                                        }
                                        ?></td>
                                    <td><?= $value['question_content'] ?></td>
                                    
                                    <td><a class="btn" href="?act=editda&idda=<?= $value['idda'] ?>">Sửa</a>
                                        <a class="btn" href="?act=deleteda&idda=<?= $value['idda'] ?>">Xóa</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </form>
            </div>
        </div>

    </div>