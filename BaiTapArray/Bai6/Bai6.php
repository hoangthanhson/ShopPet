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
        $dayso=$_POST["dayso"];
        $mang = explode(",",$dayso);
        function sap_tang($mang){
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
        $sap_tang = implode(",",sap_tang($mang));
        function sap_giam($mang){
            for($i=0;$i<count($mang)-1;$i++){
                for($j=$i+1;$j<count($mang);$j++){
                    if($mang[$i] < $mang[$j]){
                        $tam = $mang[$i];
                        $mang[$i] = $mang[$j];
                        $mang[$j] = $tam;
                    }
                }
            }
            return $mang;
        }
        $sap_giam = implode(",",sap_giam($mang));
    }
    ?>
    <form action="" method="post">
        <table align="center" bgcolor="grey">
            <tr align="center" bgcolor="blue">
                <td colspan="2">
                    <font>
                        <h3>Sắp Xếp Mảng</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input type="text" name="dayso" id="" size="30" placeholder="Nhập dãy số" required 
                    value="<?php if(isset($dayso)) echo $dayso; ?>"> <font color="red">(*)</font>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" id="" value="Sắp xếp tăng/giảm">
                </td>
            </tr>
            <tr>
                <td>
                    <font color="red">Sau khi sắp xếp</font>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Tăng dần:</td>
                <td>
                    <input type="text" name="tang" id="" size="30" readonly 
                    value="<?php if(isset($sap_tang)) echo $sap_tang; ?>">
                </td>
            </tr>
            <tr>
                <td>Giảm dần:</td>
                <td>
                    <input type="text" name="giam" id="" size="30" readonly 
                    value="<?php if(isset($sap_giam)) echo $sap_giam; ?>">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <font color="red">
                        (*)
                    </font>
                    Các số được nhập cách nhau bằng dấu ","
                </td>
            </tr>
        </table>
    </form>
</body>
</html>