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
    if(isset($_POST["chuho"]) && isset($_POST["chisocu"]) && isset($_POST["chisomoi"])){
        $chuho = $_POST["chuho"];
        $chisocu = $_POST["chisocu"];
        $chisomoi = $_POST["chisomoi"];
        $dongia = $_POST["dongia"];
        $ttt = ($chisomoi - $chisocu)*$dongia;
    }
    ?>
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
    </form>
</body>
</html>