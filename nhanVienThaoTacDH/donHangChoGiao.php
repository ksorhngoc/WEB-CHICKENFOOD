<head>
<style>
	   .Button{
			width: 100px ; 
			height: 30px ; 
			border: 2px solid;
			margin: 30 10; 
			background:#CC0000;
			color: white;
	   }
	   .Button:hover{
			background:#006600;
	   }
</style>
</head>
<?php 
    include('connect.php');

    $sql="SELECT *FROM donhang where trangThai = '2' or trangThai = '3' or trangThai = '4' ";
	$run=$conn->query($sql);
    
    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: white"><b> Không có đơn hàng nào chờ được giao!</b></h1></center>
    <?php
    }
    else {
?>
<center><table width="90%" border="2" style="border-collapse: collapse; margin: 20px; background: #FFE4B5">
  <tr align="center" style="height: 50px; background: #FF9900" >
	<td width="200px"><div align="center"><b>Mã đơn hàng</b></div></td>
   	<td width="400px"><div align="center"><b>Tên khách hàng</b></div></td>
	<td width="400px"><div align="center"><b>Số điện thoại</b></div></td>
	<td width="200px"><div align="center"><b>Địa chỉ</b></div></td>
	<td width="200px"><div align="center"><b>Số lượng sản phẩm</b></div></td>
	<td width="400px"><div align="center"><b>Tổng tiền</b></div></td>
	<td width="150px"><div align="center"><b>Chi tiết đơn hàng</b></div></td>
	<td width="200px"><div align="center"><b>Trạng thái đơn hàng</b></div></td>
  </tr>
  <?php
  	
	while($row=$run->fetch_array()){
		$TT = $row['trangThai'];
  ?>
  <tr align="center">
   	<td><a style="text-decoration:none; color: black"><?php echo $row['maDH']  ?></a></td>
	<td><?php echo $row['tenKH'] ?></td>
	<td><?php echo $row['SDT'] ?></td>
	<td><?php echo $row['diaChi'] ?></td>
	<td><?php echo $row['SoluongSP'] ?></td>
	<td><?php echo $row['tongTien'] ?></td>
   	<td><a href="index.php?action=chiTietDonHang&ma=<?php echo $row['maDH']?>&trang=donHangChoGiao"><button class="Button">Chi tiết</button></a></td>
    <td><a href="index.php?action=capNhatTrangThaiDH&ma=<?php echo $row['maDH']?>&trang=donHangChoGiao"><button class="Button">cập nhật</button></a></td>
    <?php } ?>
  </tr>
    </table>
<?php } ?>
