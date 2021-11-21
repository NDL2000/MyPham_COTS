<?php
    if(isset($_SESSION["admin"]))
    unset($_SESSION['admin']);
    if(isset($_SESSION["admin-NCC"]))
    unset($_SESSION['admin-NCC']);
    echo "<script>window.location.href='../DangNhap/dangnhap.php'</script>"
?>