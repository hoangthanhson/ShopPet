<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h3>THÔNG TIN KHÁCH HÀNG</h3>
    </div>
    <table align="center" border="true">
        <tr style="color:red">
            <th >Mã KH</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
        </tr>
        <?php
        require("../config.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        $query = "select * from hang_sua";
        $result = $conn->query($query);
        $dem = 0;
        while($row = $result->fetch_array()){
            if($dem % 2 == 0) echo "<tr>";
            else echo "<tr bgcolor='pink'>";
            for($i=0;$i<$result->field_count;$i++){
                echo "<td>".$row[$i]."</td>";
            }
            echo "</tr>";
            $dem++;
        }
        $conn->close();
        ?>
    </table>
</body>
</html>