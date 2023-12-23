<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="client/layout/assets/images/favicon.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/bootstrap.min.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/animate.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/bootstrap.min.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/chosen.min.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/font-awesome.min.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/jquery.scrollbar.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/lightbox.min.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/magnific-popup.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/slick.min.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/fonts/flaticon.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/megamenu.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/dreaming-attribute.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/style.css?ver=<?= rand() ?>" />
    <link rel="stylesheet" type="text/css" href="client/layout/assets/css/main.css?ver=<?= rand() ?>" />
    <title> <?= $title ?? "" ?> </title>
</head>

<body class="single single-product">
    <header id="header" class="header style-02 header-dark header-transparent header-sticky">
        <div class="header-wrap-stick">
            <div class="header-position">
                <div class="header-middle">
                    <div class="akasha-menu-wapper"></div>
                    <div class="header-middle-inner">
                        <div class="header-search-menu">
                            <div class="block-menu-bar">
                                <a class="menu-bar menu-toggle" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="header-logo-nav">
                            <div class="header-logo">
                                <a href="index.php"><img alt="Akasha" src="client/layout/assets/images/logo.png"
                                        class="logo"></a>
                            </div>
                            <div class="box-header-nav menu-nocenter">
                                <ul id="menu-primary-menu"
                                    class="clone-main-menu akasha-clone-mobile-menu akasha-nav main-menu">
                                    <li id="menu-item-230"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="akasha-menu-item-title" title="Home" href="index.php">Trang chủ</a>
                                    </li>
                                    <li id="menu-item-230"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="akasha-menu-item-title" title="Home"
                                            href="index.php?url=ds_san_pham">Sản phẩm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-control">
                            <div class="header-control-inner">
                                <div class="meta-dreaming">
                                    <ul class="wpml-menu">
                                        <li class="menu-item akasha-dropdown block-language">
                                            <a href="#" data-akasha="akasha-dropdown">
                                                English
                                            </a>
                                            <span class="toggle-submenu"></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#">
                                                        Vietnamese
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="header-search akasha-dropdown">
                                        <div class="header-search-inner" data-akasha="akasha-dropdown">
                                            <a href="#" class="link-dropdown block-link">
                                                <span class="flaticon-magnifying-glass-1"></span>
                                            </a>
                                        </div>
                                        <div class="block-search">
                                            <form role="search" method="get"
                                                class="form-search block-search-form akasha-live-search-form">
                                                <div class="form-content search-box results-search">
                                                    <div class="inner">
                                                        <input autocomplete="off"
                                                            class="searchfield txt-livesearch input" name="s" value=""
                                                            placeholder="Search here..." type="text">
                                                    </div>
                                                </div>
                                                <input name="post_type" value="product" type="hidden">
                                                <input name="taxonomy" value="product_cat" type="hidden">
                                                <div class="category">
                                                    <select title="product_cat" name="product_cat" id="64788262"
                                                        class="category-search-option" tabindex="-1"
                                                        style="display: none;">
                                                        <option value="0">All Categories</option>
                                                        <option class="level-0" value="light">Shoes</option>
                                                        <option class="level-0" value="chair">Accessories</option>
                                                        <option class="level-0" value="table">Bags</option>
                                                        <option class="level-0" value="bed">Life style</option>
                                                        <option class="level-0" value="new-arrivals">New arrivals
                                                        </option>
                                                        <option class="level-0" value="lamp">Summer Sale</option>
                                                        <option class="level-0" value="specials">Specials</option>
                                                        <option class="level-0" value="sofas">Women</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn-submit">
                                                    <span class="flaticon-magnifying-glass-1"></span>
                                                </button>
                                            </form><!-- block search -->
                                        </div>
                                    </div>
                                    <div class="akasha-dropdown-close">x</div>
                                    <div class="menu-item block-user block-dreaming akasha-dropdown">
                                        <a class="block-link" href="index.php?url=tai_khoan">
                                            <span class="flaticon-profile"></span>
                                        </a>
                                        <?php if (isset($_SESSION["tai_khoan"])) { ?>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                                <a href="index.php?url=cap_nhat_tai_khoan">Cập nhật tài khoản</a>
                                            </li>
                                            <li
                                                class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                                <a href="index.php?url=dang_xuat">Đăng xuất</a>
                                            </li>
                                        </ul>
                                        <?php } else { ?>
                                        <ul style="display: none;" class="sub-menu">
                                            <li
                                                class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                                <a href="index.php?url=cap_nhat_tai_khoan">Cập nhật tài khoản</a>
                                            </li>
                                            <li
                                                class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                                <a href="index.php?url=dang_xuat">Đăng xuất</a>
                                            </li>
                                        </ul>
                                        <?php } ?>
                                    </div>
                                    <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                                        <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                                            <a class="block-link link-dropdown" href="#">
                                                <span class="flaticon-bag"></span>
                                                <span
                                                    class="count"><?= $so_luong_san_pham_gio_hang["so_luong"] ?? 0 ?></span>
                                            </a>
                                        </div>
                                        <div class="widget akasha widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <h3 class="minicart-title">Giỏ hàng của bạn<span
                                                        class="minicart-number-items"><?= $so_luong_san_pham_gio_hang["so_luong"] ?? 0 ?></span>
                                                </h3>
                                                <ul class="akasha-mini-cart cart_list product_list_widget">
                                                    <?php if (isset($ds_san_pham_gio_hang)) { ?>
                                                    <?php foreach ($ds_san_pham_gio_hang as $sp_gh) :
                                                            $fm_gia = number_format($sp_gh["gia"], 0, ',', '.');
                                                            $tong_gia = $sp_gh["gia"] * $sp_gh["so_luong"];
                                                            $fm_tong_gia = number_format($tong_gia, 0, ',', '.');
                                                        ?>
                                                    <li class="akasha-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                                        <a href="#">
                                                            <img src="assets/upload/<?= $sp_gh["anh"] ?>"
                                                                class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                                alt="img" width="600"
                                                                height="778"><?= $sp_gh["ten"] ?>&nbsp;
                                                        </a>
                                                        <span class="quantity"><?= $sp_gh["so_luong"] ?> × <span
                                                                class="akasha-Price-amount amount"><span
                                                                    class="akasha-Price-currencySymbol"></span><?= $fm_gia ?></span></span>
                                                    </li>
                                                    <?php endforeach; ?>
                                                    <?php } else { ?>
                                                    <li class="akasha-mini-cart-item mini_cart_item">
                                                        <span>Không có sản phẩm trong giỏ hàng !</span>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                                <p class="akasha-mini-cart__total total"><strong>Tổng phụ:</strong>
                                                    <span class="akasha-Price-amount amount"><span
                                                            class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
                                                        VND</span>
                                                </p>
                                                <p class="akasha-mini-cart__buttons buttons">
                                                    <a href="index.php?url=gio_hang" class="button akasha-forward">Xem
                                                        giỏ hàng</a>
                                                    <a href="checkout.html" class="button checkout akasha-forward">Thanh
                                                        toán</a>
                                                </p>
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
        <div class="header-mobile">
            <div class="header-mobile-left">
                <div class="block-menu-bar">
                    <a class="menu-bar menu-toggle" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="header-search akasha-dropdown">
                    <div class="header-search-inner" data-akasha="akasha-dropdown">
                        <a href="#" class="link-dropdown block-link">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </a>
                    </div>
                    <div class="block-search">
                        <form role="search" method="get" class="form-search block-search-form akasha-live-search-form">
                            <div class="form-content search-box results-search">
                                <div class="inner">
                                    <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                        placeholder="Search here..." type="text">
                                </div>
                            </div>
                            <input name="post_type" value="product" type="hidden">
                            <input name="taxonomy" value="product_cat" type="hidden">
                            <div class="category">
                                <select title="product_cat" name="product_cat" class="category-search-option"
                                    tabindex="-1">
                                    <option value="0">All Categories</option>
                                    <option class="level-0" value="light">Shoes</option>
                                    <option class="level-0" value="chair">Accessories</option>
                                    <option class="level-0" value="table">Bags</option>
                                    <option class="level-0" value="bed">Life style</option>
                                    <option class="level-0" value="new-arrivals">New arrivals</option>
                                    <option class="level-0" value="lamp">Summer Sale</option>
                                    <option class="level-0" value="specials">Specials</option>
                                    <option class="level-0" value="sofas">Women</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-submit">
                                <span class="flaticon-magnifying-glass-1"></span>
                            </button>
                        </form><!-- block search -->
                    </div>
                </div>
                <ul class="wpml-menu">
                    <li class="menu-item akasha-dropdown block-language">
                        <a href="#" data-akasha="akasha-dropdown">
                            <img src="assets/images/en.png" alt="en" width="18" height="12">
                            English
                        </a>
                        <span class="toggle-submenu"></span>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#">
                                    <img src="assets/images/it.png" alt="it" width="18" height="12">
                                    Italiano
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <div class="wcml-dropdown product wcml_currency_switcher">
                            <ul>
                                <li class="wcml-cs-active-currency">
                                    <a class="wcml-cs-item-toggle">USD</a>
                                    <ul class="wcml-cs-submenu">
                                        <li>
                                            <a>EUR</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-mobile-mid">
                <div class="header-logo">
                    <a href="index.html"><img alt="Akasha" src="assets/images/logo.png" class="logo"></a>
                </div>
            </div>
            <div class="header-mobile-right">
                <div class="header-control-inner">
                    <div class="meta-dreaming">
                        <div class="menu-item block-user block-dreaming akasha-dropdown">
                            <a class="block-link" href="#">
                                <span class="flaticon-profile"></span>
                            </a>
                            <ul class="sub-menu">
                                <li
                                    class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                    <a href="#">Dashboard</a>
                                </li>
                                <li
                                    class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                    <a href="#">Orders</a>
                                </li>
                                <li
                                    class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--downloads">
                                    <a href="#">Downloads</a>
                                </li>
                                <li
                                    class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-adchair">
                                    <a href="#">Addresses</a>
                                </li>
                                <li
                                    class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-account">
                                    <a href="#">Account details</a>
                                </li>
                                <li
                                    class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                    <a href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                            <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                                <a class="block-link link-dropdown" href="cart.html">
                                    <span class="flaticon-bag"></span>
                                    <span class="count">3</span>
                                </a>
                            </div>
                            <div class="widget akasha widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span>
                                    </h3>
                                    <ul class="akasha-mini-cart cart_list product_list_widget">
                                        <li class="akasha-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="assets/images/apro134-1-600x778.jpg"
                                                    class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img"
                                                    width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span>150.00</span></span>
                                        </li>
                                        <li class="akasha-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="assets/images/apro1113-600x778.jpg"
                                                    class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img"
                                                    width="600" height="778">Abstract Sweatshirt&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span>129.00</span></span>
                                        </li>
                                        <li class="akasha-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove remove_from_cart_button">×</a>
                                            <a href="#">
                                                <img src="assets/images/apro201-1-600x778.jpg"
                                                    class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img"
                                                    width="600" height="778">Mini Dress&nbsp;
                                            </a>
                                            <span class="quantity">1 × <span class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span>139.00</span></span>
                                        </li>
                                    </ul>
                                    <p class="akasha-mini-cart__total total"><strong>Subtotal:</strong>
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">$</span>418.00</span>
                                    </p>
                                    <p class="akasha-mini-cart__buttons buttons">
                                        <a href="cart.html" class="button akasha-forward">Viewcart</a>
                                        <a href="checkout.html" class="button checkout akasha-forward">Checkout</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>