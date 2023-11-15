<div class="content-boder-user">
    <div class="title-boder-top-user">
        <p>QUẢN LÝ NGƯỜI DÙNG</p>
    </div>
    <br>
    <div class="add-user">
        <a href="?act=addtk">
            Nhập thêm
        </a>
    </div>
    <div class="main-user">
        <table>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>User</td>
                    <td>Fullname</td>
                    <td>Adress</td>
                    <td>Email</td>
                    <td>ROLE</td>


                    <td>Chức Năng</td>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($listtaikhoan as $key => $taikhoan) {
                    extract($taikhoan);
                    if ($role == 1) {
                        $vaitro = "Admin";
                    } else {
                        $vaitro = "Thành viên";
                    }
                    echo ' <tr>
                        <td>' . $id . '</td>
                        <td>' . $username . '</td>
                        <td>' . $fullname . '</td>
                        <td>' . $address . '</td>
                        <td>' . $email . '</td>
                        <td>' .  $vaitro . '</td>
                        <td>
                            <a href="?act=edittk&idtk=' . $id . '">Sửa</a>
                            <a onclick="hoixoa(' . $id . ')">Xóa</a>
                        </td>
                    </tr>';
                }
                ?>

            </tbody>
        </table>
        <script>
            function hoixoa(id) {
                let ok = confirm("Bạn có thực sự muốn xóa hay không.");
                if (ok) {
                    window.location.href = "?act=dltk&idtk= " + id;
                }
            }
        </script>
        </script>
    </div>
</div>