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
                <?php
                if(isset($_SESSION['email']) && $_SESSION['email']){
                    echo "<span  style='color:white'>".$_SESSION['email']."</span>"."&nbsp;";
                    ?>
                    <button class="btn" id="cart" onclick="dieu_huong()">
                    <i class="fa" aria-hidden="true"></i>
                    <?php
                    echo "<span><a href='logout.php' style='text-decoration: none;'>Đăng xuất</a></span>";
                }else{
                    ?>
                    <button class="btn" id="cart" onclick="dieu_huong()">
                    <i class="fa" aria-hidden="true"></i>
                    <?php
                    echo "Đăng nhập";
                }
                ?>
      </button>
  </nav>