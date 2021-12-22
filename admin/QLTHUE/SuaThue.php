<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/QLDM/suadm.css" />

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container-suadm">
        <h1 class="title">SỬA THUẾ</h1>
        <br>
        <form action="<?php include("SuaThue_submit.php"); ?>" method="post">

            <table>
                <tr>
                    <td>Mã thuế : </td>
                    <td><input type="text" name="mathue" value="<?php echo $mathue ?>" class="form-control" style="width:100% !important" readonly></td>
                </tr>
                <tr>
                    <td>Tỷ lệ thuế(*) : </td>
                    <td><input type="text" name="tyle" value="<?php echo $tyle ?>" class="form-control" id="name" style="width:100% !important"></td>
                </tr>
                <tr>
                    <td> Từ ngày(*) </td>
                    <td> <input type="date" name="fromdate" id="fromdate" style="width:100%; margin-bottom: 5%;" value="<?php echo $tungay ?>" required></td>
                </tr>
                <tr>
                    <td> Đến ngày(*) </td>
                    <td> <input type="date" name="todate" id="todate" style="width:100%" value="<?php echo $denngay ?>" required></td>
                </tr>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-suadm" onclick="return suaDM('<?php echo $mathue ?>')" id="btn_suadm">Cập nhật</button>
                        <a href="./index.php?url=qldm" class="btn btn-primary btn-suadm">Quay về</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<?php if (isset($old1) && $old1 > 0) {
    echo "<script>window.location.href='./index.php?url=qlthue&kq=2'</script>";
}   ?>
<script>
    function suaDM(name) {
        return confirm("Bạn có muốn cập nhật mã thuế : " + name + " ?");
    }
</script>
<script src="./assets/js/ajax.js"></script>