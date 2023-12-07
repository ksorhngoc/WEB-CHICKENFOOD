<head>
    <style>
        .btn-ChiTiet{
            width: 100px ; 
            height: 30px ; 
            border: 2px solid; 
            margin: 30 10; 
            background:#CC0000;
            color: white;
        }
        .btn-ChiTiet:hover{
            background: #006600;
        }
    </style>
</head>
<?php 
    include('connect.php');

    $sql="SELECT *FROM donhang where trangThai = '0' OR trangThai = '6' OR trangThai = '7' ";
	$run=$conn->query($sql);

    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: white"><b> Không có lịch sử đơn hàng nào cả!</b></h1></center>
    <?php
    }
    else {
?>
<center><h1 style="color: white"><b> DANH SÁCH LỊCH SỬ ĐƠN HÀNG</b></h1></center>
<center><table width="90%" border="2" style="border-collapse: collapse; margin: 20px; background: #FFE4B5">
  <tr align="center" style="height: 50px; background: #FF9900" >
	<td width="200px"><div align="center"><b>Mã đơn hàng</b></div></td>
   	<td width="400px"><div align="center"><b>Tên khách hàng</b></div></td>
	<td width="400px"><div align="center"><b>Số điện thoại</b></div></td>
	<td width="200px"><div align="center"><b>Địa chỉ</b></div></td>
	<td width="200px"><div align="center"><b>Số lượng sản phẩm</b></div></td>
	<td width="300px"><div align="center"><b>Tổng tiền</b></div></td>
	<td width="150px"><div align="center"><b>Chi tiết đơn hàng</b></div></td>
	<td width="400px"><div align="center"><b>Trạng thái đơn hàng</b></div></td>
  </tr>
  <?php
  	
	while($row=$run->fetch_array()){
		$TT = $row['trangThai'];
  ?>
  <tr align="center">
   	<td><?php echo $row['maDH'] ?></td>
	<td><?php echo $row['tenKH'] ?></td>
	<td><?php echo $row['SDT'] ?></td>
	<td><?php echo $row['diaChi'] ?></td>
	<td><?php echo $row['SoluongSP'] ?></td>
	<td><?php echo $row['tongTien'] ?></td>
    
        <td><a href="index.php?action=chiTietDonHang&ma=<?php echo $row['maDH']?>&trang=lichSuDonHang"><button class="btn-ChiTiet" name = "btn-xacnhan">Chi tiết</button></a></td>
        <td><?php  
            if($TT == '0'){
                echo '<p style="color: red">Đơn hàng bị hủy!</p>';
            }
            else if( $TT == '7'){
                echo '<p style="color: red">Giao không thành công!</p>';
            }
            else{
                echo 'Đơn hàng đã được giao thành công';
            }
        ?></td>
   	 <?php } ?>
  </tr>
    </table>
<?php } ?>
<?php 
    
?>