<?php
	if(isset($_GET['thongTin'])){
		$thongTin = $_GET['thongTin'];
	}
	if($thongTin == 'thongTinSP'){
		include( 'thongTinSP.php');
	}
	if($thongTin == 'thongTinNhanVien'){
		include( 'thongTinNhanVien.php');
	}
	if($thongTin == 'thongTinTaiKhoan'){
		include( 'thongTinTaiKhoan.php');
	}
	if($thongTin == 'doanhThu'){
		include( 'doanhThu.php');
	}

?>