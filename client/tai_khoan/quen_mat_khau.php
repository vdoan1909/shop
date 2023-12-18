<div class="banner-wrapper has_background">
    <img src="client/layout/assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Quên mật khẩu</h1>
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
                            <div style="width: 100%; min-height: 350px;" class="u-column1 col-1">
                                <h2>Quên mật khẩu</h2>
                                <form action="index.php?url=quen_mat_khau" class="akasha-form akasha-form-login login" method="post" novalidate>

                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Email&nbsp;<span>*</span></label>
                                        <input type="email" class="akasha-Input akasha-Input--text input-text" name="email">
                                    </p>
                                    <span style="color: red;"><?= $errors["email"] ?? "" ?></span>

                                    <p class="form-row">
                                        <button type="submit" class="akasha-Button button">Lấy lại
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