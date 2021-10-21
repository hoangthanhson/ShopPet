<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<?php
if(isset($_POST['xoa'])){
	header("location:register.php");
	die();
}
if(isset($_POST['submit'])){
	require("./include/config.php");
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$dia_chi = $_POST['dia_chi'];
	$sdt = $_POST['sdt'];
	$mat_khau = $_POST['mat_khau'];
	$query1 = "select email from khach_hang where email='$email'";
	$result1 = $conn->query($query1);
	if($num= $result1->num_rows > 0){
		$tb = "Email này đã có người dùng. Vui lòng chọn email khác.";
	} else{
		$query = "INSERT INTO khach_hang(ho_kh, ten_kh, email, dia_chi, sdt, mat_khau) 
	VALUES ('$first_name','$last_name','$email','$dia_chi','$sdt','$mat_khau')";
			$result = $conn->query($query);
			if(!$result){
				echo "câu truy vấn sai";
			}else {
				$mess = "Tạo tài khoản thành công";
			} 
	}

	
}
?>
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Đăng ký tài khoản</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Họ" required 
							value="<?php if(isset($first_name)) echo $first_name; ?>">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Tên" required 
										value="<?php if(isset($last_name)) echo  $last_name; ?>">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" required 
								value="<?php if(isset($email)) echo $email; ?>">
			    			</div>
							<div class="form-group">
			    				<input type="text" name="dia_chi" id="email" class="form-control input-sm" placeholder="Địa chỉ" required 
								value="<?php if(isset($dia_chi)) echo $dia_chi; ?>">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="sdt" id="password" class="form-control input-sm" placeholder="Số điện thoại" required 
										value="<?php if(isset($sdt)) echo $sdt; ?>">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="mat_khau" id="password_confirmation" class="form-control input-sm" placeholder="Mật khẩu" required 
										value="<?php if(isset($mat_khau)) echo $mat_khau; ?>">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" name ="submit" value="Đăng ký" class="btn btn-info btn-block">
							<input type="submit" name ="reset" value="Xóa" class="btn btn-info btn-block">
			    			<span><?php if(isset($tb)) echo $tb; ?></span>
							<span><?php if(isset($mess)) echo $mess; ?></span>
							<a href="login.php" class="text-info">Đăng nhập</a>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
</html>