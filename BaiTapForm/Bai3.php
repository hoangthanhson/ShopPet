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
    if(isset($_POST["chuho"]) && isset($_POST["chisocu"]) && isset($_POST["chisomoi"])){
        $chuho = $_POST["chuho"];
        $chisocu = $_POST["chisocu"];
        $chisomoi = $_POST["chisomoi"];
        $dongia = $_POST["dongia"];
        $ttt = ($chisomoi - $chisocu)*$dongia;
    }
    ?>
     <!-- header -->
     <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <form action="" method="POST">
        <table align="center" bgcolor="pink">
            <tr align="center" bgcolor="orange">
                <td colspan="2">THANH TOÁN TIỀN ĐIỆN</td>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="chuho" placeholder="Nhập tên chủ hộ" size="20" required 
                    value="<?php if(isset($chuho)) echo $chuho; ?>">
                </td>
            </tr>
            <tr>
                <td>Chỉ số cũ</td>
                <td><input type="text" name="chisocu" placeholder="Nhập chỉ số cũ" size="20" required
                    value="<?php if(isset($chisocu)) echo $chisocu; ?>">
                    (Kw)
                </td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="chisomoi" placeholder="Nhập chỉ số mới" size="20" required
                    value="<?php if(isset($chisomoi)) echo $chisomoi; ?>">
                    (Kw)
                </td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="dongia" placeholder="20000" size="20" required 
                    value="20000">
                    (VNĐ)
                </td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="ttt" size="20" readonly value="<?php if(isset($ttt)) echo $ttt; ?>">
                    (VNĐ)
                </td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="Tính" value="Tính"></td>
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