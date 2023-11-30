<?php 
    session_start();
    $ten = $_SESSION['tk'];
    include '../connect.php';
?>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .btnDonHang{
            width: 105px ; 
            height: 50px ; 
            border: 2px solid; 
            margin: 30 3; 
            background: #C1FFC1;
            font-size: 12px;
        }
        #saoLuu{
            width: 130px ; 
        }
        #LichSuDH{
            width: 130px ; 
        }
        .btnDonHang #lichSuDonHang{
            width: 110px ; 
        }
        .btnDonHang:hover{
            background: #EEAD0E;
        }
        .dangXuat{
            width: 80px ; 
            height: 30px ; 
            border: 2px solid; 
            background: #4682b4; 
            float: right; 
            margin: 15pt 5pt;
        }
        .dangXuat:hover{
            background: #0099FF;
        }
    </style>
</head>
<body background="../images/background3.jpg">
    <div class = "logo" style=" width: 200px ; height: 200px ; margin: 10 auto;" >
        <center><img src="../images/logo.jpg"  style="width: 150px ; height: 150px ; margin: 10"></center>
    </div>
    <center><h1 style="color: white;">HỆ THỐNG QUẢN LÝ BÁN GÀ RÁN</h1></center>
    <div class = "main" style="width: 99%; border: 2px solid white; margin: auto;">
    
        <a href="QuanLySanPham.php?ma=0"><button class="btnDonHang" name="SanPham" id="sanPham"><b>Sản phẩm</b></button></a>
        <a href="QuanLyNhanVien.php?ma=0"><button class="btnDonHang" id="nhanVien"><b>Nhân viên</b></button></a>
        <a href="QuanLyTaiKhoan.php?ma=0"><button class="btnDonHang" id="TaiKhoan"><b>Tài khoản</b></button></a>
        <a href="QuanLyDoanhThu.php"><button class="btnDonHang" id="doanhThu"><b>Doanh Thu</b></button></a>
        <a href="index.php?action=lichSuDonHang"><button class="btnDonHang" id="LichSuDH"><b>Lịch sử đơn hàng </b></button></a>
        <a href="QuanLyTuyenDung.php"><button class="btnDonHang" id="Tuyển dụng"><b>Tuyển Dụng</b></button></a>
        <a href="saoLuu_PhucHoi.php"><button class="btnDonHang" id="saoLuu"><b>Sao lưu & Phục hồi</b></button></a>
        <a href="QuanLyQuangCao.php"><button class="btnDonHang" id="QuangCao"><b>Quảng cáo</b></button></a>
        <div style=" width: 200; height: 100; float: right;  margin-top: 0pt;">
            <a href="../dang-xuat.php"><button class="dangXuat">Đăng xuất</button></a>
            <hr style="width: 1; height: 100; float: left;  border: 1px solid white;">
            <h3 style=" margin-right: 8pt; color:white; margin-left: 5pt;">Xin chào <i class="fa-regular fa-circle-user" style="color: #4682B4;"></i></h3>
            <p style="font-size: 18px; color: white"><b><?php echo $ten ?></b></p>
        </div>
        <hr>
      
        <div style="width: 30%; float: left;margin-left: 5;">
            <?php 
                include 'thongTinTaiKhoan.php' ;
            ?>

        </div>
        <div style="width: 68%; border-left: 2px solid white; float: right; ">
                 <?php include 'taiKhoan.php' ?>
        </div>
    </div>
        
</body>
</html>



