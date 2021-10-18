<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require("../config.php");
    $conn = new mysqli($hostname,$username,$password,$dbname);
    $query = "select * from sua";
    $result = $conn->query($query);
    while($row=$result->fetch_array()){
            echo "<table align='center' border='true' width='550px'>";
            echo "<tr>";
            echo "<td colspan='2' align='center' bgcolor='pink' style='color:brown'>".$row['Ten_sua']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"?> <img src="<?php echo $row['Hinh'] ?>" width="100" height="100" alt=""> <?php echo "</td>";
            echo "<td>"."<b>Thành phần dinh dưỡng:</b><br>".$row['TP_Dinh_Duong']."<br>".
            "<b>Lợi ích: </b><br>".$row['Loi_ich'].
            "<b>Trọng lượng: </b>".$row['Trong_luong']." - "
            ."<b>Đơn giá: </b>".$row['Don_gia']."VNĐ"."</td>    ";
            echo "</tr>";
            echo "<td>"."<a href='javascript:history.back()'>Quay lại</a>"."</td>";
            echo "</table>";
    }
?>
    
</body>
</html>