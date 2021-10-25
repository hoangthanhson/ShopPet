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
          <a class="nav-link" href="khachhang.php">Khách hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giỏ hàng</a>
        </li>
      </ul>
    </div>
    <form class="form-inline" action="" method="POST">
      <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm...">
      <button class="btn btn-primary" type="submit">Tìm kiếm</button>
    </form>
  </nav>
  <?php 
  require("config.php");
  $id = $_GET['id'];
  $query = "select * from thu_cung where ma_thu_cung='$id'";
  $result = $conn->query($query);
  $row=$result->fetch_array();
  ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">Mã thú cưng : <?php echo $row['ma_thu_cung']; ?></h2>
        <div class="text-center">
          <img src="../img/<?php echo $row['hinh_anh']; ?>" width="300" class="img-thumbnail">
        </div>
        <h4 class="text-light">Tên thú cưng : <?php echo $row['ten_thu_cung']; ?></h4>
        <h4 class="text-light">Mô tả : <?php echo $row['mo_ta']; ?> <?php ?></h4>
        <h4 class="text-light">Số lượng : <?php echo $row['so_luong']; ?></h4>
        <h4 class="text-light">Đơn giá : <?php echo $row['don_gia']; ?></h4>
        <h4 class="text-light">Loại thú cưng : <?php if($row['loai_thu_cung'] == 1) {echo "Chó";} else if($row['loai_thu_cung'] == 2) {echo "Mèo";} else if($row['loai_thu_cung'] == 3) {echo "Cá";} else {echo "Chim";} ?></h4>
      </div>
    </div>
  </div>
</body>

</html>