<?php
	if(isset($_GET['action'])){
		$tam = $_GET['action'];
	}else{
		$tam = '';
	}
	if($tam == 'donHangChoXacNhan'){
		include('timKiem.php');
		include( 'donHangChoXacNhan.php');
		
	}
	if($tam == 'donHangChoGiao'){
		include('timKiem.php');
		include('donHangChoGiao.php');
	}
	if($tam == 'donHangDangGiao'){
		include('timKiem.php');
		include('donHangDangGiao.php');
	}
	if($tam == 'lichSuDonHang'){
		include('timKiem.php');
		include('lichSuDonHang.php');
	}
	if($tam == 'chiTietDonHang'){
		include('chiTietDonHang.php');
	}
	if($tam == 'capNhatTrangThaiDH'){
		include('capNhatTrangThaiDH.php');
	}
	if($tam == 'timKiem'){
		include('timKiem.php');
	}
	if($tam == 'xuLyTimKiem'){
		include('timKiem.php');
		include('xuLyTimKiem.php');
	}

?>