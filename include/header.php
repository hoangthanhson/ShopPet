        <?php
        session_start();

        ?>
        <!-- header -->
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            }
        </style>
        <header>
        <nav>
            <!-- bắt đầu nav-mobile -->
            <div class="nav-mobile">
                <div class="icon-mobile" id="btnmenu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="item_menu" id="menutop">
                    <form>
                        <input type="text" name="search" placeholder="Tìm kiếm..." />
                        <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    <ul>
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="baitap.php">Bài Tập</a></li>
                        <li><a href="contact.php">Liên Hệ</a></li>
                        <li><a href="about.php">Giới Thiệu</a></li>
                        <li><a href="me.php">TT Cá Nhân</a></li>
                    </ul>

                </div>
            </div> 
            <!-- kết thúc nav-mobile -->
            <div class="img-nav">
                <img src="#" alt="" />
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="baitap.php">Bài Tập</a></li>
                    <li><a href="contact.php">Liên Hệ</a></li>
                    <li><a href="about.php">Giới Thiệu</a></li>
                    <li><a href="me.php">TT Cá Nhân</a></li>
                </ul>
                <form action="index.php" method="get">
                    <input type="text" name="search" placeholder="Tìm kiếm..." />
                    <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- The Modal -->
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button> 
                <?php 
                if(isset($_SESSION['email']) && $_SESSION['email']){
                    echo "<span style='margin-top:12px;'>".$_SESSION['email']."</span>";
                ?>
                <button id="cart" onclick="dieu_huong()">
                <i class="fa" aria-hidden="true"></i>
                <?php
                    echo "<span ><a href='logout.php' style='text-decoration: none;'>Đăng xuất</a></span>";
                }
                else{
                ?>
                <button id="cart" onclick="dieu_huong()">
                <i class="fa" aria-hidden="true"></i>
                <?php
                    echo "Đăng nhập";
                }
                ?>
                </button>
            <div id="myModal" class="modal" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                        <div class="cart-items">
                           
                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price">0 vnđ</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <button type="button" class="btn btn-primary order">Thanh Toán</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->