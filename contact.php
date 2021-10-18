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
    
    <section class="wrapper">
        <div class="form">
            <form action="" id="form1">
                <input type="text" id="femail" name="email" placeholder="Địa chỉ Email"><br>
                <input type="text" id="fname" name="title" placeholder="Tiêu đề"><br>
                <input type="text" id="fcontent" name="content" placeholder="Nội dung "><br>
                <input type="submit" value="Gửi">
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