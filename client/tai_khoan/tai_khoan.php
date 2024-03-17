<div class="banner-wrapper has_background">
    <img src="client/layout/assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Tài khoản</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Trang chủ</span></a></li>
                <li class="trail-item trail-end active"><span>Tài khoản</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="customer_login">
                            <div class="u-column1 col-1">
                                <h2>Đăng nhập</h2>
                                <form action="index.php?url=dang_nhap" class="akasha-form akasha-form-login login" method="post" novalidate>
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Email&nbsp;<span>*</span></label>
                                        <input type="email" class="akasha-Input akasha-Input--text input-text" name="email">
                                    </p>
                                    <span style="color: red;"><?= $errors["email_dang_nhap"] ?? "" ?></span>
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Mật khẩu&nbsp;<span>*</span></label>
                                        <input type="password" class="akasha-Input akasha-Input--text input-text" name="mat_khau">
                                    </p>
                                    <span style="color: red;"><?= $errors["mat_khau_dang_nhap"] ?? "" ?></span>
                                    <span style="color: red;"><?= $errors["dang_nhap"] ?? "" ?></span>
                                    <p class="form-row">
                                        <button type="submit" class="akasha-Button button">Đăng nhập
                                        </button>
                                    </p>
                                    <p class="akasha-LostPassword lost_password">
                                        <a href="index.php?url=quen_mat_khau">Quên mật khẩu</a>
                                    </p>
                                </form>
                            </div>
                            <div class="u-column2 col-2">
                                <h2>Đăng ký</h2>
                                <form action="index.php?url=dang_ky" class="akasha-form akasha-form-register register" method="post" novalidate>
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Email&nbsp;<span>*</span></label>
                                        <input type="email" class="akasha-Input akasha-Input--text input-text" name="email">
                                    </p>
                                    <span style="color: red;"><?= $errors["email"] ?? "" ?></span>
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Mật khẩu&nbsp;<span>*</span></label>
                                        <input type="password" class="akasha-Input akasha-Input--text input-text" name="mat_khau">
                                    </p>
                                    <span style="color: red;"><?= $errors["mat_khau"] ?? "" ?></span>
                                    <span style="color: green;"><?= $success ?? "" ?></span>
                                    <div class="akasha-privacy-policy-text">
                                        <p>Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên
                                            toàn bộ trang web này, để quản lý quyền truy cập vào tài khoản của bạn và
                                            cho các mục đích khác được mô tả trong <a href="#">chính sách bảo mật</a>
                                            của chúng tôi.
                                        </p>
                                    </div>
                                    <p class="akasha-FormRow form-row">
                                        <button type="submit" class="akasha-Button button" value="Register">Đăng ký
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>