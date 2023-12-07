<head>
<style>
	   .btn{
			width: 100px ; 
			height: 30px ; 
			border: 2px solid;
			margin: 30 10; 
			background:#CC0000;
			color: white;
	   }
	   .btn:hover{
			background:#006600;
	   }
</style>
</head>
<body>
<?php 
    include('connect.php');

    $sql="SELECT *FROM donhang where trangThai = '1' ";
	  $run=$conn->query($sql);

    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: white"><b> Không có đơn hàng cần xác nhận!</b></h1></center>
    <?php
    }
    else {
?>
<center><h1 style="color: white"><b> DANH SÁCH ĐƠN HÀNG CHỜ XÁC NHẬN</b></h1></center>
<center><table width="90%" border="2" style="border-collapse: collapse; margin: 20px; background: #FFE4B5">
  <tr align="center" style="height: 50px; background: #FF9900" >
	<td width="200px"><div align="center"><b>Mã đơn hàng</b></div></td>
   	<td width="400px"><div align="center"><b>Tên khách hàng</b></div></td>
	<td width="400px"><div align="center"><b>Số điện thoại</b></div></td>
	<td width="400px"><div align="center"><b>Địa chỉ</b></div></td>
	<td width="200px"><div align="center"><b>Số lượng sản phẩm</b></div></td>
	<td width="400px"><div align="center"><b>Tổng tiền</b></div></td>
	<td width="150px"><div align="center"><b>Chi tiết đơn hàng</b></div></td>
	<td width="250px"><div align="center"><b>Xác nhận đơn hàng</b></div></td>
	<td width="200px"><div align="center"><b>Hủy</b></div></td>
  </tr>
  <?php
  	
	while($row=$run->fetch_array()){
  ?>
  <tr align="center">
   	<td><?php echo $row['maDH'] ?></td>
	<td><?php echo $row['tenKH'] ?></td>
	<td><?php echo $row['SDT'] ?></td>
	<td><?php echo $row['diaChi'] ?></td>
	<td><?php echo $row['SoluongSP'] ?></td>
	<td><?php echo '' .number_format($row['tongTien']).' VNĐ'. ''?></td>
    
        <td><a href="index.php?action=chiTietDonHang&ma=<?php echo $row['maDH']?>&trang=donHangChoXacNhan"><button class="btn" id="chiTietDonHang" name = "chiTietDH"  >Chi tiết</button></a></td>
		<form action= "index.php?action=donHangChoXacNhan&ma=<?php echo $row['maDH']?>" method="post">
        <td>
            <button class="btn" id="xacNhanDonHang" name="xacNhanDH">Xác nhận</button>
		</td>
		<td><button class="btn" id="huyDonHang" name="huyDH" >Hủy</button></td>
		</form>
   	 <?php } ?>
		<script>
		var btnChiTietDH = document.getElementById("chiTietDonHang");
	 	var btnXacNhanDH = document.getElementById("xacNhanDonHang");
        var btnHuyDH = document.getElementById("huyDonHang");

		// Thiết lập click cho button xác nhận đơn hàng
		btnChiTietDH.onclick = function () {
                btnChiTietDH.style.background = "#006600";
				
            };
        // Thiết lập click cho button xác nhận đơn hàng
        btnXacNhanDH.onclick = function () {
            btnXacNhanDH.style.background = "#006600";
			alert('Đã xác nhận đơn hàng thành công');
        };
		// Thiết lập click cho button hủy đơn hàng
		btnHuyDH.onclick = function () {
            btnHuyDH.style.background = "#006600";
			alert('Đã hủy đơn hàng thành công');
        };
  </script>
  </tr>
    </table>
<?php } ?>
</body>
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
