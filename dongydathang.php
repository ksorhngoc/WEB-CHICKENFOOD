<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="stylec.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Đơn hàng</title>
</head>
<body>
<!----------------Header----------------------->
<?php
    include('header.php');
?>
<!-----------------Trang đặt hang------------------>
<section class="delivery">
    <div class="containerp">
        <form action="thanhtoan.php" method="POST">
            <div class="delivery-content row">
                <div class="delivery-content-left">
                    <p>Vui lòng chọn phương thanh toán</p>
                    <div class="delivery-content-left-thanhtoan row">
                        <input required name="pttt" type="radio" value="1">
                        <p>Thanh toán khi nhận được hàng<span style="font-weight: bold;">(tiền mặt)</span></p>
                    </div>
                    <div class="delivery-content-left-thanhtoan row">
                        <input required name="pttt" type="radio" value="2">
                        <p>Thanh toán online</span></p>
                    </div>
                    <div class="delivery-content-left-thanhtoan row">
                        <input required name="pttt" type="radio" value="3">
                        <p>Chuyển khoản ngân hàng<span style="font-weight: bold;">(BIDV, ACB, Vietcombank...)</span></p>
                    </div>
                        <div class="delivery-content-left-input-top row">
                            <div class="delivery-content-left-input-top-item">
                                <label for="">Họ tên <span style="color:red;">*</span> </label>
                                <input required name="ht" type="text" >
                            </div>
                            <div class="delivery-content-left-input-top-item">
                                <label for="">Địa chỉ <span style="color:red;">*</span> </label>
                                <input  required name="diachi" type="text" >
                            </div>
                            <div class="delivery-content-left-input-bottom">
                                <label for="">Điện thoại <span style="color:red;">*</span> </label>
                                <input  required name="dt" type="text" >
                            </div>
                        </div>
                </div>
                <div class="delivery-content-right">
                    <table>
                        <tr>

                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php
                            global $_SESSION;
                            $tong=0;
                            foreach($_SESSION['giohang'] as $cart) { 
                                $tt=$cart[2] * $cart[3];
                                $tong+=$tt;    
                        ?>
                        <tr>
                            <td><?php echo $cart[1]?></td>
                            <td><img width="50px" src="<?php echo $cart[0]?>" alt=""></td>
                            <td><?php echo $cart[3] ?></td>
                            <td><?php echo $tt?><sup>đ</sup></td>
                        </tr>
                        <?php
                            }
                        ?>
                        <tr>
                            <td style="font-weight:bold;" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight:bold;" name="tt"><p><?php echo $tong ?><sup>đ</sup></p></td>
                        </tr> 
                    </table>
                </div>
            </div>
            <div class="delivery-content-left-button row">
                <a href="cart.php"><span>&#171;</span><p>Quay lại trang giỏ hàng</p></a>
                <input type="submit" name="dongydathang" value="THANH TOÁN">
            </div>
        </form>
    </div>
</section>
<?php
    include("footer.php");
?>
</body>
<script>

</script>
</html>