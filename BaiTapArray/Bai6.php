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
    <!-- header -->
    <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <form action="" method="post">
        <table align="center" bgcolor="grey">
            <tr align="center" bgcolor="blue">
                <td colspan="2">
                    <font>
                        <h3>S???p X???p M???ng</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>Nh???p m???ng:</td>
                <td>
                    <input type="text" name="dayso" id="" size="30" placeholder="Nh???p d??y s???" required 
                    value="<?php if(isset($dayso)) echo $dayso; ?>"> <font color="red">(*)</font>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" id="" value="S???p x???p t??ng/gi???m">
                </td>
            </tr>
            <tr>
                <td>
                    <font color="red">Sau khi s???p x???p</font>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>T??ng d???n:</td>
                <td>
                    <input type="text" name="tang" id="" size="30" readonly 
                    value="<?php if(isset($sap_tang)) echo $sap_tang; ?>">
                </td>
            </tr>
            <tr>
                <td>Gi???m d???n:</td>
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
                    C??c s??? ???????c nh???p c??ch nhau b???ng d???u ","
                </td>
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