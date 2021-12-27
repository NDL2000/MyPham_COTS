<?php
    include "../admin/connect.php";
    echo "<select name='district' class='district' required=''>";
    echo  "<option value=''>Quận / Huyện</option>";
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    $sql = "SELECT * from quan_huyen where matp='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
    while ($rows = $result->fetch_array()) {
        echo "<option value='" . $rows['maqh'] . "'>" . $rows['name'] . "</option>";
    }
    }
    echo '</select>';

?>