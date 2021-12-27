<?php
    session_start();
    include '../admin/connect.php';
    $gid= $_POST['id'];
   if(isset($gid))
       {
          $sql_sp="SELECT * FROM sanpham WHERE MaSP=$gid";
          $query_sp= mysqli_query($conn, $sql_sp); 
          $row_sp=mysqli_fetch_array($query_sp);
          if(!empty($_SESSION['cart']))                 
          {  if(array_key_exists($gid, $_SESSION['cart']))              
             { 
                  $qr = "SELECT sp.MaSP,ct.TyLeKM FROM sanpham as sp,ctkhuyenmai as ct,khuyenmai as km WHERE sp.MaSP=ct.MaSP and ct.MaKM=km.MaKM and km.TrangThai='Đang khuyến mãi'";
                  $row_km = mysqli_query($conn,$qr);
                  if(mysqli_num_rows($row_km)>0){
                    while($row = mysqli_fetch_array($row_km)){
                      if($row["MaSP"]==$row_sp["MaSP"]) {
                        $_SESSION['cart'][$gid]=array(
                          "id"=>$gid,"name"=>$row_sp['TenSP'],"sl"=>(int) $_SESSION['cart'][$gid]['sl']+$_POST["quantity"],"price"=> 
                           $row_sp['DonGia'],"tylekm"=>(int) $_SESSION['cart'][$gid]['tylekm'], "mancc" => $row_sp['MaNCC'], "tylethue" => $row_sp['TyLeThue']
                          );
                      }
                    }
                  }
                  else {
                    $_SESSION['cart'][$gid]=array(
                      "id"=>$gid,"name"=>$row_sp['TenSP'],"sl"=>(int) $_SESSION['cart'][$gid]['sl'] +$_POST["quantity"],"price"=> 
                       $row_sp['DonGia'],"tylekm"=>0, "mancc" => $row_sp['MaNCC'], "tylethue" => $row_sp['TyLeThue']
                      );
                  }
                 echo 'Đã thêm sản phẩm vào giỏ';
                  
              }
              else
               {
                  $_SESSION['cart'][$gid]=array(
                  "id"=>$gid,"name"=>$row_sp['TenSP'],"sl"=>$_POST["quantity"],"price"=> 
                   $row_sp['DonGia'],"tylekm"=>0, "mancc" => $row_sp['MaNCC'], "tylethue" => $row_sp['TyLeThue']
                );
                $qr = "SELECT sp.MaSP,ct.TyLeKM FROM sanpham as sp,ctkhuyenmai as ct,khuyenmai as km WHERE sp.MaSP=ct.MaSP and ct.MaKM=km.MaKM and km.TrangThai='Đang khuyến mãi'";
                  $row_km = mysqli_query($conn,$qr);
                  if(mysqli_num_rows($row_km)>0){
                    while($row = mysqli_fetch_array($row_km)){
                      if($row["MaSP"]==$row_sp["MaSP"]) {
                        $_SESSION['cart'][$gid]=array(
                          "id"=>$gid,"name"=>$row_sp['TenSP'],"sl"=>$_POST["quantity"],"price"=> 
                           $row_sp['DonGia'],"tylekm"=>(int) $_SESSION['cart'][$gid]['tylekm'] +$row["TyLeKM"], "mancc" => $row_sp['MaNCC'], "tylethue" => $row_sp['TyLeThue']
                          );
                      }
                    }
                  }
                echo 'Đã thêm sản phẩm vào giỏ';
                 
              }
              
          } 
          else
              {
                $_SESSION['cart'][$gid]=array(
                  "id"=>$gid,"name"=>$row_sp['TenSP'],"sl"=>$_POST["quantity"],"price"=> 
                   $row_sp['DonGia'],"tylekm"=>0, "mancc" => $row_sp['MaNCC'], "tylethue" => $row_sp['TyLeThue']
                );
                $qr = "SELECT sp.MaSP,ct.TyLeKM FROM sanpham as sp,ctkhuyenmai as ct,khuyenmai as km WHERE sp.MaSP=ct.MaSP and ct.MaKM=km.MaKM and km.TrangThai='Đang khuyến mãi'";
                $row_km = mysqli_query($conn,$qr);
                if(mysqli_num_rows($row_km)>0){
                  while($row = mysqli_fetch_array($row_km)){
                    if($row["MaSP"]==$row_sp["MaSP"]) {
                      $_SESSION['cart'][$gid]=array(
                        "id"=>$gid,"name"=>$row_sp['TenSP'],"sl"=>$_POST["quantity"],"price"=> 
                         $row_sp['DonGia'],"tylekm"=>(int) $_SESSION['cart'][$gid]['tylekm'] +$row["TyLeKM"], "mancc" => $row_sp['MaNCC'], "tylethue" => $row_sp['TyLeThue']
                        );
                    }
                  }
                }
                echo 'Đã thêm sản phẩm vào giỏ';
                }
      // $keys = array_column($_SESSION['cart'], 'mancc');
      // array_multisort($keys, SORT_ASC, $_SESSION['cart']);  
       }
     else
         {
           header("location:./header.php?url=sanpham");
         }
   
?>
