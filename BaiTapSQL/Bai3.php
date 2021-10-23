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
   <div align='center' style="height: 700px;">
   <div align="center">
        <h3>THÔNG TIN KHÁCH HÀNG</h3>
    </div>
    <table align="center" border="true">
        <tr style="color:red">
            <th>Mã KH</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
        </tr>
        <?php
        require("./config.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        $query = "select * from khach_hang";
        $result = $conn->query($query);
        $dem = 0;
        while($row = $result->fetch_array()){
            if($dem % 2 == 0) echo "<tr>";
            else echo "<tr bgcolor='pink'>";
            for($i=0;$i<$result->field_count-1;$i++){
                if($i == 2){
                    if($row[$i] == 1) echo "<td> <img width='64px' heigh = '57px' src='./img/nu.png'> </td>";
                    else echo "<td> <img width='64px' heigh = '57px' src='./img/nam.png'> </td>";
                }
                else echo "<td>".$row[$i]."</td>";
            }
            echo "</tr>";
            $dem++;
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