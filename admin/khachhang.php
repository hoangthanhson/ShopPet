<!DOCTYPE html>
<html lang="en">
        <?php
        session_start();
        ?>
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
  <?php
  include "header.php";
  ?>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">Quản lý tài khoản khách hàng</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php
          require("config.php");
          $query = "select *from khach_hang";
          $result = $conn->query($query);
        ?>
        <h3 class="text-center text-info">Khách Hàng</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr align="center">
              <th>STT</th>
              <th>Họ</th>
              <th>Tên</th>
              <th>Email</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
              <th>Mật khẩu</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_array()) { ?>
            <tr align="center">
              <td><?= $row['ma_kh']; ?></td>
              <td><?php echo $row['ho_kh']; ?></td>
              <td><?php echo $row['ten_kh']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['dia_chi']; ?></td>
              <td><?php echo $row['sdt']; ?></td>
              <td><?php echo $row['mat_khau']; ?></td>
              <td>
                <a href="xoa.php?id=<?= $row['ma_kh']; ?>" class="badge badge-danger p-2" onclick="return confirm('Bạn chắc chắn muốn xóa dữ liệu này?');">Xóa</a> 
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