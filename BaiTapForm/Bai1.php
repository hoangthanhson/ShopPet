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
<script>
    function dieu_huong(){
        location.replace("../login.php");
    }
</script> 
<body>
    <?php 
        if(isset($_POST["submit"])){
            $cd = $_POST["cd"];
            $cr = $_POST["cr"];
            if($cd < $cr || $cd <= 0 || $cr <= 0){
                $chuvi = "Nhập lại chiều rộng";
                $dientich = "Nhập lại chiều dài";
            }else{
                $chuvi = ($cd + $cr)*2;
                $dientich = $cd*$cr;
            }
        }
    ?>
     <!-- header -->
     <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center'>
<form action="" method="POST" style="height: 520px;">
    <table align="" style="background-color : aqua;">
        <tr style="background-color: orange;">
            <td colspan="2" align="center">DIỆN TÍCH VÀ CHU VI HÌNH CHỮ NHẬT</td>
        </tr>
        <tr>
            <td>Chiều dài:</td>
            <td><input type="text" name="cd" size="15" placeholder="Nhap chieu dai" required 
                value="<?php if(isset($cd)) echo $cd; ?>">
            </td>
        </tr>
        <tr>
            <td>Chiều rộng:</td>
            <td><input type="text" name="cr" size="15" placeholder="Nhap chieu rong" required 
                value="<?php if(isset($cr)) echo $cr; ?>">
            </td>
        </tr>
        <tr>
            <td>Chu vi:</td>
            <td><input type="text" name="chuvi" size="15" readonly 
                value="<?php if(isset($chuvi)) echo $chuvi; ?>">
            </td>
        </tr>
        <tr>
            <td>Diện tích:</td>
            <td><input type="text" name="dientich" size="15" readonly 
                value="<?php if(isset($dientich)) echo $dientich; ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Tính" name="submit"></td>
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