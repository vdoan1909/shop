<div class="banner-wrapper has_background">
    <img src="client/layout/assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447"
        alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Danh sách sản phẩm</h1>
    </div>
</div>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <form action="index.php" class="row" method="get">
            <input type="hidden" name="url" value="ds_san_pham">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="sampleTable_length">
                    <label>Thể loại
                        <select id="lengthSelector" name="the_loai" aria-controls="sampleTable"
                            class="form-control form-control-sm" fdprocessedid="3g6j95">
                            <option value="0"
                                <?= !isset($_GET["the_loai"]) || (isset($_GET["the_loai"]) && $_GET["the_loai"] == 0) ? 'selected' : '' ?>>
                                Tất cả
                            </option>
                            <?php foreach ($ds_the_loai as $the_loai) : ?>
                            <option value="<?= $the_loai["id"] ?>"
                                <?= isset($_GET["the_loai"]) && $_GET["the_loai"] == $the_loai["id"] ? 'selected' : '' ?>>
                                <?= $the_loai["ten_loai"] ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="sampleTable_filter" class="dataTables_filter">
                    <label>Tìm kiếm:
                        <input type="text" name="ten_san_pham" class="form-control form-control-sm"
                            aria-controls="sampleTable"
                            value="<?= isset($_GET["ten_san_pham"]) ? $_GET["ten_san_pham"] : '' ?>">
                    </label>
                    <button style="height: 48px;" class="btn btn-save" type="submit">Tìm kiếm</button>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="auto-clear equal-container better-height akasha-products">
                <ul class="row products columns-3">
                    <?php foreach ($ds_san_pham as $san_pham) :
                        $fm_gia = number_format($san_pham["gia"], 0, ',', '.');
                    ?>
                    <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                        data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#">
                                    <img class="img-responsive" src="assets/upload/<?= $san_pham["anh"] ?>"
                                        alt="<?= $san_pham["ten"] ?>" width="600" height="778">
                                </a>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a
                                        href="index.php?url=ct_san_pham&id_sp_kc=<?= $san_pham["id_sp_kc"] ?>&id_th=<?= $san_pham["id_th"] ?>&id_tl=<?= $san_pham["id_tl"] ?>&id_sp=<?= $san_pham["id"] ?>"><?= $san_pham["ten"] ?></a>
                                </h3>
                                <span class="akasha-Price-currencySymbol"><?= $fm_gia ?> VND</span>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>