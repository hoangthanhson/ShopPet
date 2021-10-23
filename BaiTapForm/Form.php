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
     <!-- header -->
     <?php include "../include/header.php" ?>
    <!-- End header -->
    <div align='center'>
    <div align='center' style="height: 550px;">
    <form action="Config.php" method="post">
        <div class="container" align="center" border="1px black">
            <div class="header">
                <h3>Enter Your Infomation</h3>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <td>Fullname </td>
                        <td>
                            <input type="text" name="fname" size="20" placeholder="Nhập vào full name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>
                            <input type="text" name="address" size="20" placeholder="Nhập vào address" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>
                            <input type="text" name="phone" size="20" placeholder="Nhập vào phone number" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>
                            <label for="nam">Nam</label>
                            <input type="radio" name="sex" id="nam" value="Nam">
                            <label for="nu"> Nữ</label>
                            <input type="radio" name="sex" id="nu" value="Nữ">
                        </td>
                    </tr>
                    <tr>
                        <td>Country </td>
                        <td>
                            <select name="country" id="country">
                                <option value="Việt Nam">Việt Nam</option>
                                <option value="Anh">Anh</option>
                                <option value="Pháp">Pháp</option>
                                <option value="Mỹ">Mỹ</option>
                                <option value="Lào">Lào</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Study</td>
                        <td>
                            <input type="checkbox" name="study1" value="PHP & MySQL">PHP & MySQL 
                            <input type="checkbox" name="study2" value="ASP.NET">ASP.NET 
                            <input type="checkbox" name="study3" value="CCNA">CCNA  
                            <input type="checkbox" name="study4" value="Security+">Security+  
                        </td>
                    </tr>
                    <tr>
                        <td>Note</td>
                        <td>
                            <textarea name="note" cols="30" rows="10" placeholder="Nhập note"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Gửi">
                            <input type="reset" name="resert" value="Hủy">
                        </td>
                    </tr>
                </table>
                <a href="../baitap.php">Quay lại</a>
            </div>
        </div>
    </form>
    </div>
    <!-- footer -->
<?php include "../include/footer.php" ?>
    <!-- End footer -->
    <!-- script -->
     <script src="../js/main.js"></script> 
</body>
</html>