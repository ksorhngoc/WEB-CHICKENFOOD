<head>
<style>
	   .btnTimKiem{
            width: 80px ; 
            height: 30px ; 
            border: 2px solid black; 
            margin: 30 10; 
            background:#900000; 
            color: white; 
	   }
	   .btnTimKiem:hover{
			background:#CC0000;
	   }
</style>
<center>
<form action= "index.php?action=xuLyTimKiem" method="post">
    <input type="text" name="tuKhoa" placeholder="Nhập tên đơn hàng hoặc tên khách hàng" style="width: 250; height: 30;">
    <button class="btnTimKiem" name="timKiemDH">Tìm kiếm</button>
</form>
</center>
