<div class="content-boder-user">
    <div class="title-boder-top-user ">
        <p>Thêm Người Dùng</p>
    </div>
    <form id="registrationForm" action="?act=addtk" method="post" enctype="multipart/form-data">
        <div>
            <label for="user">Tên tài khoản:</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="fullname">Full name:</label>
            <input type="text" name="full_name" required>
        </div>
        <div>
            <div class="address-user">
                <label for="address">Địa chỉ:</label>
                <input type="text" name="address" id="address">
            </div>
        </div>
        <div>
            <div class="email">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
        </div>
        <div>
            <div class="role">
                <label for="role">Role:</label>
                <select name="role">
                    <option value="">Admin</option>
                    <option value="">Khách hàng</option>
                </select>
            </div>
        </div>
        <button name="btn-addtk" onclick="validateForm()">REGISTER</button>
    </form>
</div>