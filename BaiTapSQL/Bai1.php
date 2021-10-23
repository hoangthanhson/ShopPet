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
    <div align='center' style="height: 550px;">
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
        require("./config.php");
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
    <a href="../baitap.php">Quay lại</a>
    </div>
    <!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>