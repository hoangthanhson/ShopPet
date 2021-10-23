<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/style.css" /> 
     <link rel="stylesheet" href="../css/reponsive.css" /> 
</head>
<script>
    function dieu_huong(){
        location.replace("../login.php");
    }
</script> 
<body>
    <!-- header -->
    <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: auto;">
    <table align="center" border="true">
        <tr>
            <th colspan="5" style="color:brown" bgcolor="pink">
                <div> <h3>THÔNG TIN CÁC SẢN PHẨM</h3> </div>
            </th>
        </tr>
        <?php
        require("./config.php");
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
                ?> <img src="./img/<?php echo $row['Hinh'] ?>" width="100" height="100" alt=""> <?php          
                echo"</td>";
            }
            echo "</tr>";
            }
        ?>
    </table>
    <a href="../baitap.php">Quay lại</a>
</div>
<!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>