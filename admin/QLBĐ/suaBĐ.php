
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1 >CẬP NHẬT BÀI ĐĂNG</h1>
    <?php 

    ?>
    <form action="<?php include("suaBĐ_submit.php"); ?>" method="post">
        <table>
            <tr>
                <td>Tiêu đề :</td>
                <td>
                    <input type="text" name="tieude" value="<?php echo $tieude?>">
                </td>
                <td>
                    <div class="error"><?php echo $errors['tieude']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Chuyên mục :</td>
                <td>
                    <input type="text" name="chuyenmuc" value="<?php echo $chuyenmuc?>">
                </td>
                <td>
                    <div class="error"><?php echo $errors['chuyenmuc']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Ngày đăng :</td>
                <td>
                    <input type="date" name="ngaydang" value="<?php echo $ngaydang?>">
                </td>
            </tr>
            <tr>
                <td>Hình ảnh :</td>
                <td>
                    <input type="file" name="hinhanh" value="<?php echo $hinhanh?>" >
                </td>
            </tr>
            <tr>
                <td>Nội dung :</td>
                <td>
                <textarea name="noidung" cols="30" rows="10" value="<?php echo $noidung?>"><?php echo $noidung?></textarea>
                </td>
                <td>
                    <div class="error"><?php echo $errors['noidung']; ?></div>
                </td>
            </tr>
            <tr>
                <td>Trạng thái :</td>
                <td>
                <select class="" name="trangthai" name="trangthai" >
                        <option value="1" <?php if($trangthai==1) echo "selected=\"selected\""; ?>>Mở</option>
                        <option value="0" <?php if($trangthai==0) echo "selected=\"selected\""; ?>>Khóa</option>
                    </select>
                </td>
            </tr>
            <td colspan="2">
                    <button type="submit" name="submit" class="" onclick="return Edit('<?php echo $tieude ;?>') ">Cập nhật bài đăng</button>
                    <button type="button" onclick="goBack()">Quay về</button>
            </td>
        </table>
    </form>
    
</body>
</html>
<script>
    function Edit(name){
        return confirm("Bạn có muốn cập nhật bài đăng có tiêu đề: " + name + " ?");
    }
    function goBack(){
      window.location.href="./index.php?url=DSBĐ"
}
</script>