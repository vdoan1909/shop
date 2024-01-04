<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <?php if (isset($thong_tin_quan_tri["anh"])) { ?>
            <img class="app-sidebar__user-avatar" src="../assets/images_sanpham/<?= $thong_tin_quan_tri["anh"] ?>" width="60px" alt="User Image">
        <?php } else { ?>
            <img style="width: 84px; height: 84px; object-fit: cover; border-radius: 50%;" src="https://inkythuatso.com/uploads/thumbnails/800/2023/03/8-anh-dai-dien-trang-inkythuatso-03-15-26-54.jpg" alt="">
        <?php } ?>
        <div>
            <p class="app-sidebar__user-name">
                <b><?= isset($thong_tin_quan_tri["ten"]) ? $thong_tin_quan_tri["ten"] : "ADMIN" ?></b>
            </p>
            <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="index.php">
                <i class='app-menu__icon bx bx-tachometer'></i>
                <span class="app-menu__label">Bảng điều khiển</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item " href="index.php?url=ds_quan_tri">
                <i class="app-menu__icon fa fa-user-shield"></i>
                <span class="app-menu__label">Quản lý quản trị</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item " href="#">
                <i class="app-menu__icon fa fa-user-tie"></i>
                <span class="app-menu__label">Quản lý nhân viên</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item " href="index.php?url=ds_khach_hang">
                <i class="app-menu__icon fa fa-user"></i>
                <span class="app-menu__label">Quản lý khách hàng</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item " href="index.php?url=danh_sach_tl">
                <i class="app-menu__icon fa fa-list"></i>
                <span class="app-menu__label">Quản lý thể loại</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="index.php?url=ds_thuong_hieu">
                <i class="app-menu__icon fa fa-building"></i>
                <span class="app-menu__label">Quản lý thương hiệu</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="index.php?url=ds_san_pham">
                <i class="app-menu__icon fa fa-user-secret"></i>
                <span class="app-menu__label">Quản lý sản phẩm</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="index.php?url=ds_kich_co">
                <i class="app-menu__icon fa fa-ruler-horizontal"></i>
                <span class="app-menu__label">Quản lý kích cỡ</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="index.php?url=ds_don_hang">
                <i class="app-menu__icon fa fa-shopping-cart"></i>
                <span class="app-menu__label">Quản lý đơn hàng</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="index.php?url=ds_tt_dh">
                <i class="app-menu__icon fa fa-check-circle"></i>
                <span class="app-menu__label">Trạng thái đơn hàng</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="index.php?url=ds_pt_tt">
                <i class="app-menu__icon fa fa-credit-card"></i>
                <span class="app-menu__label">Phương thức thanh toán</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="quan-ly-bao-cao.html">
                <i class='app-menu__icon bx bx-pie-chart-alt-2'></i>
                <span class="app-menu__label">Báo cáo doanh thu</span>
            </a>
        </li>

        <li>

            <a class="app-menu__item" href="#">
                <i class='app-menu__icon bx bx-calendar-check'></i>
                <span class="app-menu__label">Lịch công tác </span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="#">
                <i class='app-menu__icon bx bx-cog'></i>
                <span class="app-menu__label">Cài đặt hệ thống</span>
            </a>
        </li>
    </ul>
</aside>