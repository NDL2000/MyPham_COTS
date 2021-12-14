<?php
    include '../connect.php';
    if(isset($_POST['name'])){
        $sql = "select TieuDe from banner where TieuDe='".$_POST['name']."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0) echo "Tên tiêu đề đã tồn tại";
    }
?>