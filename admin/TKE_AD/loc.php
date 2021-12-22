<?php
    include("connect.php");
if(isset($_POST['filter'])){
                $fromdate = trim($_POST['fromdate']);
                $todate = trim($_POST['todate']);
                $sql1 = "SELECT DISTINCT(hoadon.MaNCC),nhacungcap.TenNCC FROM hoadon JOIN nhacungcap ON hoadon.MaNCC=nhacungcap.MaNCC where TrangThai= 'Đã giao' and NgayHD between date('$fromdate') and date('$todate') limit $page,$rows";
                $result = mysqli_query($conn,$sql1);
                $_SESSION['rate'] = trim($_POST['rate']);
}
mysqli_close($conn);
?>