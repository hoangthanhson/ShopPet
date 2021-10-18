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
    <section class="wrapper">
        <div class="products">
            <ul>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó Pug</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">25000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó Shiba</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1299000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó Husky</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1599000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó Ngao</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">89000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó Alaska
                        </h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">2199000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó Sói</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">115000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó cỏ</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1295000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./img/cun1.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Chó Phú Quốc</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">85000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
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