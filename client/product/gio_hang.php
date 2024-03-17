<div class="banner-wrapper has_background">
    <img src="client/layout/assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447"
        alt="img">
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
                        <form action="index.php?url=thanh_toan" class="akasha-cart-form" method="post">
                            <input type="hidden" name="id_kh"
                                value="<?= isset($_SESSION["tai_khoan"]["id"]) ? $_SESSION["tai_khoan"]["id"] : "" ?>">
                            <table class="shop_table shop_table_responsive cart akasha-cart-form__contents"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-price">Kích cỡ</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody id="order-cart">
                                    <?php if (isset($_SESSION["tai_khoan"])) {
                                        $tong_gia_gio_hang = 0;
                                        $tong_sl_sp = 0;
                                    ?>
                                    <?php foreach ($ds_san_pham_gio_hang as $sp_gh) :
                                            $fm_gia = number_format($sp_gh["gia"], 0, ',', '.');
                                            $tong_gia = $sp_gh["gia"] * $sp_gh["so_luong"];
                                            $fm_tong_gia = number_format($tong_gia, 0, ',', '.');
                                            $tong_gia_gio_hang += $tong_gia;
                                            $tong_sl_sp += $sp_gh['so_luong'];
                                        ?>
                                    <input type="hidden" name="tong_gia_gio_hang" value="<?= $tong_gia_gio_hang ?>">
                                    <input type="hidden" name="tong_sl_sp" value="<?= $tong_sl_sp ?>">
                                    <input type="hidden" name="id_sp_kc[]" value="<?= $sp_gh['id_sp_kc'] ?>">
                                    <tr class="akasha-cart-form__cart-item cart_item">
                                        <td class="product-remove">
                                            <a onclick="return confirm('Bạn có muốn xoá sản phẩm khỏi giỏ hàng không')" href="index.php?url=xoa_gio_hang&id_gh=<?= $sp_gh['id'] ?>" class="remove">×</a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="assets/upload/<?= $sp_gh["anh"] ?>"
                                                    class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img"
                                                    width="600" height="778"></a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="#"><?= $sp_gh["ten"] ?></a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol"><?= $fm_gia ?></span>
                                                VND</span>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="#"><?= $sp_gh["kich_co"] ?></a>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <input id="soluong_<?= $sp_gh["id"] ?>" type="number" min="1"
                                                max="<?= $sp_gh["sl_sp"] ?>" step="1" value="<?= $sp_gh["so_luong"] ?>"
                                                oninput="updateSoLuong(<?= $sp_gh['id'] ?>,<?= $sp_gh['sl_sp'] ?>)" />
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
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
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <div class="akasha-proceed-to-checkout">
                                        <a href="#" class="checkout-button button alt akasha-forward">
                                            <button style="width: 100%; background: transparent; cursor: pointer;"
                                                type="submit">Thanh toán</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
                            <div class="block-title">
                                <h2 class="product-grid-title">
                                    <span>Sản phẩm bán thêm</span>
                                </h2>
                            </div>
                            <div class="owl-slick owl-products equal-container better-height"
                                data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                                data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                <?php foreach ($ds_san_pham_ban_them as $sp_bt) :
                                    $fm_gia_sp_bt = number_format($sp_bt["gia"], 0, ',', '.');
                                ?>
                                <div class="product-item style-01 post-278 page type-page status-publish hentry">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link" href="#" tabindex="0">
                                                <img class="img-responsive" src="assets/upload/<?= $sp_bt["anh"] ?>"
                                                    alt="Print In White" width="600" height="778">
                                            </a>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="index.php?url=ct_san_pham&id_sp_kc=<?= $sp_bt["id_sp_kc"] ?>&id_th=<?= $sp_bt["id_th"] ?>&id_tl=<?= $sp_bt["id_tl"] ?>&id_sp=<?= $sp_bt["id"] ?>"
                                                    tabindex="0"><?= $sp_bt["ten"] ?></a>
                                            </h3>
                                            <span class="price">
                                                <ins><span class="akasha-Price-amount amount"><span
                                                            class="akasha-Price-currencySymbol"><?= $fm_gia_sp_bt ?></span>
                                                        VND</span></ins>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
function updateSoLuong(id, sl_sp) {
    let newSoLuong = $('#soluong_' + id).val();
    if (newSoLuong <= 0) {
        newSoLuong = 1;
    }
    if (newSoLuong >= sl_sp) {
        newSoLuong = sl_sp;
    }
    $.ajax({
        type: 'POST',
        url: 'client/product/cap_nhat_so_luong.php',
        data: {
            id: id,
            soluong: newSoLuong
        },
        success: function(response) {
            $.post('client/product/gio_hang_moi.php', function(data) {
                $('#order-cart').html(data);
            })
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
}
</script>