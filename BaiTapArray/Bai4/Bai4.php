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
    if(isset($_POST["submit"])){
        $dayso = $_POST["dayso"];
        $giatri = $_POST["giatri"];
        $mang = explode(",",$dayso);
        function tim_kiem($mang,$giatri){
            $kq = null;
            $vitri = null;
            for($i=0;$i<count($mang);$i++){
                if($mang[$i] == $giatri){
                    $kq = $mang[$i];
                    $vitri = $i + 1;
                }
                else $vitri = "Không tìm thấy";
            }
            return $vitri;
        }
        $kq = tim_kiem($mang,$giatri);
        function sap_xep($mang){
            for($i=0;$i<count($mang)-1;$i++){
                for($j=$i+1;$j<count($mang);$j++){
                    if($mang[$i] > $mang[$j]){
                        $tam = $mang[$i];
                        $mang[$i] = $mang[$j];
                        $mang[$j] = $tam;
                    }
                }
            }
            return $mang;
        }
        $sapxep = implode(" ",sap_xep($mang));
    }
    ?>
    <form action="" method="post">
        <table align="center" bgcolor="pink">
            <tr align="center" bgcolor="orange">
                <td colspan="2">
                    <font color="white"><h3>Tìm Kiếm</h3></font>
                </td>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input type="text" name="dayso" size="40" placeholder="Nhập mảng" required 
                    value="<?php if(isset($dayso)) echo $dayso; ?>">
                </td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td>
                    <input type="text" name="giatri" size="40" placeholder="Nhập số cần tìm" required
                    value="<?php if(isset($giatri)) echo $giatri; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tìm kiếm">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" name="sapxep" size="40" readonly 
                    value="<?php if(isset($sapxep)) echo $sapxep; ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm</td>
                <td>
                    <input type="text" name="kq" size="40" readonly 
                    value="<?php if(isset($kq)) echo $kq; ?>">
                </td>
            </tr>
            <tr align="center" bgcolor="orange">
                <td colspan="2">
                    (Các phần tử trong mảng sẽ cách nhau bằng dấu ",")
                </td>
            </tr>
        </table>
    </form>
</body>
</html>