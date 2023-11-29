<?php
    session_start();
    $maKH = $_SESSION['id_kh'];
    require 'connect.php';
    if(isset($_POST['dongydathang'])){
        $ht= $_POST['ht'];
        $diachi= $_POST['diachi'];
        $dt= $_POST['dt'];
        $tongdonhang= tongdonhang(); 
        $pttt=$_POST['pttt'];
        //thêm thông tin vào đơn hàng
        $tongSL = 0;
        for($i=0; $i< sizeof($_SESSION['giohang']); $i++){
            $tongSL +=$_SESSION['giohang'][$i][3];  
        }
        $sql_donhang="INSERT INTO donhang (maKH, tenKH, SDT , diaChi, SoLuongSP, trangThai, tongTien, phuongThucTT) VALUES('$maKH', '$ht', '$dt', '$diachi', '$tongSL', '1', '$tongdonhang', '$pttt')";
        $result_donhang=mysqli_query($conn, $sql_donhang);

        //lấy mã đon hàng vừa thêm
        $sql_maHD = "SELECT *FROM donhang ORDER BY donhang.maDH DESC LIMIT 1";
        $result_maHD =mysqli_query($conn, $sql_maHD);
        $row = mysqli_fetch_array($result_maHD);
        $maDH = $row['maDH'];
        //lấy thông tin giỏ hàng từ sesion _id đơn hàng vừa tạo 
        for($i=0; $i< sizeof($_SESSION['giohang']); $i++){
           $Tensp=$_SESSION['giohang'][$i][1];
            $hinhanh=$_SESSION['giohang'][$i][0];
            $Gia=$_SESSION['giohang'][$i][2];
            $soluong=$_SESSION['giohang'][$i][3];
            $thanhtien=$Gia*$soluong;
            $maSP = $_SESSION['giohang'][$i][4];
            //thêm đơn hàng vào chi tiết đơn hàng
            $sql_chiTietDH = "INSERT INTO chitietdh VALUES ('$maDH', '$maSP', '$Tensp', '$hinhanh', '$soluong', '$Gia', '$thanhtien')";
            $run_chiTietDH = $conn->query($sql_chiTietDH);
        //show thông tin đơn hàng đơn hàng
        $ttkh='
        <table>
        <h1>Mã đơn hàng: '.$maDH.'</h1>
        <img src="images/mavach.png" width="100px">
        <h3>NƠI GỬI<br>
        Tổ 26 , Phường Trần Phú, Thành phố Quy Nhơn, Tỉnh Bình Định<br>
        Số điện thoại: 0935298142
        </h3><br>
        <h2>THÔNG TIN NGƯỜI NHẬN</h2>
            <h3>Họ tên: '.$ht.'<br>  
            Địa chỉ: '.$diachi.'<br> 
            Điện thoại: '.$dt.'</h3> 
        </table>';
        }
    }

    function thongtindonhang(){}


    function tongdonhang(){
        $tong=0;
        if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt; 
                }
            }    
        }
        return $tong; 
}



    /*function taogiohang($Tensp, $Hinh, $Gia, $soluong, $thanhtien, $idbill){\
        require 'connect.php';
        $sql_cart="INSERT INTO cart (Tensp, Hinh, Gia, soluong, thanhtien, idbill) VALUES('$Tensp', '$Hinh', '$Gia', '$soluong', '$thanhtien', '$idbill')";
        $result_cart=mysqli_query($conn, $sql_cart);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="stylec.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Thanh toán</title>
</head>
<body>
<!----------------Header----------------------->
<?php
    include('header.php');
?>
<!-----------------Trang thanh toan------------------>
<section class="delivery">
    <div class="container">
            <div class="delivery-content ">
                <div class="delivery-content-left">
                    <div class="delivery-content-left-input-top ">
                        <?php echo $ttkh;?>
                    </div>
                </div>
                <div class="delivery-content-right">
                    <table>
                        <br>
                        <br>
                        <h1>Nội dung hàng: </h1>
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
                <a href="cart.php"><span>&#171;</span><p>Quay lại giỏ hàng</p></a>
                <a href="index.php"><input type="submit"  value="TIẾP TỤC MUA SẮM"></a>
            </div>
        </div>
</section>
<?php 
    include('footer.php');
?>
</body>
</html>