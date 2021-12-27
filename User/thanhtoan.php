<?php
include './head.php';
include "../admin/connect.php";
?>
<?php if (isset($_SESSION['user']) == null) echo "<script>window.location.href='../User/list_cart.php'</script>"; ?>
<link rel="stylesheet" href="./assets/css/thanhtoan.css">
<form method="post" action="">
    <div class="order_group">
        <div class="order_info">
            <h3>THÔNG TIN NGƯỜI NHẬN</h3>
            <label>Họ Tên</label>
            <input type="text" name="name" required>
            <label>Địa chỉ</label>
            <select name="provinces" class="provinces" required="">
                <option value="">Tỉnh / Thành phố</option>
                <?php
                $sql = "SELECT * from tinh_thanhpho";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_array()) {
                ?>
                        <option value="<?php echo $rows['matp'] ?>"><?php echo $rows['name'] ?></option>
                <?php }
                } ?>
            </select>
            <?php
            include('./districts.php');
            include('./wards.php');
            ?>
            <input type="text" name="address" required>
            <label>Số điện thoại</label>
            <input type="text" name="phone" required>
            <label>Ghi chú</label>
            <textarea name="comment" cols="45" rows="8"></textarea>
            <label>Phương thức thanh toán</label>
            <input type="radio" id="cod" name="cod" value="" checked><label for="cod">Thanh toán khi nhận hàng</label><br>
            <input type="radio" id="pay" name="pay" value=""><label for="pay">Thanh toán hình thức online</label><br>

        </div>
        <div class="order_product">
            <h3>ĐƠN HÀNG CỦA BẠN</h3>
            <table>
                <thead style="font-size:20px">
                    <tr>
                        <th>Mã NCC</th>
                        <th>SẢN PHẨM</th>
                        <th>SỐ LƯỢNG</th>
                        <th>ĐƠN GIÁ</th>
                        <th>TỶ LỆ KM</th>
                        <th>TỶ LỆ THUẾ</th>
                        <th>TẠM TÍNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $tongtien = 0;
                    $thue = 0;
                    foreach ($_SESSION['product'] as $list) {  ?>
                        <tr>
                            <td><?php echo $list['mancc'] ?></td>
                            <td><?php echo $list['name'] ?></td>
                            <td><?php echo $list['sl'] ?></td>
                            <td><?php echo number_format($list['price'], '0', ',', '.') . "&#8363;" ?></td>
                            <td><?php echo $list['tylekm'] . " &percnt;" ?></td>
                            <td><?php echo $list['tylethue'] . " &percnt;" ?></td>
                            <?php $thanhtien = $list['price'] * $list['sl'] - ($list['price'] * $list['tylekm'] / 100);
                            $ship = 45000;
                            $tongtien = $tongtien + $thanhtien;
                            $thue = $tongtien * $list['tylethue'] / 100;
                            $thanhtien = number_format($thanhtien, '0', ',', '.') . "&#8363;";  ?>
                            <td class="order_tt" style="text-align:right"><?php echo $thanhtien ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="order_tt">Phí vận chuyển</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="order_tt" style="text-align:right"><?php if ($tongtien > 500000) {
                                                                            $ship = 0;
                                                                            echo number_format($ship, '0', ',', '.') . "&#8363;";
                                                                        } else echo number_format($ship, '0', ',', '.') . "&#8363;"; ?></td>
                    </tr>
                    <tr>
                        <td class="order_tt">Tổng tiền thuế</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="order_tt" style="text-align:right"><?php echo number_format($thue, '0', ',', '.') . "&#8363;"; ?></td>
                    </tr>
                    <tr>
                        <td class="order_tt">Thành tiền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="order_total"><?php echo number_format($tongtien + $ship + $thue, '0', ',', '.') . "&#8363;"; ?></td>
                    </tr>
                    <tr>
                        <td class="order_tt">Tổng tiền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="order_total"><?php echo number_format($tongtien + $ship + $thue, '0', ',', '.') . "&#8363;"; ?></td>
                    </tr>
                </tfoot>
            </table>
            <p class="button_order"><input type='submit' name='order' id='order' value='ĐẶT HÀNG'></p>
        </div>
    </div>

</form>
<?php
if (isset($_POST['order'])) {
    $tendangnhap = $_SESSION["user"];
    $NgayHD = date("Y-m-d");
    $GhiChu = $_POST['comment'];
    $TenKH = $_POST['name'];
    $SoDienThoai = $_POST['phone'];
    $matp = $_POST['provinces'];
    $maqh = $_POST['district'];
    $xaid = $_POST['wards'];
    $sql = "select tinh_thanhpho.name as tentp,quan_huyen.name as quanhuyen,xaphuong_thitran.name as xa from tinh_thanhpho,quan_huyen,xaphuong_thitran
            WHERE tinhthanhpho.matp=quanhuyen.matp and quanhuyen.maqh=xaphuongthitran.maqh and tinhthanhpho.matp='$matp'
            and quanhuyen.maqh='$maqh' and xaphuongthitran.xaid='$xaid'";
    $result = mysqli_query($conn1, $sql);
    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_array()) {
            $DiaChi = $_POST['address'] . ", " . $rows['xa'] . ", " . $rows['quanhuyen'] . ", " . $rows['tentp'];
        }
    }
    $arr_ncc = array();
    foreach ($_SESSION['product'] as $list) {
        $arr_ncc[] = $list['mancc'];
    }
    $num_ncc = count(array_unique($arr_ncc));
    for ($i = 0; $i < $num_ncc; $i++) {
        $mancc = $arr_ncc[$i];
        $qr = "insert into hoadon(TenDangNhap,NgayHD,TrangThai,GhiChu,HoTenNN,SoDienThoaiNN,DiaChiNN,MaNCC) values('$tendangnhap','$NgayHD','Chờ xét duyệt','$GhiChu','$TenKH','$SoDienThoai','$DiaChi','$mancc')";
        mysqli_query($conn, $qr);
        $qr1 = "select MaHD from hoadon order by MaHD desc limit 1";
        $kq = mysqli_query($conn, $qr1);
        $row = mysqli_fetch_array($kq);
        $MaHD = $row['MaHD'];
        foreach ($_SESSION['product'] as $list) {
            if ($list['mancc'] == $mancc) {
                $MaSP = $list['id'];
                $GiaGoc = $list['price'];
                $TyLeKM = $list['tylekm'];
                $Sl = $list['sl'];
                $sql = "insert into cthoadon (MaHD,MaSP,TenKH,GiaGoc,TyLeKM,SoLuongMua) values('$MaHD','$MaSP','$TenKH','$GiaGoc','$TyLeKM','$Sl')";
                $sql1 = "update sanpham set SoLuongTon=SoLuongTon-'$Sl' where MaSP='$MaSP'";
                $sql2 = "update ctkhuyenmai set SoLuongKM=SoLuongKM-'$Sl' where MaSP='$MaSP'";
                $sql3 = "update ctkhuyenmai set TyLeKM='0' where MaSP='$MaSP' and SoLuongKM<=0";
                mysqli_query($conn, $sql);
                mysqli_query($conn, $sql1);
                mysqli_query($conn, $sql2);
                mysqli_query($conn, $sql3);
                unset($_SESSION['product'][$list['id']]);
            }
        }
    }
    unset($_SESSION['cart'], $_SESSION['product'], $_SESSION['tongtien'], $_SESSION['thanhtien']);
    echo "<script>alert('Đặt hàng thành công')</script>";
    echo "<script>window.location.href='./list_cart.php'</script>";
}
?>
<?php include './footer.php' ?>
<script src="./assets/js/muahang.js"></script>