
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link  rel="stylesheet" href="./assets/css/QLBanner/themBanner.css"/>
    <title>Document</title>
</head>
<body>
    <h1 class="title">THÊM BANNER</h1>
    <form action="<?php include("themBanner_submit.php"); ?>" method="post" class="form_themBanner">
        <table>
            <tr>
                <td>Tiêu đề(*) :</td>
                <td>
                    <input type="text" name="tieude" id="name" value="<?php echo $tieude?>" class="form-control " required>
                </td>
                <td>
                    <div class="error"></div>
                </td> 
            </tr>
            <tr>
                <td>Link(*) :</td>
                <td>
                    <input type="text" name="link" value="<?php echo $link?>" class="form-control " required>
                </td>               
            </tr>
            <tr>
                <td>Hình ảnh :</td>
                <td>
                    <input type="file" name="hinhanh" value="<?php echo $hinhanh?>" class="form-control" required>
                </td>
            </tr>
            <td colspan="2">
                    <button type="submit" name="submit" id="btn_Banner" class="btn btn-primary btn-themBanner">Thêm banner</button>
                    <button type="button" onclick="goBack()" class="btn btn-primary btn-themBanner">Quay về</button>
            </td>
        </table>
    </form>
    <?php if(isset($old1)&&$old1>0){echo "<script>window.location.href='./index.php?url=DSBanner&kq=1&page=1'</script>";} ?>
</body>
</html>
<script>
    function goBack(){
      window.location.href="./index.php?url=DSBanner"
}
</script>
<script src="./assets/js/ajax.js"></script>