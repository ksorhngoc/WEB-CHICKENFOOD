<div id="header">
            <a href="">
                <img src="images/logo.jpg" alt="" class="logo">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="index.php">Trang chủ</a>
                </div>
                <div class="dropdown">
                    <div class="item">
                        <a href="#">Sản phẩm</a>
                        <div class="dropdown-content">
                            <a href="danhmuc.php?dm=DAT">Ưa chuộng</a>
                            <a href="danhmuc.php?dm=DAV">Món mới</a>
                            <a href="danhmuc.php?dm=O">Thức ăn nhẹ</a>
                            <a href="danhmuc.php?dm=N">Nước uống</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="feedback.php">Liên hệ</a>
                </div>
            </div>
            <div  class="others">
                <li>
                    <form method="POST" action="timkiem.php"> 
                        <input name="tukhoa" type="text" placeholder="Tìm kiếm">
                        <input type="submit" name ="timkiem" value="Tìm">
                    </form>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn fas fa-user"></button>
                        <div class="dropdown-content">
                            <?php
                                if(isset($_SESSION['tk'])){
                                    ?>
                                    <a href="status.php">Tình trạng đơn hàng</a>
                                    <a href="doimk.php">Đổi mật khẩu</a>
                                    <a href="dang-xuat.php">Đăng xuất</a>
                                <?php }
                                else {
                                    echo'<a href="dangnhap.php">Đăng nhập</a>';
                                    echo'<a href="dangky.php">Đăng kí</a>';
                                    echo'<a href="quen-mat-khau.php">Quên mật khẩu</a>';
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li>
                    <button><a class="fas fa-shopping-cart" href="<?php
                       if(isset($_SESSION['tk'])){
                         echo"cart.php";
                       }
                       else{
                        echo"dangnhap.php";
                      }?>" style="padding: 5px; font-size: 16px;"></a></button>
                    </li>
            </div>
        </div>