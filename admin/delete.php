<?php
require("config.php");
$id = $_GET['id'];
$query = "DELETE from thu_cung where ma_thu_cung='$id'";
$result = $conn->query($query);
if($result){
    header("location:thucung.php");
    echo "Xóa thành công";
}
else {
    echo "lỗi";
}
?>