<?php
 include("connect.php");
 if(isset($_SESSION["MaNCC"])) $mancc = $_SESSION["MaNCC"];
if(isset($_POST['filter'])){
                $fromdate = trim($_POST['fromdate']);
                $todate = trim($_POST['todate']);
                $sql1 = "SELECT * FROM hoadon,thue where TrangThai= 'Đã giao' and MaNCC='$mancc' and NgayHD between date('$fromdate') and date('$todate') and hoadon.NgayHD BETWEEN thue.TuNgay AND thue.DenNgay limit $page,$rows";
                $result = mysqli_query($conn,$sql1);
                
}
mysqli_close($conn);
?>