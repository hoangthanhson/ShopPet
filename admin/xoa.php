<?php
require("config.php");
$id = $_GET['id'];
$query = "DELETE from khach_hang where ma_kh='$id'";
$result = $conn->query($query);
if($result){
    header("location:khachhang.php");
    echo "Xóa thành công";
}
else {
    echo "lỗi";
}
?>