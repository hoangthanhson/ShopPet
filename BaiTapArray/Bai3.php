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
        $n = $_POST["n"]; 
        
        function tao_mang($n){
            $arr = array();
            for($i=0;$i<$n;$i++){
                $arr[$i] = rand(0,20);
            }
            return $arr;
        }
        $mang = tao_mang($n);
        function xuat_mang($mang){
            $kq= "";
            for($i=0;$i<count($mang);$i++){
                $kq .= $mang[$i]." ";
            }
            return $kq;
        }
        $xuat_mang = xuat_mang($mang);
        function tim_max($mang){
            $kq = 0;
            for($i=0;$i<count($mang);$i++){
                if($kq < $mang[$i]){
                    $kq = $mang[$i];
                }
            }
            return $kq;
        }
        $max = tim_max($mang);
        function tim_min($mang){
            $kq=[0];
            for($i=0;$i<count($mang);$i++){
                if($kq > $mang[$i]){
                    $kq = $mang[$i];
                }
            }
            return $kq;
        }
        $min = tim_min($mang);
        function tinh_tong($mang){
            $s = null;
            for($i=0;$i<count($mang);$i++){
                $s+=$mang[$i];
            }
            return $s;
        }
        $tong = tinh_tong($mang);
    }
    ?>
    <!-- header -->
    <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <form action="" method="post">
        <table align="center" bgcolor="pink">
            <tr>
                <td colspan="2" bgcolor="blue" align="center">
                    <h3>PH??T SINH M???NG V?? T??NH TO??N</h3>
                </td>
            </tr>
            <tr>
                <td>Nh???p s??? ph???n t???:</td>
                <td>
                    <input type="text" name="n" size="30" placeholder="Nh???p m???ng" required 
                    value="<?php if(isset($n)) echo $n; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Ph??t sinh v?? t??nh to??n">
                </td>
            </tr>
            <tr>
                <td>M???ng</td>
                <td>
                    <input type="text" name="kq" size="40" readonly 
                    value="<?php if(isset($xuat_mang)) echo $xuat_mang; ?>">
                </td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong m???ng:</td>
                <td>
                    <input type="text" name="max" size="20" readonly 
                    value="<?php if(isset($max)) echo $max ?>">
                </td>
            </tr>
            <tr>
                <td>TTNN (MIN) trong m???ng:</td>
                <td>
                    <input type="text" name="min" size="20" readonly 
                    value="<?php if(isset($min)) echo $min; ?>">
                </td>
            </tr>
            <tr>
                <td>T???ng m???ng:</td>
                <td>
                    <input type="text" name="tong" size="20" readonly 
                    value="<?php if(isset($tong)) echo $tong; ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    (<font color="red">Ghi ch??:</font> C??c ph???n t??? trong m???ng s??? c?? gi?? tr??? t??? 0 ?????n 20)
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        <a href="../baitap.php">Quay l???i</a>
    </form>
    </div>
    <!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>