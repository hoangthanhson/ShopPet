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
        location.replace("./index.php");
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
        <li class="main-product" style="margin-bottom: 2rem;">
            <div class="img-product">
                    <img class="img-prd"
                        src="./img/<?php echo $row['hinh_anh']; ?>"
                        alt="">
            </div>
            <div class="content-product">
                <h3 class="content-product-h3"><?php echo $row['ten_thu_cung']; ?></h3>
                <p style="margin: 0rem 5rem;"><?php echo $row['mo_ta']; ?></p>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money"><?php echo $row['don_gia']." vnđ";?></span>
                        </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
            </div>
        </li>
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