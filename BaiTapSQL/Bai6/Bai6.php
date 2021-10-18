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
        <tr>
            <th colspan="5" style="color:brown" bgcolor="pink">
                <div> <h3>THÔNG TIN CÁC SẢN PHẨM</h3> </div>
            </th>
        </tr>
        <?php
        require("../config.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        $query = "select Ten_sua,Trong_luong,Don_gia,Hinh from sua";
        $result = $conn->query($query);
        
            for($i=0;$i<$result->field_count;$i++){                              
                echo "<tr align='center'>";
            for($j=0;$j<5;$j++){
                $row=$result->fetch_array();
                echo"<td style='width: 150px;'>";
                echo"<b>".$row['Ten_sua']."</b><br> "
                .$row['Trong_luong']." gr - "
                .$row['Don_gia']." VNĐ"."<br>"
                ?> <img src="./<?php echo $row['Hinh'] ?>" width="100" height="100" alt=""> <?php          
                echo"</td>";
            }
            echo "</tr>";
            }
        
            
        ?>
    </table>
</body>
</html>