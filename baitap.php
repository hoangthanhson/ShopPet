<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
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
    <!-- header -->
    <?php include "./include/header.php" ?>
    <!-- End header -->
    <!-- content -->
    <section class="wrapper" style="height: 530px;">
        <div class="products">
            <div>
                <h3>Bài Tập Form</h3>
                <br>
                <div>
                    <a href="BaiTapForm/Bai1.php"><button class="btn">Bài 1</button></a>
                    <a href="BaiTapForm/Bai2.php"><button class="btn">Bài 2</button></a>
                    <a href="BaiTapForm/Bai3.php"><button class="btn">Bài 3</button></a>
                    <a href="BaiTapForm/Bai4.php"><button class="btn">Bài 4</button></a>
                    <a href="BaiTapForm/Bai5.php"><button class="btn">Bài 5</button></a>
                    <a href="BaiTapForm/Pheptinh.php"><button class="btn">Bài 6</button></a>
                    <a href="BaiTapForm/Form.php"><button class="btn">Bài 8</button></a>
                </div>
            </div><br>
            <div>
                <h3>Bài Tập Array</h3>
                <br>
                <div>
                    <a href="BaiTapArray/Bai1.php"><button class="btn">Bài 1</button></a>
                    <a href="BaiTapArray/Bai2.php"><button class="btn">Bài 2</button></a>
                    <a href="BaiTapArray/Bai3.php"><button class="btn">Bài 3</button></a>
                    <a href="BaiTapArray/Bai4.php"><button class="btn">Bài 4</button></a>
                    <a href="BaiTapArray/Bai5.php"><button class="btn">Bài 5</button></a>
                    <a href="BaiTapArray/Bai6.php"><button class="btn">Bài 6</button></a>
                    <a href="BaiTapArray/Bai7.php"><button class="btn">Bài 7</button></a>
                </div>
            </div><br>
            <div>
                <h3>Bài Tập PHP & MySQL</h3>
                <br>
                <div>
                    <a href="BaiTapSQL/Bai1.php"><button class="btn">Bài 1</button></a>
                    <a href="BaiTapSQL/Bai2.php"><button class="btn">Bài 2</button></a>
                    <a href="BaiTapSQL/Bai3.php"><button class="btn">Bài 3</button></a>
                    <a href="BaiTapSQL/Bai4.php"><button class="btn">Bài 4</button></a>
                    <a href="BaiTapSQL/Bai5.php"><button class="btn">Bài 5</button></a>
                    <a href="BaiTapSQL/Bai6.php"><button class="btn">Bài 6</button></a>
                    <a href="BaiTapSQL/Bai7.php"><button class="btn">Bài 7</button></a>
                    <a href="BaiTapSQL/Bai8.php"><button class="btn">Bài 8</button></a>
                    <a href="BaiTapSQL/Bai9.php"><button class="btn">Bài 9</button></a>
                </div>
            </div>
        </div>
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