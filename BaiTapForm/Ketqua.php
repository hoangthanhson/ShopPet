<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/style.css" /> 
     <link rel="stylesheet" href="../css/reponsive.css" /> 
    <title>Document</title>
</head>
<script>
    function dieu_huong(){
        location.replace("../login.php");
    }
</script>
<body>
    <!-- header -->
    <?php include "../include/header.php" ?>
    <!-- End header -->
    <?php
    if(isset($_POST["submit"])){
        $pt = $_POST["pt"];
        $no1 = ($_POST["no1"]);
        $no2 = ($_POST["no2"]);
        // if(($no2 == 0 && $pt == "Chia") || gettype($no1) == "string" || gettype($no2) == "string"){
        //     header("location:Pheptinh.php");
        // }
        switch ($pt) {
            case "Cộng":
                $kq = $no1 + $no2;
                break;
            case "Trừ":
                $kq = $no1 - $no2;
                break;
            case "Nhân":
                $kq = $no1 * $no2;
                break;
            case "Chia":
                $kq = $no1 / $no2;
                break;
            default:
                $kq = "Chọn lại phép tính";
        }
        
    }
    ?>
    <div class="container" align="center" style="height: 550px;">
        <div class="header">
            <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
        </div>
        <div class="content">
            Chọn phép tính: <?php if(isset($kq)) echo $kq; ?>
            <table>
                <tr>
                    <td>Số 1:</td>
                    <td>
                        <input type="text" name="no1" size="20" readonly 
                        value="<?php if(isset($no1)) echo $no1; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Số 2:</td>
                    <td>
                        <input type="text" name="no2" size="20" readonly 
                        value="<?php if(isset($no2)) echo $no2; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Kêt quả:</td>
                    <td>
                        <input type="text" name="kq" size="20" readonly 
                        value="<?php echo $kq; ?>">
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
       <!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>