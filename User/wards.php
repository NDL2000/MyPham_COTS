<?php
    include "../admin/connect.php";
    echo "<select name='wards' class='wards' required=''>";
    echo  "<option value=''>Phường / Xã</option>";
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    $sql = "SELECT * from xaphuong_thitran where maqh='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_array()) {
            echo "<option value='". $rows['xaid']. "'>".$rows['name']."</option>";
    }
    }
    echo '</select>';
    
?>