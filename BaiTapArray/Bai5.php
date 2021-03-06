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
        $dayso = $_POST["dayso"];
        $thay = $_POST["thay"];
        $the = $_POST["the"];
        $mang = explode(",",$dayso);
        function mang_cu($mang){
            $kq ="";
            for($i=0;$i<count($mang);$i++){
                $kq .= $mang[$i]." ";
            }
            return $kq;
        }
        $mangcu = mang_cu($mang);
        function thay_the($mang,$thay,$the){
            for($i=0;$i<count($mang);$i++){
                if($mang[$i]==$thay)
                    $mang[$i] = $the;
            }
            return $mang;
        }
        $mang = thay_the($mang,$thay,$the);
        function xuat_mang($mang){
            $kq = "";
            for($i=0;$i<count($mang);$i++){
                $kq .= $mang[$i]." ";
            }
            return $kq;
        }
        
        $mangmoi = xuat_mang($mang);
    }
?> 
    <!-- header -->
    <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <form action="" method="post">
        <table align="center" bgcolor="orange">
            <tr align="center" bgcolor="gray">
                <td colspan="2"> 
                    <font color="white"><h3>Thay Thế</h3></font>
                </td>
            </tr>
            <tr>
                <td>Nhập các phần tử:</td>
                <td>
                    <input type="text" name="dayso" id="" size="40" placeholder="Nhập dãy số " required
                    value="<?php if(isset($dayso)) echo $dayso; ?>">
                </td>
            </tr>
            <tr>
                <td>Giá trị cần thay thế:</td>
                <td>
                    <input type="text" name="thay" id="" size="20" placeholder="Nhập giá trị cần thay" required 
                    value="<?php if(isset($thay)) echo $thay; ?>">
                </td>
            </tr>
            <tr>
                <td>Giá trị thay thế</td>
                <td>
                    <input type="text" name="the" id="" size="20" placeholder="Nhập giá trị thay thế" required
                    value="<?php if(isset($the)) echo $the; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" id="" value="Thay Thế">
                </td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td>
                    <input type="text" name="mangcu" id="" size="40" readonly 
                    value="<?php if(isset($mangcu)) echo $mangcu ?>">
                </td>
            </tr>
            <tr>
                <td>Mảng sau khi thay thế:</td>
                <td>
                    <input type="text" name="mangmoi" id="" size="40" readonly 
                    value="<?php if(isset($mangmoi)) echo $mangmoi; ?>">
                </td>
            </tr>
            <tr align="center" color="pink">
                <td colspan="2">(<font color="red">Ghi chú: </font>Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</td>
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