<?php 
    session_start();
    $ten = $_SESSION['tk'];
    include 'connect.php';
?>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body background="imgs/background.jpg">
    <div class = "logo" style=" width: 200px ; height: 200px ; margin: 10 auto;" >
        <center><img src="imgs/logo.jpg"  style="width: 150px ; height: 150px ; margin: 10"></center>
    </div>
    <center><h1 style="color: yellow;"> DANH SÁCH ĐƠN HÀNG </h1></center>
    <div class = "main" style="width: 1200px ; height: 800px ; border: 2px solid white; margin: auto">  
        <a href="index.php?action=donHangChoLay"><button id="DHCholay" style="width: 130px ; height: 50px ; border: 2px solid; margin: 30 10; background: #F0E68C; " >Đơn hàng chờ lấy</button></a>
        <a href="index.php?action=donHangDangGiao"><button class="DHDangGiao" style="width: 150px ; height: 50px ; border: 2px solid; margin: 30 10; background: #F0E68C;" >Đơn hàng đang giao</button></a>
        <a href="index.php?action=donHangGiaoThanhCong"><button class="DHGiaoTC" style="width: 180px ; height: 50px ; border: 2px solid; margin: 30 10; background: #F0E68C;" >Đơn hàng giao thành công</button></a>
        <a href="index.php?action=donHangGiaoKhongTC"><button class="DHGiaoKTC" style="width: 230px ; height: 50px ; border: 2px solid; margin: 30 10; background: #F0E68C;" >Đơn hàng giao không thành công</button></a>
        <a href="index.php?action=donHangDaHuy"><button class="DHDahuy" style="width: 150px ; height: 50px ; border: 2px solid; margin: 30 10; background: #F0E68C;" >Đơn hàng đã hủy</button></a>    
  
        <div style=" width: 240; height: 100; float: right;  margin-top: 0pt;">
            <a href="../dang-xuat.php"><button  style="width: 80px ; height: 35px ; border: 2px solid; background: #4682b4; float: right; margin: 5pt 5pt; ">Đăng xuất</button></a>
            <hr style="width: 1; height: 100; float: left;  border: 1px solid white;">
            <h2 style=" margin-right: 80pt; color:white; margin-left: 5pt;">Xin chào <i class="fa-regular fa-circle-user" style="color: #4682B4;"></i> </h2>
            <p style="font-size: 18px; color: white"><b><?php echo $ten ?></b></p>
        </div>
        <hr>
        
        <?php include 'main.php' ?>
    
    </div>
</body>
</html>
<script src="trangChu.js">
    const btn = document.getElementById('DHChoLay');

btn.addEventListener('click', function onClick() {
  btn.style.backgroundColor = '';
  btn.style.color = 'white';
});
<script>

