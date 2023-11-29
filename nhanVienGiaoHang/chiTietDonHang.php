<?php 
    include('connect.php');
	$ma_dh = $_GET['ma'];
	$trang = $_GET['trang'];
	$sql="SELECT *FROM chitietdh Where chitietdh.maDH = '$ma_dh ' ";
	$run=$conn->query($sql);

    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: red"><b> Không có chi tiết đơn hàng!</b></h1></center>
        <td><a href="index.php?action=<?php echo $trang?>"><button style="width: 100px ; height: 30px ; border: 2px solid black; margin: 30 10; background:#CC0000; color: white; float: right; margin-right: 120px" >Quay về</button></a></td>
    <?php
    }
    else {
?>
<center><h1 style="color: yellow"><b> Chi tiết đơn hàng <?php echo $ma_dh ?></b></h1></center>
<center><table width="80%" border="2" style="border-collapse: collapse; margin: 20px; background: #FFE4B5">
  <tr align="center" style="height: 50px; background: #FF9900" >
  	<td width="200px"><div align="center"><b>STT</b></div></td>
	<td width="200px"><div align="center"><b>Mã sản phẩm</b></div></td>
   	<td width="400px"><div align="center"><b>Tên sản phẩm</b></div></td>
	<td width="400px"><div align="center"><b>Số lượng</b></div></td>
	<td width="200px"><div align="center"><b>Giá</b></div></td>
	<td width="200px"><div align="center"><b>Tổng tiền</b></div></td>
  </tr>
  <?php
  	$STT = 0;
	$thanhtien=0;
	while($row=$run->fetch_array()){
		$thanhtien+=$row['tongTien'];
  ?>
  <tr align="center">
	<td><?php echo $STT+1 ?></td>
	<td><?php echo $row['maSP'] ?></td>
	<td><?php echo $row['tenSP'] ?></td>
	<td><?php echo $row['soLuong'] ?></td>
	<td><?php echo number_format($row['gia']) ?> VND</td>
	<td><?php echo number_format($row['tongTien']) ?> VND</td>
   	<?php } ?>
  </tr>
  <tr>
    <td colspan="5" style="padding-left:10px; margin-bottom: 30px">
    <?php
        
            echo '<h3>Thành tiền</h3>';
        
    ?>
    </td>
	<td>
    <?php
        
            echo '<center><h3> '.number_format($thanhtien).'VNĐ'.'</h3></center>';
        
    ?>
    </td>
  </tr>
    </table>
	<td><a href="index.php?action=<?php echo $trang?>"><button style="width: 100px ; height: 30px ; border: 2px solid black; margin: 30 10; background:#CC0000; color: white; float: right; margin-right: 120px" >Quay về</button></a></td>

<?php } ?>