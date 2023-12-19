<?php
session_start();
include "../../model/pdo.php";
include "../../model/san_pham_kich_co/san_pham_kich_co.php";
include "../../model/san_pham/san_pham.php";

$ds_san_pham_gio_hang = san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);
?>

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
        <a href="#"><img src="assets/upload/<?= $sp_gh["anh"] ?>"
                class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img" width="600" height="778"></a>
    </td>
    <td class="product-name" data-title="Product">
        <a href="#"><?= $sp_gh["ten"] ?></a>
    </td>
    <td class="product-price" data-title="Price">
        <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_gia ?></span>
            VND</span>
    </td>
    <td class="product-quantity" data-title="Quantity">
        <input id="soluong_<?= $sp_gh["id"] ?>" type="number" min="1" max="<?= $sp_gh["sl_sp"] ?>" step="1"
            value="<?= $sp_gh["so_luong"] ?>" oninput="updateSoLuong(<?= $id ?>,<?= $sp_gh['sl_sp'] ?>)" />
    </td>

    <td class="product-subtotal" data-title="Total">
        <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol"><?= $fm_tong_gia ?></span>
            VND</span>
    </td>
</tr>
<?php endforeach; ?>