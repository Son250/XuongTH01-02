<div class="container content-boder-user">
    <div class="title-boder-top-user">
        <p>
            Cập Nhật Người Dùng
        </p>
    </div>
    <form action="?act=edittk" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idtk" value="<?php echo $old_taikhoan['id']; ?>">
        <div>
            <label for="">Tên tài khoản: </label> <br>
            <input type="text" name="user" value="<?php echo $old_taikhoan['username'] ?>">
        </div>
        <div>
            <label for="">Mật khẩu: </label> <br>
            <input type="text" name="password" value="<?php echo  $old_taikhoan['password'] ?>">
        </div>
        <div>
            <div class="address-user">
                <label for="">Địa chỉ: </label> <br>
                <input type="text" name="address" value="<?php echo $old_taikhoan['address'] ?>">
            </div>
        </div>
        <div>
            <div class="email">
                <label for="">Email: </label> <br>
                <input type="text" name="email" value="<?php echo $old_taikhoan['email'] ?>">
            </div>
        </div> <br>
        <div>
            <div class="role">
                <label for="role">Role: </label>
                <select name="role" id="role">
                    <option value="2" <?php if ($old_taikhoan['role'] == "2") : ?> selected <?php endif; ?>>Khách hàng</option>
                    <option value="1" <?php if ($old_taikhoan['role'] == "1") : ?> selected <?php endif; ?>>Admin</option>
                </select>
            </div>
        </div>
        <button name="btn-edit-user">Cập Nhật</button>
    </form>
</div>