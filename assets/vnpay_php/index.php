<?php
require_once("config.php");
?>
<main style="padding-top: 100px;" class="site-main main-container no-sidebar">
    <div class="container">
        <h3>Tạo mới đơn hàng</h3>
        <div class="table-responsive">
            <form action="index.php?url=tien_hanh_thanh_toan" id="create_form" method="post">
                <input type="hidden" name="id_kh" value="<?= $id_kh ?>">
                <?php
                foreach ($id_sp_kc as $id_sp_kc) {
                    echo '<input type="hidden" name="id_sp_kc[]" value="' . $id_sp_kc . '">';
                }
                ?>
                <div class="form-group">
                    <label for="language">Loại hàng hóa </label>
                    <select name="order_type" id="order_type" class="form-control">
                        <option value="topup">Nạp tiền điện thoại</option>
                        <option value="billpayment">Thanh toán hóa đơn</option>
                        <option value="fashion">Thời trang</option>
                        <option value="other">Khác - Xem thêm tại VNPAY</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_id">Mã hóa đơn</label>
                    <input class="form-control" id="order_id" name="order_id" type="text"
                        value="<?php echo date("YmdHis") ?>" />
                </div>
                <div class="form-group">
                    <label for="ten_nguoi_nhan">Tên người nhận</label>
                    <input class="form-control" id="amount" name="ten_nguoi_nhan" type="text" />
                </div>
                <div class="form-group">
                    <label for="email_nguoi_nhan">Email người nhận</label>
                    <input class="form-control" id="amount" name="email_nguoi_nhan" type="text" />
                </div>
                <div class="form-group">
                    <label for="sdt_nguoi_nhan">Số điện thoại</label>
                    <input class="form-control" id="amount" name="sdt_nguoi_nhan" type="number" />
                </div>
                <div class="form-group">
                    <label for="dc_nguoi_nhan">Địa chỉ</label>
                    <input class="form-control" id="amount" name="dc_nguoi_nhan" type="text" />
                </div>
                <div class="form-group">
                    <label for="ghi_chu">Ghi chú</label>
                    <input class="form-control" id="amount" name="ghi_chu" type="text" />
                </div>
                <div class="form-group">
                    <label for="bank_code">Phương thức thanh toán</label>
                    <select name="pttt" id="bank_code" class="form-control">
                        <option value="" disabled selected>--- PHƯƠNG THỨC THANH TOÁN ---</option>
                        <?php foreach ($all_phuong_thuc_thanh_toan as $pttt) : ?>
                        <option value="<?= $pttt['id'] ?>"><?= $pttt['pttt'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input class="form-control" id="amount" name="amount" type="number"
                        value="<?= $tong_gia_gio_hang ?>" />
                </div>
                <div class="form-group">
                    <label for="so_luong_san_pham">Số lượng</label>
                    <input class="form-control" id="amount" name="so_luong_san_pham" type="number"
                        value="<?= $tong_sl_sp ?>" readonly />
                </div>
                <div class="form-group">
                    <label for="order_desc">Nội dung thanh toán</label>
                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">...</textarea>
                </div>
                <div class="form-group">
                    <label for="bank_code">Ngân hàng</label>
                    <select name="bank_code" id="bank_code" class="form-control">
                        <option value="">Không chọn</option>
                        <option value="NCB"> Ngan hang NCB</option>
                        <option value="AGRIBANK"> Ngan hang Agribank</option>
                        <option value="SCB"> Ngan hang SCB</option>
                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                        <option value="EXIMBANK"> Ngan hang EximBank</option>
                        <option value="MSBANK"> Ngan hang MSBANK</option>
                        <option value="NAMABANK"> Ngan hang NamABank</option>
                        <option value="VNMART"> Vi dien tu VnMart</option>
                        <option value="VIETINBANK">Ngan hang Vietinbank</option>
                        <option value="VIETCOMBANK"> Ngan hang VCB</option>
                        <option value="HDBANK">Ngan hang HDBank</option>
                        <option value="DONGABANK"> Ngan hang Dong A</option>
                        <option value="TPBANK"> Ngân hàng TPBank</option>
                        <option value="OJB"> Ngân hàng OceanBank</option>
                        <option value="BIDV"> Ngân hàng BIDV</option>
                        <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                        <option value="VPBANK"> Ngan hang VPBank</option>
                        <option value="MBBANK"> Ngan hang MBBank</option>
                        <option value="ACB"> Ngan hang ACB</option>
                        <option value="OCB"> Ngan hang OCB</option>
                        <option value="IVB"> Ngan hang IVB</option>
                        <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="language">Ngôn ngữ</label>
                    <select name="language" id="language" class="form-control">
                        <option value="vn">Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thời hạn thanh toán</label>
                    <input class="form-control" id="txtexpire" name="txtexpire" type="text"
                        value="<?php echo $expire; ?>" />
                </div>

                <div class="form-group">
                    <h3>Thông tin hóa đơn (Billing)</h3>
                </div>

                <div class="form-group">
                    <label>Email (*)</label>
                    <input class="form-control" id="txt_billing_email" name="txt_billing_email" type="text"
                        value="<?= $_SESSION['tai_khoan']['email'] ?>" />
                </div>
                <button type="submit" name="redirect" id="redirect" class="btn btn-primary">Thanh
                    toán</button>
            </form>
        </div>
    </div>
</main>