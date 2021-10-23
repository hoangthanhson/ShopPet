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
        $fname = $_POST["fname"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $sex = $_POST["sex"];
        $country = $_POST["country"];
        $note = $_POST["note"];
    }
    ?>
    <!-- header -->
    <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center' style="height: 550px;">
    <div class="container" align="center" border="1px black">
        <div class="header">
            <h3>Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập: </h3>
        </div>
        <div class="content">
            <table>
                <tr>
                    <td>Họ tên: </td>
                    <td>
                        <?php if(isset($fname)) echo $fname; ?>
                    </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td>" 
                        <?php if(isset($address)) echo $address; ?>
                    </td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td>
                        <?php if(isset($phone)) echo $phone; ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <?php if(isset($sex)) echo $sex; ?>
                    </td>
                </tr>
                <tr>
                    <td>Country: </td>
                    <td>
                        <?php if(isset($country)) echo $country; ?>
                    </td>
                </tr>
                <tr>
                    <td>Study: </td>
                    <td>
                        <?php if(isset($_POST["study1"])) echo $_POST["study1"]; ?>
                        <?php if(isset($_POST["study2"])) echo $_POST["study2"]; ?>
                        <?php if(isset($_POST["study3"])) echo $_POST["study3"]; ?>
                        <?php if(isset($_POST["study4"])) echo $_POST["study4"]; ?>
                    </td>
                </tr>
                <tr>
                    <td>Note: </td>
                    <td>
                        <?php if(isset($note)) echo $note; ?>
                    </td>
                </tr>
            </table>
            <a href="./Form.php">Quay lại</a>
        </div>
    </div>
    </div>
    <!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>