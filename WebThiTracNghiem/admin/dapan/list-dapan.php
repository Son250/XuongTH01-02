<div class="container content-boder-user">
    <div class="title-boder-top-user">
        <p>DANH SÁCH ĐÁP ÁN</p>
    </div>

    <div class="navbar">
        <div class="container">
        <a class="btn" href="?act=dsch">Trở về</a>  
        <a class="btn" href="?act=themda&id=<?= $_GET['id'] ?>">Thêm đáp án</a> 
        <hr>
        
            <div>
                <form action="index.php?act=dsda" method="post" enctype="multipart/form-data">

                    <table border="1" class="table">
                        <thead>
                            <tr>
                                <th>Nội dung đáp án</th>
                                <th>Hình ảnh </th>
                                <th>Đáp án (1:Đúng, 2:Sai)</th>
                                <th>Thao tác</th>
                            </tr>

                        </thead>
                        <tbody>
                
                            <div>
                                <p class='bold font-size-16'>Câu hỏi: <?php echo $oldcauhoi['content'] ?></p>
                            </div>
                            <?php foreach ($listdapan as $key => $value) : extract($value) ?>
                                
                                <tr>
                                    <td class="bold">
                                        <?php
                                        if ($value['right_answer'] == 1) {
                                            echo "<p class='green'>$content_dapan</p>";
                                        } else {
                                            echo "<p class='red'>$content_dapan</p>";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($hinhanh_da != "" && $hinhanh_da != null) {
                                            echo "<img width='70' src='../uploads/{$hinhanh_da}'>";
                                        }

                                        ?>
                                    </td>
                                    <td><?php
                                        if ($right_answer == 1) {
                                            echo "<p class='green'>Đúng</p>";
                                        } else {
                                            echo "<p class='red'>Sai</p>";
                                        }
                                        ?></td>

                                    <td><a class="btn" href="?act=editda&idda=<?= $idda ?>">Sửa</a>
                                        <a class="btn" href="?act=deleteda&idda=<?= $idda ?>">Xóa</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </form>
            </div>
        </div>

    </div>