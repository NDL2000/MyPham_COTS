<?php 
    include("../admin/connect.php");
    session_start();
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
        $tendangnhap="";


        $flag=0;
        $flag1=0;
        $flag2=0;

        if(empty($tendangnhap)){
            
            $errors['tieude']='Bạn chưa nhập !!!';
            $flag=1;
        }else{

            $sql="Select * from baidang where TieuDe = '$tieude'";
            $old= mysqli_query($conn,$sql);

            if( mysqli_num_rows($old)>0){

                $errors['tieude']='Tiêu đề đã tồn tại !!!';
                $flag=1;

            }else{
                $flag=0;
            }
        }

        if(empty($chuyenmuc)){
            
            $errors['chuyenmuc']='Bạn chưa nhập !!!';
            $flag1=1;
        }else{
            $flag1=0;
        }

        if(empty($noidung)){
            
            $errors['noidung']='Bạn chưa nhập !!!';
            $flag2=1;
        }else{
            $flag2=0;
        }
        
        if($flag==0 && $flag1==0 && $flag2 ==0 ){
            $sql = "insert into baidang values ('$tieude','$chuyenmuc','$ngaydang','$hinhanh','$noidung','$trangthai','$tendangnhap') ";
            $old1=mysqli_query($conn,$sql1);
            if($old1>0){
                echo "<script>window.location.href='./index.php?url=DSBĐ&kq=1'</script>";
            }
        }

    }
?>