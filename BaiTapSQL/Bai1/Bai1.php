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
        <font color="blue">
            <h3>THÔNG TIN HÃNG SỮA</h3>
        </font>
    </div>
    <table align="center" border="true">
        <tr>
            <th>Mã HS</th>
            <th>Tên hãng sữa</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
        </tr>
        <?php
        require("../config.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        $query = "select * from hang_sua";
        $result = $conn->query($query);
        while($row = $result->fetch_array()){
            echo "<tr>";
            for($i=0;$i<$result->field_count;$i++){
                echo "<th>".$row[$i]."</td>";
            }
            echo "</tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>