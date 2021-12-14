<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link  rel="stylesheet" href="./assets/css/QLBanner/DSBanner.css"/>
</head>
<body>
    <div class="container-qlbanner">
    <h1 class="title">DANH SÁCH BANNER</h1>
    <table class="table table-hover table-qlbanner">
        <tr class="table-success">
            <th>STT</th>
            <th >Tiêu đề</th>
            <th >Link</th>
            <th >Hình Ảnh</th>
            <th >Xử lý</th>
        </tr>
        <?php 
        include ("../admin/connect.php");

       /* $sql = "SELECT * FROM baidang";
        $kq = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($kq); //So rows trong database
        $rows = 5;  //So rows muon hien thi
        if(isset($_GET['page'])&&$_GET['page']>0){
          $page = ($_GET['page']-1)*$rows;  //Vi tri record 
        }
        else {$page = 1;echo "<script>window.location.href='./index.php?url=DSBĐ&page=1'</script>"; }
        */
            $sql = "Select * from banner";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $count++;  
        ?>
            <tr>
                    <td><?php echo $count ?></td>
                    <td><?php echo $row["TieuDe"] ?></td>
                    <td><?php echo $row["Link"] ?></td>
                    <td><img style="background-image: none;width:25%;"  src="./assets/images/images_banner/<?php echo $row["HinhAnh"] ?>"></td>
                    <td>
                        <a href="./index.php?url=suaBanner&id=<?php echo $row["IdBanner"] ?>"><i class="fas fa-edit"></i></a>
                        <a href="./index.php?url=xoaBanner&id=<?php echo $row["IdBanner"];?>" onclick="return xoa('<?php echo $row['TieuDe']; ?>')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
        <?php }
        }  ?>

        <td colspan="5" align="center">
            <a type="button" href="./index.php?url=themBanner" class="btn btn-secondary btn-qlbanner">Thêm mới </a>
        </td>
    </table>
    </div>    
</body>
</html>

<script>
    function xoa(name) {
        return confirm("Bạn có muốn xóa Banner có tiêu đề: " + name + " ?");
    }
</script>

<?php if (isset($_GET['kq']) && $_GET['kq'] == 1) { ?>
    <script>
        swal("", "Thêm thành công", "success")
    </script>
<?php } ?>

<?php if (isset($_GET['kq']) && $_GET['kq'] == 2) { ?>
    <script>
        swal("", "Cập nhật thành công", "success")
    </script>
<?php } ?>

<?php if (isset($_GET['kq']) && $_GET['kq'] == 3) { ?>
    <script>
        swal("", "Xóa thành công", "success")
    </script>
<?php } ?>
