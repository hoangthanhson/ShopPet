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
<?php
    require("./config.php");
    $conn = new mysqli($hostname,$username,$password,$dbname);
    $id = $_GET['id'];
    $query = "select * from sua where Ma_sua = '$id' ";   
    $result = $conn->query($query);
    $row=$result->fetch_array();
            echo "<table align='center' border='true' width='550px'>";
            echo "<tr>";
            echo "<td colspan='2' align='center' bgcolor='pink' style='color:brown'>".$row['Ten_sua']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"?> <img src="./img/<?php echo $row['Hinh'] ?>" width="100" height="100" alt=""> <?php echo "</td>";
            echo "<td>"."<b>Thành phần dinh dưỡng:</b><br>".$row['TP_Dinh_Duong']."<br>".
            "<b>Lợi ích: </b><br>".$row['Loi_ich'].
            "<b>Trọng lượng: </b>".$row['Trong_luong']." - "
            ."<b>Đơn giá: </b>".$row['Don_gia']."VNĐ"."</td>    ";
            echo "</tr>";
            echo "<td>"."<a href='javascript:history.back()'>Quay lại</a>"."</td>";
            echo "</table>";
?>
</div>
<!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>