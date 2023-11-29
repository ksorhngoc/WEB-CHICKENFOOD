<?php
	if(isset($_GET['action'])){
		$tam = $_GET['action'];
	}
	else{
		$tam = 'sanPham';
	}
	if($tam == 'sanPham'){
		include( 'QuanLySanPham.php');
		
	}
	if($tam == 'nhanVien'){
		include('nhanVien.php');
	}
	if($tam == 'taiKhoan'){
		include('taiKhoan.php');
	}
	if($tam == 'doanhThu'){
		include( 'doanhThu.php');
	}

?>