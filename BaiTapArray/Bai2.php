<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai2</title>
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
        $kq = 0;
        $mang = 0;
        $dayso = $_POST["dayso"];
        $mang = explode(",",$dayso);
        for($i=0;$i<count($mang);$i++){
            $kq +=$mang[$i];
        }
    }
    ?>
    <!-- header -->
    <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <form action="" method="post">
        <table align="center" bgcolor="pink">
            <tr align="center" bgcolor="orange">
                <td colspan="2">
                    <h3>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h3>
                </td>
            </tr>
            <tr>
                <td>Nhập dãy số:</td>
                <td>
                    <input type="text" name="dayso" size="20" placeholder="Nhập dãy số" required 
                    value="<?php if(isset($dayso)) echo $dayso; ?>">
                    <font color="red">(*)</font>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tổng dãy số">
                </td>
            </tr>
            <tr>
                <td>Tổng dãy số:</td>
                <td>
                    <input type="text" name="kq" size="20" readonly 
                    value="<?php if(isset($kq)) echo $kq; ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <font color="red">(*)</font>
                    Các số được nhập cách nhau bằng dấu ","
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