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
        $bankinh = $_POST["bankinh"];
        define("PI",3.14);
        if($bankinh <= 0){
            $dientich = "Nhập lại bán kính";
            $chuvi = "Nhập lại bán kính";
        }else{
            $dientich = PI*(pow($bankinh,2));
            $chuvi = 2*PI*$bankinh;
        }
    }
    ?>
    <form action="" method="POST">
        <table align="center" bgcolor="pink">
            <tr bgcolor="orange" align="center">
                <td colspan="2">DIỆN TÍCH VÀ CHU VI VÀ HÌNH TRÒN</td>
            </tr>
            <tr>
                <td>Bán kính:</td>
                <td><input type="text" name="bankinh" placeholder="Nhập bán kính" size="20" required 
                    value="<?php if(isset($bankinh)) echo $bankinh; ?>">
                </td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dientich" readonly size="20" 
                    value="<?php echo $dientich; ?>">
                </td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="chuvi" readonly size="20" 
                    value="<?php echo $chuvi; ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>