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
    if(isset($_POST["toan"]) && isset($_POST["ly"]) && isset($_POST["hoa"]) && isset($_POST["diemchuan"])){
        $toan = $_POST["toan"];
        $ly = $_POST["ly"];
        $hoa = $_POST["hoa"];
        $diemchuan = $_POST["diemchuan"];
        if(min($toan,$ly,$hoa,$diemchuan) < 0){
            $tongdiem = "Nhập lại điểm";
            $kq = "Nhập lại điểm";
        }
        else{
            $tongdiem = $toan + $ly + $hoa;
            if(min($toan,$ly,$hoa) == 0 || $tongdiem < $diemchuan){
                $kq = "Rớt";
            }
            else {
                $kq = "Đậu";
            }
        }
    }
    ?>
     <!-- header -->
     <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <form action="" method="post">
        <table align="center" bgcolor="brown">
            <tr align="center" bgcolor="pink">
                <td colspan="2"><h2>KẾT QUẢ THI ĐẠI HỌC</h2></td>
            </tr>
            <tr>
                <td>Toán:</td>
                <td>
                    <input type="text" name="toan" size="15" placeholder="Nhập điểm toán" required 
                    value="<?php if(isset($toan)) echo $toan; ?>">
                </td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td>
                    <input type="text" name="ly" size="15" placeholder="Nhập điểm lý" required 
                    value="<?php if(isset($ly)) echo $ly; ?>">
                </td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td>
                    <input type="text" name="hoa" size="15" placeholder="Nhập điểm hóa" required 
                    value="<?php if(isset($hoa)) echo $hoa; ?>">
                </td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td>
                    <input type="text" name="diemchuan" size="15" placeholder="Nhập điểm chuẩn" required 
                    value="<?php if(isset($diemchuan)) echo $diemchuan; ?>">
                </td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td>
                    <input type="text" name="tongdiem" size="15" readonly 
                    value="<?php if(isset($tongdiem)) echo $tongdiem ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td>
                    <input type="text" name="kqthi" size="15" readonly 
                    value="<?php if(isset($kq)) echo $kq ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="submit" value="Xem kết quả">
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