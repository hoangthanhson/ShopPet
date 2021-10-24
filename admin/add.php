<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD App</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="thucung.php">Admin</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Khách hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giỏ hàng</a>
        </li>
      </ul>
    </div>
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="TÌm kiếm...">
      <button class="btn btn-primary" type="submit">TÌm kiếm</button>
    </form>
  </nav>
  <?php
  if(isset($_POST['add'])){
    require("config.php");
    $ten_thu_cung = $_POST['ten_thu_cung'];
    $mo_ta = $_POST['mo_ta'];
    $so_luong = $_POST['so_luong'];
    $don_gia = $_POST['don_gia'];
    $loai_thu_cung = $_POST['loai_thu_cung'];
    $hinh_anh=$_FILES['image']['name'];
		$upload="uploads/".$hinh_anh;
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    $query ="INSERT INTO thu_cung(ten_thu_cung, hinh_anh, mo_ta, so_luong, don_gia, loai_thu_cung) 
    VALUES ('$ten_thu_cung','$hinh_anh','$mo_ta','$so_luong','$don_gia','$loai_thu_cung')";
    $result = $conn->query($query);
    if(!$result){
      echo "câu truy vấn sai";
    }else {
        $mess = "Thêm thành công";
    }
  }
  ?>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">Quản lý thú cưng trong cửa hàng</h3>
        <hr>
      </div>
    </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h3 class="text-center text-info">Thêm thú cưng</h3>
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="ma_thu_cung" value="">
          <div class="form-group">
            <input type="text" name="ten_thu_cung" value="<?php if(isset($ten_thu_cung)) echo $ten_thu_cung; ?>" class="form-control" placeholder="Tên thú cưng" required>
          </div>
          <div class="form-group">
            <input type="text" name="mo_ta" value="<?php if(isset($mo_ta)) echo $mo_ta; ?>" class="form-control" placeholder="Mô tả" required>
          </div>
          <div class="form-group">
            <input type="text" name="so_luong" value="<?php if(isset($so_luong)) echo $so_luong; ?>" class="form-control" placeholder="Số lượng" required>
          </div>
          <div class="form-group">
            <input type="text" name="don_gia" value="<?php if(isset($don_gia)) echo $don_gia; ?>" class="form-control" placeholder="Đơn giá" required>
          </div>
          <div class="form-group">
            <label for="loai_thu_cung">Loại thú cưng</label>
            <select class="form-control" name="loai_thu_cung" id="loai_thu_cung">
            <option value="1">Chó</option>
            <option value="2">Mèo</option>
            <option value="3">Cá</option>
            <option value="4">Chim</option>
            </select>
        </div>
          <div class="form-group">
            <input type="hidden" name="hinh_anh" value="<?php if(isset($photo)) echo $hinh_anh; ?>">
            <input type="file" name="image" class="custom-file">
          </div>
          <div class="form-group">
            <span><?php if(isset($mess)) echo $mess; ?></span>
          </div>
          <div class="form-group">
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Thêm">
          </div>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <script type="text/javascript">
  </script>
</body>
</html>