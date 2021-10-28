<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1</title>
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
     <!-- header -->
     <?php include "../include/header.php" ?>
    <!-- End header -->
    <?php
    if(isset($_POST["submit"])){
        $n = $_POST["n"];
        if(is_numeric($n) && is_int(0+$n) && $n > 0){
            $mang = array();
            for($i=0;$i<$n;$i++){
                $mang[$i]= rand(-100,200);
            }
            $kq = "Mảng phát sinh: ".implode(" ",$mang)."\n";
            $dem=0;
            for($i=0;$i<count($mang);$i++){
                if($mang[$i]%2==0){
                    $dem++;
                }
            }
            $kq1 = "Số phần tử chẵn trong mảng là: ".$dem."\n";
            $dem=0;
            for($i=0;$i<count($mang);$i++){
                if($mang[$i]<100){
                    $dem++;
                }
            }
            $kq2 = "Số phần tử nhỏ hơn 100 trong mảng là: ".$dem."\n";
            $s=0;
            for($i=0;$i<count($mang);$i++){
                if($mang[$i]<0){
                    $s+=$mang[$i];
                }
            }
            $kq3 = "Tổng các số âm trong mảng bằng: ".$s."\n";
            $index=0;
            for($i=0;$i<count($mang);$i++){
                if($mang[$i]==0){
                    $index=$i+1;
                }
                else $index = "Không có!";
            }
            $kq4 = "Vị trí phần tử có giá trị = 0: ".$index."\n";
            sort($mang);
            $kq5 = "Mảng sắp xếp tăng dần: ".implode(" ",$mang);
        } else{
            $kq= "Không phải là số nguyên dương";
        }
    }
    ?>
    <div align='center'>
	<form action="" method="post">
        <table align="center" bgcolor='pink'>
            <tr align="center" bgcolor='orange'>
                <th colspan="2">
                    <h3>THỰC HIỆN PHÉP TÍNH</h3>
                </th>
            </tr>
            <tr>
                <td>
                    Nhập n:
                </td>
                <td>
                    <input type="text" name="n" size="20" placeholder="Nhập n" required 
                    value="<?php if(isset($n)) echo $n; ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="submit" value="Thực hiện">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <textarea name="kq" id="" cols="30" rows="10" readonly><?php if(isset($kq)) echo $kq; if(isset($kq1)) echo $kq1; if(isset($kq2)) echo $kq2; if(isset($kq3)) echo $kq3; if(isset($kq4)) echo $kq4; if(isset($kq5)) echo $kq5; ?></textarea>
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
</html>