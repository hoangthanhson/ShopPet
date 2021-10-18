<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" style="background-color: papayawhip; width: 600px;">
        <tr>
            <td colspan="3" align="center">
                <div style="background-color: pink; color: brown;">
                    <b>TÌM KIẾM THÔNG TIN SỮA</b>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" bgcolor="pink">
                <div>
                    <label for="" style="color: red;">Tên sữa</label>    
                    <form action="Bai9.php" method="get">                
                    <input type="text" name="search" size="30" placeholder="Tìm kiếm...">&nbsp;
                    <input type="button" name="submit" style="background-color: pink;" value="Tìm kiếm">
                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center"></td>
        </tr>
        <tr>
            <td colspan="3">
                <?php
                require("../config.php");
                $conn = new mysqli($hostname,$username,$password,$dbname);
                if(isset($_GET['search']) && !empty($_GET['search'])){
                    $search = $_GET['search'];
                    $query = "select * from sua where Ten_sua LIKE '%$search%' OR Don_gia LIKE '%$search%'";
                    $result = $conn->query($query);
                    $num = $result->num_rows;
                    if($num > 0 && $search != ""){
                        echo "<div align='center'>Có $num kết quả được tìm thấy</div>";
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
                            // echo "<td>"."<a href='javascript:history.back()'>Quay lại</a>"."</td>";
                            echo "</table>";
                        }       
                    }
                }else{
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
                        // echo "<td>"."<a href='javascript:history.back()'>Quay lại</a>"."</td>";
                        echo "</table>";
                    }       
                }    
                ?>
            </td>
        </tr>
    </table>
</body>
</html>