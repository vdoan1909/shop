<div class="fullwidth-template">
    <div class="slide-home-01">
        <div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            <div class="slide-wrap">
                <img src="client/layout/assets/images/slide2222.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Bộ sưu tập giới hạn</h5>
                            <h1>Mộng mơ</h1>
                            <h2>& Đáng yêu</h2>
                            <a href="#">Mua sắm ngay bây giờ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="client/layout/assets/images/slide11new.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Bán chạy nhất</h5>
                            <h1><span>Hào nhoáng</h1>
                            <h2>& Dễ thương</h2>
                            <a href="#">Mua sắm ngay bây giờ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="client/layout/assets/images/slide333.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Chỉ tuần này thôi</h5>
                            <h1>Siêu giảm giá</h1>
                            <h2>50%</h2>
                            <a href="#">Mua sắm ngay bây giờ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">BÁN CHẠY NHẤT</h3>
                    <div class="subtitle">Chào mừng bạn đến với trang web của chúng tôi - nơi bạn tìm thấy những sản
                        phẩm độc đáo và thú vị, mang đến trải nghiệm mua sắm đặc biệt.
                    </div>
                </div>
            </div>
            <div class="akasha-products style-02">
                <div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:2}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <?php foreach ($san_pham_ban_chay as $sp_bc) :
                        $fm_gia = number_format($sp_bc["gia"], 0, ',', '.');
                    ?>
                        <div class="product-item featured_products style-02 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped">
                            <div class="product-inner tooltip-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="assets/upload/<?= $sp_bc["anh"] ?>" alt="<?= $sp_bc["ten"] ?>" width="270" height="350">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="index.php?url=ct_san_pham&id_sp_kc=<?= $sp_bc["id_sp_kc"] ?>&id_th=<?= $sp_bc["id_th"] ?>&id_tl=<?= $sp_bc["id_tl"] ?>&id_sp=<?= $sp_bc["id"] ?>" tabindex="0"><?= $sp_bc["ten"] ?></a>
                                    </h3>
                                    <span class="akasha-Price-currencySymbol"><?= $fm_gia ?> VND</span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">HÀNG MỚI VỀ</h3>
                    <div class="subtitle">
                        Chào mừng bạn đến với trang web của chúng tôi - nơi bạn tìm thấy những sản phẩm độc đáo và thú
                        vị, mang đến trải nghiệm mua sắm đặc biệt.
                    </div>
                </div>
            </div>
            <div class="akasha-products style-01">
                <div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <?php foreach ($san_pham_moi as $sp_moi) :
                        $fm_gia_moi = number_format($sp_moi["gia"], 0, ',', '.');
                    ?>
                        <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="assets/upload/<?= $sp_moi["anh"] ?>" alt="Black Shirt" width="270" height="350">
                                    </a>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="index.php?url=ct_san_pham&id_sp_kc=<?= $sp_moi["id_sp_kc"] ?>&id_th=<?= $sp_moi["id_th"] ?>&id_tl=<?= $sp_moi["id_tl"] ?>&id_sp=<?= $sp_moi["id"] ?>" tabindex="0"><?= $sp_moi["ten"] ?></a>
                                    </h3>
                                    <span class="akasha-Price-currencySymbol"><?= $fm_gia_moi ?> VND</span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="toast"></div>
<?php
if (isset($_SESSION["successPay"]) && $_SESSION["successPay"] > 0 && !isset($_SESSION['successPayNotified'])) {
    $_SESSION['successPayNotified'] = true;
?>
    <script>
        window.onload = function() {
            FuiToast("😍 Thanh toán thành công xin cảm ơn bạn!", {
                style: {
                    backgroundColor: '#1DC071',
                    color: "#ffffff"
                },
            })
        };
    </script>
<?php
}
?>