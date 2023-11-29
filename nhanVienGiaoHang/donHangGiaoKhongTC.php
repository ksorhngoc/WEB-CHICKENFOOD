<?php 
    include('connect.php');
    $sql="SELECT *FROM donhang where trangThai = '7'";
    $run=$conn->query($sql);

    if(($run->num_rows) < 1){ ?>
        <center><h1 style="color: red"><b> Không có đơn hàng giao không thành công!</b></h1></center>
    <?php
    }
    else {
?>
<center><table width="80%" border="2" style="border-collapse: collapse; margin: 20px; background: #FFE4B5">
  <tr align="center" style="height: 50px; background: #FF9900" >
	<td width="150px"><div align="center"><b>Mã đơn hàng</b></div></td>
   	<td width="300px"><div align="center"><b>Tên khách hàng</b></div></td>
	<td width="200px"><div align="center"><b>Số điện thoại</b></div></td>
	<td width="500px"><div align="center"><b>Địa chỉ</b></div></td>
	<td width="100px"><div align="center"><b>Số lượng sản phẩm</b></div></td>
	<td width="150px"><div align="center"><b>Tổng tiền</b></div></td>
	<td width="150px"><div align="center"><b>Chi tiết đơn hàng</b></div></td>
	<td width="200px"><div align="center"><b>Trạng thái đơn hàng</b></div></td>
  </tr>
  <?php
  	
	while($row=$run->fetch_array()){
		$TT = $row['trangThai'];
  ?>
  <tr align="center">
   	<td><a style="text-decoration:none; color: black" href="index.php?action=chiTietDonHang&ma=<?php echo $row['maDH']  ?>"><?php echo $row['maDH']  ?></a></td>
	<td><?php echo $row['tenKH'] ?></td>
	<td><?php echo $row['SDT'] ?></td>
	<td><?php echo $row['diaChi'] ?></td>
	<td><?php echo $row['SoluongSP'] ?></td>
	<td><?php echo $row['tongTien'] ?></td>
   	<td><a href="index.php?action=chiTietDonHang&ma=<?php echo $row['maDH']?>&trang=donHangGiaoKhongTC"><button style="width: 100px ; height: 30px ; border: 2px solid; margin: 30 10; background:#CC0000;color: white" >Xem chi tiết</button></a></td>
    <td><a href="index.php?action=xacNhanDonGiaoKTC&ma=<?php echo $row['maDH']?>"><button style="width: 100px ; height: 30px ; border: 2px solid; margin: 30 10; background:#CC0000; color: white" >Cập nhật</button></a></td>
    <?php } ?>
  </tr>
    </table>
<?php } 
?>