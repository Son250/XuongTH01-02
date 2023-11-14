<div class="content-boder-user">
    <div class="title-boder-top-user ">
        <p>Thêm Người Dùng</p>
    </div>
    <form id="registrationForm" action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="user">Tên tài khoản:</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" required>
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
        
        <button type="button" onclick="validateForm()">REGISTER</button>
    </form>
</div>