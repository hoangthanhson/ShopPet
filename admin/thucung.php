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
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">Quản lý thú cưng trong cửa hàng</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php
          require("config.php");
          $query = "select *from thu_cung";
          $result = $conn->query($query);
        ?>
        <h3 class="text-center text-info">Thú Cưng </h3>
        <a href="add.php"><button class="btn">Thêm thú cưng</button></a>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr align="center">
              <th>Mã</th>
              <th>Hình ảnh</th>
              <th>Tên </th>
              <th>Số lượng</th>
              <th>Đơn giá</th>
              <th>Loại thú cưng</th>
              <th >Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_array()) { ?>
            <tr align="center">
              <td><?= $row['ma_thu_cung']; ?></td>
              <td><img src="./uploads/<?php echo $row['hinh_anh']; ?>" width="25"></td>
              <td><?php echo $row['ten_thu_cung']; ?></td>
              <td><?php echo $row['so_luong']; ?></td>
              <td><?php echo $row['don_gia']; ?></td>
              <td><?php if($row['loai_thu_cung'] == 1) {echo "Chó";} else if($row['loai_thu_cung'] == 2) {echo "Mèo";} else if($row['loai_thu_cung'] == 3) {echo "Cá";} else {echo "Chim";} ?></td>
              <td>
                <a href="chitiet.php?id=<?= $row['ma_thu_cung']; ?>" class="badge badge-primary p-2">Chi tiết</a> |
                <a href="delete.php?id=<?= $row['ma_thu_cung']; ?>" class="badge badge-danger p-2" onclick="return confirm('Bạn chắc chắn muốn xóa dữ liệu này?');">Xóa</a> |
                <a href="edit.php?id=<?= $row['ma_thu_cung']; ?>" class="badge badge-success p-2">Chỉnh sửa</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>
</body>
</html>