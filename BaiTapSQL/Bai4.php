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
    <div style="color:brown" align="center">
        <h3>THÔNG TIN SỮA</h3>
    </div>
    <table align="center" border="true">
        <tr>
            <th>Số TT</th>
            <th>Tên sữa</th>
            <th>Hãng sữa</th>
            <th>Loại sữa</th>
            <th>Trọng lượng</th>
            <th>Đơn giá</th>
        </tr>
        <?php
        require("./config.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        $rowsPerPage =5; 
        if (! isset ( $_GET ['page'])){
            $_GET ['page'] = 1;
        }
        $offset =($_GET ['page'] -1)* $rowsPerPage ;
        $query1="select * from sua";
        $query="select * from sua LIMIT $offset,$rowsPerPage";
        $result=$conn->query($query);
        $result1=$conn->query($query1);
        $numRows = $result1->num_rows;
        $maxPage = ceil ( $numRows / $rowsPerPage );
            $dem=0;
            while($row=$result->fetch_array()){
                if($dem % 2 == 0) echo "<tr align='center' bgcolor='pink'>";
                else echo "<tr align='center'>";
                for($i=1;$i<$result->field_count-3;$i++){
                    if($i == 1){
                        echo "<td>".($dem +1)."</td>";
                    }
                    if($i == 5){
                        echo "<td>".$row[$i]."VNĐ"."</td>";
                    }else echo "<td>".$row[$i]."</td>";                  
                }
                echo "</tr>";
                $dem++;
            }
        ?>
    </table>
    <a href="../baitap.php">Quay lại</a>
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
            echo '<a href="Bai4.php?page='.$i.'">'.$i.'</a> | ';
        }
    } 
    if ($_GET['page'] < $maxPage){
        echo '<a href="Bai4.php?page='.($_GET ['page']+1).'">Next</a> ';
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