<header class="top-bar text-dark">
	<div class="topbar">

		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-6 col-12 d-lg-block d-none">
					<div class="topbar-social text-center text-md-start topbar-left">
						<ul class="list-inline d-md-flex d-inline-block">
							<li class="ms-10 pe-10"><a href="#"><i class="fa fa-question-circle"></i> Ask a Question</a>
							</li>
							<li class="ms-10 pe-10"><a href="#"><i class="fa fa-envelope"></i> info@EduLearn.com</a>
							</li>
							<li class="ms-10 pe-10"><a href="#"><i class="fa fa-phone"></i> +(1) 123-878-1649</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-12 xs-mb-10">
					<div class="topbar-call text-center text-lg-end topbar-right">
						<ul class="list-inline d-lg-flex justify-content-end">
							<li class="me-10 ps-10 lng-drop">
								<select class="header-lang-bx selectpicker" onchange="location = this.value;">
									<?php if (isset($_SESSION['user'])) { ?>
										<option>Xin chào
											<?php echo $_SESSION['user']['fullname'] ?>
										</option>
										<option>Thông tin cá nhân</option>
										<?php if ($_SESSION['user']['role'] == "1") { ?>
											<option value="../admin/index.php">Đăng nhập Admin</option>
										<?php } ?>
										<option>Quên mật khẩu</option>
										<option value="?act=logout">Đăng xuất</option>
									<?php } else { ?>
										<option value='?act=login'>Đăng nhập</option>
									<?php } ?>
								</select>

							</li>
							<li class="me-10 ps-10 lng-drop">
								<select class="header-lang-bx selectpicker">
									<option data-icon="flag-icon flag-icon-us">Eng USA</option>
									<option data-icon="flag-icon flag-icon-gb">Eng UK</option>
								</select>
							</li>
							<li class="me-10 ps-10"><a href="#"><i class="fa fa-user d-md-inline-block d-none"></i>
									Register</a></li>
							<li class="me-10 ps-10"><a href="?act=login"><i
										class="fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-header">
			<a href="?act=trangchu" class="brand">
				<img src="../../images/logo-light-text5.png" alt="" />
			</a>
			<button class="toggle-bar">
				<span class="ti-menu"></span>
			</button>
		</div>
	<nav hidden class="nav-dark nav-transparent">
		
		<ul class="menu">
			<li class="dropdown">
				<a href="?act=trangchu">Trang chủ</a>

			</li>
			<li>
				<a href="?act=About">About</a>
			</li>
			<li class="dropdown">
				<a href="#">Chuyên đề</a>
				<ul class="dropdown-menu">
					<!-- <li><a href="courses_list.html">Courses List</a></li>
						<li><a href="courses_list_right_sidebar.html">Courses List Right Sidebar</a></li>
						<li><a href="courses_list-map.html">Courses with Map</a></li>
						<li><a href="courses_categories.html">Courses Categories</a></li>
						<li><a href="courses_details.html">Courses Details</a></li>
						<li><a href="courses_details_right_sidebar.html">Courses Details right sidebar</a></li> -->
				</ul>
			</li>
			<li class="megamenu">
				<a href="#">Các trang</a>
				<div class="megamenu-content">
					<div class="row">
						<div class="col-lg-3 col-12">
							<ul class="list-group">
								<li>
									<h4 class="menu-title">User Pages</h4>
								</li>
								<li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
								<li><a href="inovice.html"><i class="ti-arrow-circle-right me-10"></i>Invoice</a></li>
								<li><a href="membership.html"><i class="ti-arrow-circle-right me-10"></i>Membership</a>
								</li>
								<li><a href="mydashboard.html"><i class="ti-arrow-circle-right me-10"></i>My
										Dashboard</a></li>
								<li><a href="staff.html"><i class="ti-arrow-circle-right me-10"></i>Staff</a></li>
								<li><a href="testimonial.html"><i
											class="ti-arrow-circle-right me-10"></i>Testimonial</a></li>
								<li><a href="typography.html"><i class="ti-arrow-circle-right me-10"></i>Typography</a>
								</li>
								<li><a href="user_list.html"><i class="ti-arrow-circle-right me-10"></i>User List</a>
								</li>
								<li><a href="userprofile.html"><i class="ti-arrow-circle-right me-10"></i>User
										Profile</a></li>
								<li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About</a></li>
								<li><a href="contact_us.html"><i class="ti-arrow-circle-right me-10"></i>Contact</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-3 col-12">
							<ul class="list-group">
								<li>
									<h4 class="menu-title">Widgets</h4>
								</li>
								<li><a href="widgets.html"><i class="ti-arrow-circle-right me-10"></i>Widgets</a></li>
								<li><a href="courses_list.html"><i class="ti-arrow-circle-right me-10"></i>Courses
										List</a></li>
								<li><a href="courses_details.html"><i class="ti-arrow-circle-right me-10"></i>Courses
										Details</a></li>
								<li><a href="register.html"><i class="ti-arrow-circle-right me-10"></i>Register</a></li>
								<li><a href="login.html"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
								<li><a href="register_login.html"><i class="ti-arrow-circle-right me-10"></i>Register &
										Login</a></li>
								<li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot
										Password</a></li>
								<li><a href="lockscreen.html"><i class="ti-arrow-circle-right me-10"></i>Lock Screen</a>
								</li>
								<li><a href="maintenance.html"><i class="ti-arrow-circle-right me-10"></i>Under
										Constructions</a></li>
								<li><a href="404.html"><i class="ti-arrow-circle-right me-10"></i>404</a></li>
								<li><a href="500.html"><i class="ti-arrow-circle-right me-10"></i>500</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-12">
							<ul class="list-group">
								<li>
									<h4 class="menu-title">Features</h4>
								</li>
								<li><a href="header_default.html"><i class="ti-arrow-circle-right me-10"></i>Header
										One</a></li>
								<li><a href="header_style2.html"><i class="ti-arrow-circle-right me-10"></i>Header
										Two</a></li>
								<li><a href="header_style3.html"><i class="ti-arrow-circle-right me-10"></i>Header
										Three</a></li>
								<li><a href="header_style4.html"><i class="ti-arrow-circle-right me-10"></i>Header
										Four</a></li>
								<li><a href="header_style5.html"><i class="ti-arrow-circle-right me-10"></i>Header
										Five</a></li>
								<li><a href="footer_style1.html"><i class="ti-arrow-circle-right me-10"></i>Footer
										One</a></li>
								<li><a href="footer_style2.html"><i class="ti-arrow-circle-right me-10"></i>Footer
										Two</a></li>
								<li><a href="footer_style3.html"><i class="ti-arrow-circle-right me-10"></i>Footer
										Three</a></li>
								<li><a href="footer_style4.html"><i class="ti-arrow-circle-right me-10"></i>Footer
										Four</a></li>
								<li><a href="footer_style5.html"><i class="ti-arrow-circle-right me-10"></i>Footer
										Five</a></li>
								<li><a href="footer_style6.html"><i class="ti-arrow-circle-right me-10"></i>Footer
										Six</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-12 d-none d-lg-block">
							<img src="../../images/front-end-img/adv.jpg" class="img-fluid" alt="" />
						</div>
					</div>
				</div>
			</li>
			<li class="dropdown">
				<a href="#">Blog</a>

			</li>
			<li class="dropdown">
				<a href="#">Kì thi</a>

			</li>
			<li>
				<a href="?act=trangchu">Trang chủ</a>
			</li>
			
		</ul>
		


		<div class="wrap-search-fullscreen">
			<div class="container">
				<button class="close-search"><span class="ti-close"></span></button>
				<input type="text" placeholder="Search..." />
			</div>
		</div>
	</nav>
</header>