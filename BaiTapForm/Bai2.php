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
<body>
<script>
    function dieu_huong(){
        location.replace("../login.php");
    }
</script>
    <?php 
    if(isset($_POST["submit"])){
        $bankinh = $_POST["bankinh"];
        define("PI",3.14);
        if($bankinh <= 0){
            $dientich = "Nhập lại bán kính";
            $chuvi = "Nhập lại bán kính";
        }else{
            $dientich = PI*(pow($bankinh,2));
            $chuvi = 2*PI*$bankinh;
        }
    }
    ?>
     <!-- header -->
     <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <form action="" method="POST">
        <table align="center" bgcolor="pink">
            <tr bgcolor="orange" align="center">
                <td colspan="2">DIỆN TÍCH VÀ CHU VI VÀ HÌNH TRÒN</td>
            </tr>
            <tr>
                <td>Bán kính:</td>
                <td><input type="text" name="bankinh" placeholder="Nhập bán kính" size="20" required 
                    value="<?php if(isset($bankinh)) echo $bankinh; ?>">
                </td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dientich" readonly size="20" 
                    value="<?php if(isset($dientich)) echo $dientich; ?>">
                </td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="chuvi" readonly size="20" 
                    value="<?php if(isset($chuvi)) echo $chuvi; ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
        </table>
        <a href="../baitap.php">Quay lại</a>
    </form>
    </div>
    <!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>