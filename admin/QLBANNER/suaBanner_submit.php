<?php 
    include("../admin/connect.php");
    $tieude = ""; 
    $link = "";
    $hinhanh="";
    $tendangnhap="";
   
    $errors = array('tieude'=>'', 'link'=>'');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql="Select * from banner where IdBanner= '$id'";
        $old=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($old);
        $tieude= $row[1];
        $link = $row[2];
        $hinhanh= $row[3];
    }

    if(isset($_POST["submit"])){
        $tieude = $_POST["tieude"];
        $link = $_POST["link"];
        $tendangnhap=$_SESSION["name-admin"] ;
        $image_tmp=$_FILES['hinhanh']['tmp_name'];
        $image1=$_FILES['hinhanh']['name'];
        $sql1 = "update banner set TieuDe='$tieude',Link='$link',HinhAnh='$image1',TenDangNhap='$tendangnhap' where IdBanner = '$id'";
        $old1 =mysqli_query($conn,$sql1);
        move_uploaded_file($image_tmp,'./assets/images/images_banner/'.$image1);
        if( $old1>0){
        header("location:./index.php?url=DSBanner&kq=2");
    //echo "<script>window.location.href='./index.php?url=DSBĐ&kq=1&page=1'</script>";
        }
            
    }
?>