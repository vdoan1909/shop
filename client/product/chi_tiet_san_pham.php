<?php
extract($ct_san_pham);
extract($kich_co_san_pham);
$fm_gia = number_format($ct_san_pham["gia"], 0, ',', '.');
?>
<div style="padding-top: 100px;" class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="akasha-notices-wrapper"></div>
                <div id="product-27"
                    class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div
                                    class="akasha-product-gallery akasha-product-gallery--with-images akasha-product-gallery--columns-4 images">
                                    <div class="flex-viewport">
                                        <figure class="akasha-product-gallery__wrapper">
                                            <div class="akasha-product-gallery__image">
                                                <img alt="img" src="assets/upload/<?= $ct_san_pham["anh"] ?>">
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title"><?= $ct_san_pham["ten"] ?></h1>
                                <p class="price">
                                    <span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol"></span><?= $fm_gia ?></span> VND<span
                                        class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol"></span></span>
                                </p>
                                <div class="akasha-product-details__short-description">
                                    <p><?= $ct_san_pham["mo_ta"] ?></p>
                                </div>
                                <form action="index.php?url=them_gio_hang" class="variations_form cart" id="myForm"
                                    method="post">
                                    <div style="margin: 20px 0;" class="d-flex align-items-center mb-30">
                                        <?php foreach ($kich_co_san_pham as $kc) : ?>
                                        <span class="kich_co">
                                            <strong><?= $kc["kich_co"] ?></strong>
                                            <input type="hidden" name="id" value="<?= $kc["id"] ?>">
                                        </span>
                                        <input type="hidden" name="id_kc" value="">
                                        <input name="id_sp" value="<?= $ct_san_pham["id"] ?>" type="hidden">
                                        <input type="hidden" name="id_sp_kc" value="<?= $_GET["id_sp_kc"] ?>">
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="single_variation_wrap">
                                        <div class="akasha-variation single_variation"></div>
                                        <div
                                            class="akasha-variation-add-to-cart variations_button akasha-variation-add-to-cart-disabled">
                                            <div class="quantity">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="text" data-step="1" min="0" max="" name="so_luong"
                                                        value="0" title="Qty" class="input-qty input-text qty text"
                                                        size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="single_add_to_cart_button button alt disabled akasha-variation-selection-needed">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="akasha-share-socials">
                                    <h5 class="social-heading">Share: </h5>
                                    <a target="_blank" class="facebook" href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" class="pinterest" href="#"> <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a target="_blank" class="googleplus" href="#"><i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="akasha-tabs akasha-tabs-wrapper">
                        <ul class="tabs dreaming-tabs" role="tablist">
                            <li class="description_tab active" id="tab-title-description" role="tab"
                                aria-controls="tab-description">
                                <a href="#tab-description">Description</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Reviews (0)</a>
                            </li>
                        </ul>
                        <div class="akasha-Tabs-panel akasha-Tabs-panel--description panel entry-content akasha-tab"
                            id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Description</h2>
                        </div>
                        <div class="akasha-Tabs-panel akasha-Tabs-panel--reviews panel entry-content akasha-tab"
                            id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="akasha-Reviews">
                                <div id="comments">
                                    <h2 class="akasha-Reviews-title">Reviews</h2>
                                    <p class="akasha-noreviews">There are no reviews yet.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Be the first to review
                                                “T-shirt with skirt”</span>
                                            <form id="commentform" class="comment-form">
                                                <p class="comment-notes"><span id="email-notes">Your email adchair will
                                                        not be published.</span>
                                                    Required fields are marked <span class="required">*</span></p>
                                                <p class="comment-form-author">
                                                    <label for="author">Name&nbsp;<span
                                                            class="required">*</span></label>
                                                    <input id="author" name="author" value="" size="30" required=""
                                                        type="text">
                                                </p>
                                                <p class="comment-form-email"><label for="email">Email&nbsp;
                                                        <span class="required">*</span></label>
                                                    <input id="email" name="email" value="" size="30" required=""
                                                        type="email">
                                                </p>
                                                <p class="comment-form-comment"><label for="comment">Your
                                                        review&nbsp;<span class="required">*</span></label><textarea
                                                        id="comment" name="comment" cols="45" rows="8"
                                                        required=""></textarea></p><input name="wpml_language_code"
                                                    value="en" type="hidden">
                                                <p class="form-submit"><input name="submit" id="submit" class="submit"
                                                        value="Submit" type="submit"> <input name="comment_post_ID"
                                                        value="27" id="comment_post_ID" type="hidden">
                                                    <input name="comment_parent" id="comment_parent" value="0"
                                                        type="hidden">
                                                </p>
                                            </form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 dreaming_related-product">
                <div class="block-title">
                    <h2 class="product-grid-title">
                        <span>Sản Phẩm Cùng Loại</span>
                    </h2>
                </div>
                <div class="owl-slick owl-products equal-container better-height"
                    data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                    data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <?php foreach ($san_pham_cung_loai as $sp_cl) :
                        $fm_gia_sp_cl = number_format($sp_cl["gia"], 0, ',', '.');
                    ?>
                    <div
                        class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#" tabindex="0">
                                    <img class="img-responsive" src="assets/upload/<?= $sp_cl["anh"] ?>"
                                        alt="Long Oversized" width="600" height="778">
                                </a>
                                <div class="group-button">
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="index.php?url=ct_san_pham&id_sp_kc=<?= $sp_cl["id_sp_kc"] ?>&id_th=<?= $sp_cl["id_th"] ?>&id_tl=<?= $sp_cl["id_tl"] ?>&id_sp=<?= $sp_cl["id"] ?>"
                                        tabindex="0"><?= $sp_cl["ten"] ?></a>
                                </h3>
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol"></span><?= $fm_gia_sp_cl ?>
                                        VND</span></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 akasha_dreaming_upsell-product">
                <div class="block-title">
                    <h2 class="product-grid-title">
                        <span>Sản Phẩm Bán Thêm</span>
                    </h2>
                </div>
                <div class="owl-slick owl-products equal-container better-height"
                    data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                    data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <?php foreach ($san_pham_ban_them as $sp_bt) :
                        $fm_gia_sp_bt = number_format($sp_bt["gia"], 0, ',', '.');
                    ?>
                    <div
                        class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#" tabindex="0">
                                    <img class="img-responsive" src="assets/upload/<?= $sp_bt["anh"] ?>"
                                        alt="Mini Dress" width="600" height="778">
                                </a>
                                <div class="group-button">
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_external add_to_cart_button">Buy
                                            it on Amazon</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="index.php?url=ct_san_pham&id_sp_kc=<?= $sp_bt["id_sp_kc"] ?>&id_th=<?= $sp_bt["id_th"] ?>&id_tl=<?= $sp_bt["id_tl"] ?>&id_sp=<?= $sp_bt["id"] ?>"
                                        tabindex="0"><?= $sp_bt["ten"] ?></a>
                                </h3>
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol"><?= $fm_gia_sp_bt ?></span>
                                        VND</span></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>