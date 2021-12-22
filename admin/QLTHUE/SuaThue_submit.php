<?php
    include("../admin/connect.php");


    if(isset($_GET["id"])){

        $ma = $_GET['id'];
        $sql = "Select * from thue where ID = '$ma'";
        $old = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($old);
        //echo $ma;
        //echo "<prE>";
        //print_r($row);
        $mathue = $row[0];
        $tyle = $row[1];
        $tungay = $row[2];
        $denngay = $row[3];
    }

    if(isset($_POST['submit'])){
    
        $mathue = $_POST["mathue"];
        $tyle = $_POST["tyle"];
        $tungay = $_POST["fromdate"];
        $denngay = $_POST["todate"];
        
            $sql1 = "update thue set  TyLeThue = '$tyle' , TuNgay =  '$tungay', DenNgay = '$denngay' where ID = '$mathue'";
            $old1 = mysqli_query($conn,$sql1);
             
        }
    
    
    

  
?>