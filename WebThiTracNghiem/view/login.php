<!-- Outer Row -->
<div class="col-xl-10 col-lg-12 col-md-9 justify-content-center login" >

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                        </div>
                        <form class="user" action="?act=login" method="post">
                            <p class='red'>
                                <?php
                                if (isset($thongbao)) {
                                    echo $thongbao;
                                }
                                ?>
                            </p>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="username" placeholder="Tên đăng nhập">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Mật khẩu">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Ghi nhớ tài khoản</label>
                                </div>
                            </div>

                            <button name="btnSubmit" type="submit" class="btn btn-primary btn-user btn-block">
                                Đăng nhập
                            </button>
                            <hr>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="?act=register">Tạo tài khoản!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>