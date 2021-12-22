<?php
    include("../admin/connect.php");

    if(isset($_POST['submit'])){
    
        $tyle = $_POST["tyle"];
        $tungay = $_POST["fromdate"];
        $denngay = $_POST["todate"];
            
            $sql = "insert into thue(TyLeThue,TuNgay,DenNgay) values( '$tyle' , '$tungay','$denngay' )";
            $old = mysqli_query($conn,$sql);
        }

    // if(isset($_POST['submit1'])){
    //     header("location:dsthue.php");
    // }

?>