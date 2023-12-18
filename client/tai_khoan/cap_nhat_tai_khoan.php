<?php
if (isset($thong_tin_tai_khoan)) {
    extract($thong_tin_tai_khoan);
}
?>
<div class="banner-wrapper has_background">
    <img src="client/layout/assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Cập nhật tài khoản</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Trang chủ</span></a></li>
                <li class="trail-item trail-end active"><span>Cập nhật tài khoản</span>
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
                        <div class="u-columns col2-set" id="customer_login">
                            <div style="width: 100%;" class="u-column1 col-1">
                                <span style="display: flex; justify-content: flex-start; align-items: center; column-gap: 15px;">
                                    <?php if ($_SESSION["tai_khoan"]["anh"] != "") { ?>
                                        <img style="width: 84px; height: 84px; object-fit: cover; border-radius: 50%;" src="assets/upload/<?= $_SESSION['tai_khoan']['anh'] ?>" alt="">
                                    <?php } else { ?>
                                        <img style="width: 84px; height: 84px; object-fit: cover; border-radius: 50%;" src="https://inkythuatso.com/uploads/thumbnails/800/2023/03/8-anh-dai-dien-trang-inkythuatso-03-15-26-54.jpg" alt="">
                                    <?php } ?>
                                    <h3>Cập nhật tài khoản</h3>
                                </span>
                                <form action="index.php?url=cap_nhat_tai_khoan" class="akasha-form akasha-form-login login" method="post" enctype="multipart/form-data" novalidate>
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Ảnh&nbsp;<span>*</span></label>
                                        <input type="file" class="akasha-Input akasha-Input--text input-text" name="anh">
                                    </p>

                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Tên&nbsp;<span>*</span></label>
                                        <input type="text" value="<?= $_SESSION["tai_khoan"]["ten"] ?? "" ?>" class="akasha-Input akasha-Input--text input-text" name="ten">
                                    </p>
                                    <span style="color: red;"><?= $errors["ten"] ?? "" ?></span>

                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Email&nbsp;<span>*</span></label>
                                        <input type="email" value="<?= $_SESSION["tai_khoan"]["email"] ?? "" ?>" class="akasha-Input akasha-Input--text input-text" name="email">
                                    </p>
                                    <span style="color: red;"><?= $errors["email"] ?? "" ?></span>

                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label>Địa chỉ&nbsp;<span>*</span></label>
                                        <input type="text" value="<?= $_SESSION["tai_khoan"]["dia_chi"] ?? "" ?>" class="akasha-Input akasha-Input--text input-text" name="dia_chi">
                                    </p>
                                    <span style="color: red;"><?= $errors["dia_chi"] ?? "" ?></span>

                                    <p class="form-row">
                                        <button type="submit" class="akasha-Button button">Cập nhật
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