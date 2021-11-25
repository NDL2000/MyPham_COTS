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
        $hinhanh = $_POST["hinhanh"];
        $tendangnhap=$_SESSION["name-admin"] ;

        $sql1 = "insert into banner values ('','$tieude','$link','$hinhanh','$tendangnhap') ";
        $old1 =mysqli_query($conn,$sql1);
            
    }
?>