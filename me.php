<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/me.css">
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
<header class='masthead'>
  <p class='masthead-intro'>Tôi là:</p>
  <h1 class='masthead-heading'>Hoàng Thanh Sơn</h1>
</header>
<section class="introduction-section">
    <h1>Giới thiệu bản thân</h1>
    <p>Sinh Viên Khoa Công Nghệ Thông Tin, Trường Đại Học Nha Trang</p>
    <p>Tôi yêu công nghệ, thích ở một mình, đá bóng, bơi lội và đọc sách.</p>
</section>
<section class="location-section">
    <h1>Nơi sinh sống</h1>
    <p>Tôi sinh ra và lớn lên ở Xã Cam An Bắc, huyện Cam Lâm, tỉnh Khánh Hòa </p>
</section>
<section class="questions-section">
    <h1>Một số thông tin cá nhân</h1>
    <h2>Họ tên đầy đủ</h2>
    <p>Hoàng Thanh Sơn</p>
    <h2>Lớp</h2>
    <p>Khóa 60, Lớp CNTT-2</p>
    <h2>Mã số sinh viên</h2>
    <p>60136746</p>
    <h2></h2>
    <p></p>
</section>
<?php include "./include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="js/main.js"></script> 
</body>
</html>