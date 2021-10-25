<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping-cart</title>
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
<script>
    function dieu_huong1(){
        location.replace("./login.php");
    }
</script> 
<body>
    <?php
    require("./include/config.php");
    ?>
    <!-- header -->
    <?php include "./include/header.php" ?>
    <!-- End header -->
    <!-- content -->
    <section class="wrapper">
        <div class="products">
            <ul>
                <?php
                if(isset($_GET['search']) && !empty($_GET['search'])){
                    $search = $_GET['search'];
                    $query = "select * from thu_cung where ten_thu_cung LIKE '%$search%' OR don_gia LIKE '%$search%'";
                    $result = $conn->query($query);
                    $num = $result->num_rows;
                    if($num > 0 && $search != ""){
                        while($row=$result->fetch_array()){
                        ?> 
                        <li class="main-product">
                        <div class="img-product">
                            <?php echo "<a href='detail.php?id=$row[ma_thu_cung]'>"; ?>
                            <img class="img-prd"
                                src="./img/<?php echo $row['hinh_anh']; ?>"
                                alt="">
                            <?php echo "</a>"; ?>
                        </div>
                        <div class="content-product">
                            <h3 class="content-product-h3"><?php echo $row['ten_thu_cung']; ?></h3>
                            <div class="content-product-deltals">
                                <div class="price">
                                    <span class="money"><?php echo $row['don_gia']." vnđ";?></span>
                                </div>
                                <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                            </div>
                        </div>
                        </li>
                        <?php 
                            }
                        }     
                    } else{
                        $query = "select *from thu_cung";
                        $result = $conn->query($query);
                        while($row=$result->fetch_array()){
                            ?>
                            <li class="main-product">
                            <div class="img-product">
                                <?php echo "<a href='detail.php?id=$row[ma_thu_cung]'>"; ?>
                                <img class="img-prd"
                                    src="./img/<?php echo $row['hinh_anh']; ?>"
                                    alt="">
                                <?php echo "</a>"; ?>
                            </div>
                            <div class="content-product">
                                <h3 class="content-product-h3"><?php echo $row['ten_thu_cung']; ?></h3>
                                <div class="content-product-deltals">
                                    <div class="price">
                                        <span class="money"><?php echo $row['don_gia']." vnđ";?></span>
                                    </div>
                                    <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                                </div>
                            </div>
                            </li>
                            <?php
                        }
                    }
                ?>
            </ul>
        </div>
    </section>
    <!-- End content -->
    <!-- footer -->
    <?php include "./include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="js/main.js"></script>
</body>
</html>