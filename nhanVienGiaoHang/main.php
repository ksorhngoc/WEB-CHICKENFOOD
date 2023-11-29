<?php
	if(isset($_GET['action'])){
		$tam = $_GET['action'];
	}else{
		$tam = 'donHangChoLay';
	}
	if($tam == 'donHangChoLay'){
		include('donHangCholay.php');
	}
	if($tam == 'donHangDangGiao'){
		include('donHangDangGiao.php');
	}
	if($tam == 'donHangGiaoThanhCong'){
		include('donHangGiaoThanhCong.php');
	}
	if($tam == 'donHangGiaoKhongTC'){
		include('donHangGiaoKhongTC.php');
	}
	if($tam == 'donHangDaHuy'){
		include('donHangDaHuy.php');
	}
	if($tam == 'chiTietDonHang'){
		include('chiTietDonHang.php');
	}
	if($tam == 'xacNhanDonDangGiao'){
		include('xacNhanDonDangGiao.php');
	}
	if($tam == 'xacNhanDonGiaoKTC'){
		include('xacNhanDonGiaoKTC.php');
	}
?>