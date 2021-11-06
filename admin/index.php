<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
    session_start();
    require("./config.php");
    if(isset($_POST['submit'])){      
        $tai_khoan = $_POST['tai_khoan'];
        $mat_khau = $_POST['mat_khau'];
        if($tai_khoan != "" && $mat_khau != ""){
            $query = "select email,mat_khau from admin where email='$tai_khoan' and mat_khau='$mat_khau'";
            $result = $conn->query($query);
            $num = $result->num_rows;
            if($num == 0){
                $mess = "Email hoặc mật khẩu không đúng";
            }else{
                $_SESSION['email'] = $tai_khoan;
                header("location:thucung.php");
            }
        }
    }
    ?>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Đăng nhập Admin</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="tai_khoan" id="username" class="form-control" required 
                                value="<?php if(isset($tai_khoan)) echo $tai_khoan; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật khẩu:</label><br>
                                <div style="display: flex;">
                               <input type="password" name="mat_khau" id="password" class="form-control" required 
                                value="<?php if(isset($mat_khau)) echo $mat_khau; ?>">
                                <button id="btnpass"><img src="../img/eye.png" alt="" width="25px" height="25px"></button>
                               </div>
                            </div>
                            <div class="form-group">
                            <label for="remember-me" class="text-info"><a href="#">Quên mật khẩu</a></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng nhập">
                                <span><?php if(isset($mess)) echo $mess; ?></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const ipnElement = document.querySelector('#password')
    const btnElement = document.querySelector('#btnpass')

    btnElement.addEventListener('click', function() {
    const currentType = ipnElement.getAttribute('type')
    ipnElement.setAttribute('type',currentType === 'password' ? 'text' : 'password')
    })
</script>
</html>