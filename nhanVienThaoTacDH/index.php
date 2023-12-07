<?php 
    session_start();
    $ten = $_SESSION['tk'];
    include 'connect.php';
?>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .btnDonHang{
            width: 200px ; 
            height: 50px ; 
            border: 2px solid; 
            margin: 30 10; 
            background: #F0E68C;
            font-size: 15px;
        }
        .btnDonHang:hover{
            background: #6699CC;
        }
        .dangXuat{
            width: 100px ; 
            height: 30px ; 
            border: 2px solid; 
            background: #4682b4; 
            float: right; 
            margin: 15pt 10pt;
        }
        .dangXuat:hover{
            background: #0099FF;
        }
    </style>
</head>
<body background="imgs/background.jpg">
    <div class = "logo" style=" width: 200px ; height: 200px ; margin: 10 auto;" >
        <center><img src="imgs/logo.jpg"  style="width: 150px ; height: 150px ; margin: 10"></center>
    </div>
    <center><h1 style="color: white;">HỆ THỐNG QUẢN LÝ BÁN GÀ RÁN</h1></center>
    <div class = "main" style="width: 99%; height: AUTO; border: 2px solid white; margin: auto">
    
        <a href="index.php?action=donHangChoXacNhan"><button class="btnDonHang" id="DHChoXacNhan"><b>Đơn hàng chờ xác nhận</b></button></a>
        <a href="index.php?action=donHangChoGiao"><button class="btnDonHang" id="DHChoGiao"><b>Đơn hàng chờ giao</b></button></a>
        <a href="index.php?action=donHangDangGiao"><button class="btnDonHang" id="DHDangGiao"><b>Đơn hàng đang giao</b></button></a>
        <a href="index.php?action=lichSuDonHang"><button class="btnDonHang" id="LichSuDH"><b>Lịch sử đơn hàng</b></button></a>
        <div style=" width: 295; height: 100; float: right;  margin-top: 0pt;">
            <a href="../dang-xuat.php"><button class="dangXuat">Đăng xuất</button></a>
            <hr style="width: 1; height: 100; float: left;  border: 1px solid white;">
            <h2 style=" margin-right: 120pt; color:white; margin-left: 5pt;">Xin chào <i class="fa-regular fa-circle-user" style="color: #4682B4;"></i> </h2>
            <p style="font-size: 18px; color: white"><b><?php echo $ten ?></b></p>
        </div>
        <hr>
        <script>
            var btnDHChoXacNhan = document.getElementById("DHChoXacNhan");
            var btnDHChoGiao = document.getElementById("DHChoGiao");
            var btnDHDangGiao = document.getElementById("DHDangGiao");
            var btnLichSuDH = document.getElementById("LichSuDH");

            // Thiết lập click cho button đơn hàng chờ xác nhận
            btnDHChoXacNhan.onclick = function () {
                btnDHChoXacNhan.style.background = "#6699CC";
                
            };
             // Thiết lập click cho button đơn hàng chờ giao
            btnDHChoGiao.onclick = function () {
                btnDHChoGiao.style.background = "#6699CC";
            };
             // Thiết lập click cho button đơn hàng đang giao
            btnDHDangGiao.onclick = function () {
                btnDHDangGiao.style.background = "#6699CC";
            };
             // Thiết lập click cho button lịch sử đơn hàng 
            btnLichSuDH.onclick = function () {
                btnLichSuDH.style.background = "#6699CC";
            };

        </script>
        <?php include 'main.php' ?>
    
    </div>
    
</body>
</html>
<?php 
	
    if(isset($_POST["xacNhanDH"])){
		$ma_dh = $_GET['ma'];
		$sql = "UPDATE donhang set trangThai = '2' where maDH = '$ma_dh' ";
		$run=$conn->query($sql);
	}    
	if(isset($_POST["huyDH"])){
		$ma_dh = $_GET['ma'];
		$sql = "UPDATE donhang set trangThai = '0' where maDH = '$ma_dh' ";
		$run=$conn->query($sql);
	}
?>


