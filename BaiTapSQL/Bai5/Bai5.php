<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="true">
        <tr align="center">
            <th colspan="2" style="color:brown" bgcolor="pink">
                <h3>THÔNG TIN CÁC SẢN PHẨM</h3>
            </th>
        </tr>
        <?php
        require("../config.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        $query = "
                SELECT
                sua.Hinh,
                sua.Ten_sua,
                hang_sua.Ten_hang_sua,
                loai_sua.Ten_loai,
                sua.Trong_luong,
                sua.Don_gia
            FROM
                sua,
                loai_sua,
                hang_sua
            WHERE
                sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua ";
        $result = $conn->query($query);
        while($row=$result->fetch_array()){
            echo"<tr>";
            echo "<td>"?> <img src="<?php echo $row['Hinh'] ?>" width="100" height="100" alt=""> <?php echo "</td>";
            echo"<td><b>".$row['Ten_sua']."</b><br> "
            ."Nhà sản xuất: ".$row['Ten_hang_sua']."<br> "
            .$row['Ten_loai']." - "
            .$row['Trong_luong']." gr - "
            .$row['Don_gia']." VNĐ".
            "</td>";
            echo"</tr>";         
        }
        // $conn->close();
        ?>
    </table>
</body>
</html>