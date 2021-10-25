<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css" /> 
     <link rel="stylesheet" href="css/reponsive.css" />
     <link rel="stylesheet" href="css/contact.css"> 
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
    <?php
    require("./include/config.php");
        if(isset($_POST['submit'])){
            $to = 'sonhoang.070400@gmail.com';
            $title = $_POST['title'];
            $content = $_POST['content'];
            $from = $_POST['email'];    
            if(mail($to, $title, $content,$from)){
                $mess =  'Chúc mừng. Email của bạn được gửi thành công.';
            } else{
                $mess = 'Không thể gửi Email. Vui lòng thử lại.';
            }
        }
    ?>
    <section class="wrapper">
        <div class="form">
            <form action="" id="form1">
                <input type="text" id="femail" name="email" placeholder="Địa chỉ Email" value="<?php if(isset($from)) echo $from; ?>"><br>
                <input type="text" id="fname" name="title" placeholder="Tiêu đề" value="<?php if(isset($title)) echo $title; ?>"><br>
                <input type="text" id="fcontent" name="content" placeholder="Nội dung " value="<?php if(isset($content)) echo $content; ?>"><br>
                <input type="submit" name="submit" value="Gửi">
                <span><?php if(isset($mess)) echo $mess; ?></span>
            </form>
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