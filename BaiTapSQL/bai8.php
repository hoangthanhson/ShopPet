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
<div align='center' style="height: 570px;">
<?php
    require("./config.php");
    $conn = new mysqli($hostname,$username,$password,$dbname);
    $rowsPerPage =2; 
        if (! isset ( $_GET ['page'])){
            $_GET ['page'] = 1;
        }
    $offset =($_GET ['page'] -1)* $rowsPerPage ;
    $query1 = "select * from sua";
    $result1 = $conn->query($query1);
    $numRows = $result1->num_rows;
    $maxPage = ceil ( $numRows / $rowsPerPage );
    $query = "select * from sua LIMIT $offset,$rowsPerPage";
    $result = $conn->query($query);
    while($row=$result->fetch_array()){
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
            // echo "<td>"."<a href='javascript:history.back()'>Quay lại</a>"."</td>";
            echo "</table>";
            echo "<a href='../baitap.php'>Quay lại</a>";
    }
?>
<style>
        .page{  display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 50px;
            }
    </style>
    <div class="page">
    <?php
    if ($_GET ['page'] > 1){
        echo '<a href="Bai4.php?page='.($_GET ['page']-1).'">Back</a> | ';
    }  
    for ($i = 1; $i <= $maxPage; $i++){
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if ($_GET ['page']==$i ){
            echo '<span>'.$i.'</span> | ';
        }
        else{
            echo '<a href="Bai8.php?page='.$i.'">'.$i.'</a> | ';
        }
    } 
    if ($_GET['page'] < $maxPage){
        echo '<a href="Bai8.php?page='.($_GET ['page']+1).'">Next</a> ';
    }
    ?>
    </div>
</div>
<!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>