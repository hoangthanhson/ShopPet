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
            $nam = $_POST["nam"];
            $mang_can = array("Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
            $mang_chi = array("Hợi","Tí","Sửu","Dần","Mão","Thìn","Tị","Ngọ","Mùi","Thân","Dậu","Tuất");
            $mang_hinh = array("hoi.jpeg","ti.jpg","suu.jpg","dan.jpeg","mao.jpg","thin.jpg","ran.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");
            $nam = $nam - 3;
            $can = $nam%10;
            $chi = $nam%12;
            $nam_al = $mang_can[$can];
            $nam_al = $nam_al." ".$mang_chi[$chi];
            $hinh = $mang_hinh[$chi];
            $hinh_anh = "<img src='12con giap/$hinh'>";
        }
    ?>
    <form action="" method="post">
        <table align="center" bgcolor="pink">
            <tr align="center">
                <td colspan="3">
                    <font color="white">
                        <h3>TÍNH NĂM ÂM LỊCH</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td align="center">
                    Năm dương lịch
                </td>
                <td></td>
                <td align="center">
                    Năm âm lịch
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="text" name="nam" id="" size="15" placeholder="Nhập năm" required 
                    value="">
                </td>
                <td align="center">
                    <input type="submit" name="submit" value="=>" id="">
                </td>
                <td align="center">
                    <input type="text" name="kq" id="" readonly size="15" 
                    value="<?php if(isset($nam_al)) echo $nam_al; ?>">
                    
                </td>
            </tr>
            <tr align="center">
                <td colspan="3">
                <?php if(isset($hinh_anh)) echo $hinh_anh; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>