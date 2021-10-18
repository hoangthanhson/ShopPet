<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST["hbd"]) && isset($_POST["hkt"])){
        $dongia1 = 20000;
        $dongia2 = 45000;
        $hbd = $_POST["hbd"];
        $hkt = $_POST["hkt"];
        if($hkt < $hbd){
            $ttt = "Giờ kết thúc phải > giờ bắt đầu";
        }
        else if($hbd >=10 && $hbd < 17 && $hkt <= 17){
            $ttt = ($hkt-$hbd)*$dongia1;
        }
        else if($hbd >=10 && $hbd < 17 && $hkt > 17 && $hkt <= 24 ){
            $h1 = 17 - $hbd;
            $h2 = $hkt - 17;
            $ttt = ($h1*$dongia1) + ($h2*$dongia2);
        }
        else{
            $ttt = ($hkt - $hbd)*$dongia2;
        }
    }
    ?> 
    <form action="" method="post">
        <table align="center" bgcolor="pink">
            <tr align="center" bgcolor="blue">
                <td colspan="2">
                    <h3>TÍNH TIỀN KARAOKE</h3>
                </td>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td>
                    <input type="text" name="hbd" size="15" placeholder="Nhập giờ bắt đầu" required 
                    value="<?php if(isset($hbd)) echo $hbd; ?>">
                    (h)
                </td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td>
                    <input type="text" name="hkt" size="15" placeholder="Nhập giờ kết thúc" required 
                    value="<?php if(isset($hkt)) echo $hkt; ?>">
                    (h)
                </td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td>
                    <input type="text" name="ttt" readonly size="15" 
                    value="<?php if(isset($ttt)) echo $ttt; ?>">
                    (VNĐ)
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="submit" value="Tính tiền">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>