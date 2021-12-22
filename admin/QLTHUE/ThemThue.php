<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thuế</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/QLDM/themdm.css" />
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container-themdm">
        <h1 class="title">THÊM THUẾ</h1>
        <br>
        <form action=" <?php include("ThemThue_submit.php"); ?>" method="post">

            <table class="table-themdm">
                <tr>
                    <td>Tỷ lệ thuế(*) : </td>
                    <td><input type="numeric" name="tyle" class="form-control" required></td>
                </tr>
                <tr>
                <tr>
                <tr>
                    <td> Từ ngày(*) </td>
                    <td> <input type="date" name="fromdate" id="fromdate" style="width:100%; margin-bottom: 5%;" required></td>
                </tr>
                <tr>
                    <td> Đến ngày(*) </td>
                    <td> <input type="date" name="todate" id="todate" style="width:100%" required></td>
                </tr>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-themdm">Thêm thuế</button>

                    </td>
                </tr>
            </table>

        </form>
    </div>
</body>
<?php if (isset($old) && $old > 0) {
    echo "<script>window.location.href='./index.php?url=qlthue&kq=1&page=1'</script>";
} ?>

</html>