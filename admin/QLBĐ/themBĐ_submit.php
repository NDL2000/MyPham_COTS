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
        $ngaydang = date("Y-m-d");
        $tendangnhap=$_SESSION["name-admin"] ;
        $image_tmp=$_FILES['hinhanh']['tmp_name'];
        $image1=$_FILES['hinhanh']['name'];
                $sql1 = "insert into baidang values ('','$tieude','$chuyenmuc','$ngaydang','$image1','$noidung','$trangthai','$tendangnhap') ";
                $old1 =mysqli_query($conn,$sql1);
                move_uploaded_file($image_tmp,'./assets/images/images_baidang/'.$image1);
    }
?>