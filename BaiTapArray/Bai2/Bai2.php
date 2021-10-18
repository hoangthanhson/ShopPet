<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai2</title>
</head>
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
    </form>
</body>
</html>