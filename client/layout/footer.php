<footer id="footer" class="footer style-01">
    <div class="section-001 section-009">
        <div class="container">
            <div class="akasha-newsletter style-01">
                <div class="newsletter-inner">
                    <div class="newsletter-info">
                        <div class="newsletter-wrap">
                            <h3 class="title">BẢN TIN</h3>
                            <h4 class="subtitle">Được giảm giá 30%</h4>
                            <p class="desc">Dòng dõi của thế hệ trẻ sẽ được sinh ra từ những người có quyền lực hoặc vĩ
                                đại</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-010">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Bản quyền 2020 <a href="#">Nguyễn Văn Đoàn</a>. Đã đăng ký Bản quyền.</p>
                </div>
                <div class="col-md-6">
                    <div class="akasha-socials style-01">
                        <div class="content-socials">
                            <ul class="socials-list">
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="index.php">
                <span class="icon">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </span>
                Trang chủ
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="index.php?url=gio_hang">
                <span class="icon">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    <span class="count-icon"><?= $so_luong_san_pham_gio_hang["so_luong"] ?? 0 ?></span>
                </span>
                <span class="text">Giỏ hàng</span>
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<script src="client/layout/assets/js/jquery-1.12.4.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/bootstrap.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/chosen.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/countdown.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/jquery.scrollbar.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/lightbox.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/magnific-popup.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/slick.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/jquery.zoom.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/threesixty.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/jquery-ui.min.js?ver=<?= rand() ?>"></script>
<script src="client/layout/assets/js/mobilemenu.js?ver=<?= rand() ?>"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="client/layout/assets/js/functions.js?ver=<?= rand() ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $(".kich_co strong").click(function() {
            // Remove the class from all other elements
            $(".kich_co strong").removeClass("kich_co-selected");

            // Add the class to the clicked <strong> element
            $(this).addClass("kich_co-selected");

            // Get the value from the clicked <strong> element
            var kichCoId = $(this).next('input[name="id"]').val();

            // Update the value of the hidden input with the clicked kich_co ID
            $("input[name='id_kc']").val(kichCoId);
        });
    });
</script>

</body>

</html>