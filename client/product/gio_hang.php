<div class="banner-wrapper has_background">
    <img src="client/layout/assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Giỏ hàng</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Trang chủ</span></a></li>
                <li class="trail-item trail-end active"><span>Giỏ hàng</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>
                        <form class="akasha-cart-form" method="post">
                            <table class="shop_table shop_table_responsive cart akasha-cart-form__contents" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody id="order-cart">
                                    <?php if (isset($_SESSION["tai_khoan"])) { ?>
                                        <?php foreach ($ds_san_pham_gio_hang as $sp_gh) :
                                            $fm_gia = number_format($sp_gh["gia"], 0, ',', '.');
                                            $tong_gia = $sp_gh["gia"] * $sp_gh["so_luong"];
                                            $fm_tong_gia = number_format($tong_gia, 0, ',', '.');
                                        ?>
                                            <tr class="akasha-cart-form__cart-item cart_item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="885B712">×</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/upload/<?= $sp_gh["anh"] ?>" class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778"></a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="#"><?= $sp_gh["ten"] ?></a>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_gia ?></span>
                                                        VND</span>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <span class="qty-label">Số lượng:</span>
                                                        <div class="control">
                                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                            <input name="so_luong" type="number" value="<?= $sp_gh["so_luong"] ?>" title="Qty" class="input-qty input-text qty text">
                                                            <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
                                                        VND</span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td>
                                                <span>Không có sản phẩm trong giỏ hàng !</span>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <?php if (isset($_SESSION["tai_khoan"])) { ?>
                                    <h2>Cart totals</h2>
                                    <?php foreach ($ds_san_pham_gio_hang as $sp_gh) :
                                        $tong_gia = $sp_gh["gia"] * $sp_gh["so_luong"];
                                        $fm_tong_gia = number_format($tong_gia, 0, ',', '.');
                                    ?>
                                        <table class="shop_table shop_table_responsive" cellspacing="0">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng phụ</th>
                                                    <td data-title="Subtotal"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
                                                            VND</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td data-title="Total"><strong><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
                                                                VND</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <?php endforeach; ?>
                                    <div class="akasha-proceed-to-checkout">
                                        <a href="#" class="checkout-button button alt akasha-forward">
                                            Proceed to checkout</a>
                                    </div>
                                <?php } else { ?>
                                    <table style="display: none;" class="shop_table shop_table_responsive" cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Tổng phụ</th>
                                                <td data-title="Subtotal"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
                                                        VND</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng</th>
                                                <td data-title="Total"><strong><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
                                                            VND</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="display: none;" class="akasha-proceed-to-checkout">
                                        <a href="#" class="checkout-button button alt akasha-forward">
                                            Proceed to checkout</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
                            <div class="block-title">
                                <h2 class="product-grid-title">
                                    <span>Sản phẩm bán thêm</span>
                                </h2>
                            </div>
                            <div class="owl-slick owl-products equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                <div class="product-item style-01 post-278 page type-page status-publish hentry">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="#" tabindex="0">
                                                <img class="img-responsive" src="assets/images/apro51012-1-600x778.jpg" alt="Print In White" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-21%</span></span>
                                                <span class="onnew"><span class="text">New</span></span>
                                            </div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="akasha product compare-button"><a href="#" class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#" tabindex="0">Print In White</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span>
                                            </div>
                                            <span class="price"><del><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>125.00</span></del>
                                                <ins><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>99.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style-01 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="#" tabindex="0">
                                                <img class="img-responsive" src="assets/images/apro71-1-600x778.jpg" alt="Women Bags" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-18%</span></span>
                                                <span class="onnew"><span class="text">New</span></span>
                                            </div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="akasha product compare-button"><a href="#" class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#" tabindex="0">Women Bags</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span>
                                            </div>
                                            <span class="price"><del><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>109.00</span></del>
                                                <ins><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>89.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style-01 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="#" tabindex="0">
                                                <img class="img-responsive" src="assets/images/apro91-1-600x778.jpg" alt="Swing Dress" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onnew"><span class="text">New</span></span>
                                            </div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="akasha product compare-button"><a href="#" class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="#" tabindex="0">Swing Dress</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span>
                                            </div>
                                            <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>89.00</span> – <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>139.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>