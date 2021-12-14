<?php 
    include("../admin/connect.php");
    $tieude = ""; 
    $link = "";
    $hinhanh="";
    $tendangnhap="";
   
    $errors = array('tieude'=>'', 'chuyenmuc'=>'','noidung'=>'');

    if(isset($_POST["submit"])){
        $tieude = $_POST["tieude"];
        $link = $_POST["link"];
        $tendangnhap=$_SESSION["name-admin"] ;
        $image_tmp=$_FILES['hinhanh']['tmp_name'];
        $image1=$_FILES['hinhanh']['name'];
        $sql1 = "insert into banner values ('','$tieude','$link','$image1','$tendangnhap') ";
        $old1 =mysqli_query($conn,$sql1);
        move_uploaded_file($image_tmp,'./assets/images/images_banner/'.$image1);
            
    }
?>