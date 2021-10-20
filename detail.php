<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css" /> 
     <link rel="stylesheet" href="css/reponsive.css" /> 
     
</head>
<script>
    function dieu_huong(){
        location.replace("./login.php");
    }
</script> 
<body>
    <?php
    require("./include/config.php");
    $id = $_GET['id'];
    $query = "select * from thu_cung where ma_thu_cung = '$id'";
    $result = $conn->query($query);
    ?>
    <!-- header -->
    <?php include "./include/header.php" ?>
    <!-- End header -->
    <!-- content -->
    <section align='center' style="margin-top: 1rem;">
    <?php
    while($row=$result->fetch_array()){
        ?>

        <div class="card">
        <img src="./img/<?php echo $row['hinh_anh']; ?>" alt="" style="width:50%">
        <h1><?php echo $row['ten_thu_cung']; ?></h1>
        <p  class="price"><?php echo $row['don_gia']." vnđ"; ?></p>
        <p style="margin: 1rem 10rem;"><?php echo $row['mo_ta']; ?></p>
        <button style="margin-bottom: 1rem;" bgcolor="blue" class="btn btn-primary">Thêm vào giỏ hàng</button>
        </div>

        <?php
    }
    ?>     
    </section>
    <!-- End content -->
    <!-- footer -->
    <?php include "./include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="js/main.js"></script>
</body>
</html>