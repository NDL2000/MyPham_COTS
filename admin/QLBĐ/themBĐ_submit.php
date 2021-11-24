<?php 
    include("../admin/connect.php");
    $tieude = ""; 
    $chuyenmuc = "";
    $noidung = "";
    $hinhanh="";
    $ngaydang="";
    $trangthai="";
    $hinhanh="";
    $tendangnhap="";
   
    $errors = array('tieude'=>'', 'chuyenmuc'=>'','noidung'=>'');

    if(isset($_POST["submit"])){
        $tieude = $_POST["tieude"];
        $chuyenmuc = $_POST["chuyenmuc"];
        $noidung = $_POST["noidung"];
        $trangthai = $_POST["trangthai"];
        $ngaydang = $_POST["ngaydang"];
        $hinhanh = $_POST["hinhanh"];
        $tendangnhap=$_SESSION["name-admin"] ;

           
                $sql1 = "insert into baidang values ('','$tieude','$chuyenmuc','$ngaydang','$hinhanh','$noidung','$trangthai','$tendangnhap') ";
                $old1 =mysqli_query($conn,$sql1);
            
    }
?>