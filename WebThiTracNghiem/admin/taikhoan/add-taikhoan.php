<div class="content-boder-user">
    <div class="title-boder-top-user ">
        <p>Tài khoản</p>
    </div>
   

    <form id="registrationForm" action="?act=addtk" method="post" enctype="multipart/form-data">
    <h3>Thêm mới tài khoản</h3>
        <div>
            <label for="user">Tên tài khoản:</label><br>
            <input type="text" name="user" id="user" required>
        </div>
        <div>
            <label for="password">Mật khẩu:</label><br>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="fullname">Full name:</label><br>
            <input type="text" name="full_name" required>
        </div>
        <div>
            <div class="address-user">
                <label for="address">Địa chỉ:</label><br>
                <input type="text" name="address" id="address">
            </div>
        </div>
        <div>
            <div class="email">
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" required>
            </div>

        </div> <br>
        <div>
            <div class="role">
                <label for="role">Role:</label>
                <select name="role">
                    <option value="1">Admin</option>
                    <option value="2">Khách hàng</option>
                </select>
            </div>
        </div>
        <button name="btn-addtk" onclick="validateForm()">REGISTER</button>

    </form>
</div>