<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css" /> 
     <link rel="stylesheet" href="css/reponsive.css" /> 
     <link rel="stylesheet" href="css/about.css">
     <link rel="stylesheet" href="css/me.css">
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
    <header class='masthead'>
    <p class='masthead-intro'>Shop Pet</p>
    <h1 class='masthead-heading'>Cam An Bắc City</h1>
    </header>
    <section class="introduction-section">
        <h1>Giới thiệu</h1>
        <p>ShopPet chuyên các loại thú cưng uy tín, tư vấn free chăm sóc thú cưng nhiệt tình</p>
    </section>
    <section class="location-section">
        <h1>Địa chỉ của hàng</h1>
        <p>Xã Cam An Bắc, huyện Cam Lâm, tỉnh Khánh Hòa </p>
        
    </section>
   <br>
    <div class="slideshow-container">
        <h2>Một Số Loại Thú Cưng Sắp Có Ở Cửa Hàng</h2>
        <br>    
        <div class="mySlides fade">
            <img src="./img/pug.jpg" style="width:100%">
            <div class="text">Chó Pug</div>
        </div>
        
        <div class="mySlides fade">
            <img src="./img/alaska.jpg" style="width:100%">
            <div class="text">Chó Alaska</div>
        </div>
        
        <div class="mySlides fade">
            <img src="./img/bengal.jpg" style="width:100%">
            <div class="text">Mèo Bengal</div>
        </div>
        </div>
        <br>
        
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
    </div>
    </section>
    <!-- End content -->
    <!-- footer -->
    <?php include "./include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="js/main.js"></script> 
</body>
<script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 5000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
</html>