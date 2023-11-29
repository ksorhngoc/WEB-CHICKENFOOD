<head>
    <style>
        table tr:nth-child(odd){
            background-color:#87CEFA;
        }
        table tr:hover{
            background-color: #63B8FF;
        }
    </style>
</head>
<?php 
    include('../connect.php');

    $sql="SELECT *FROM nhanvien";
	$run=$conn->query($sql);
    
    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: white"><b> Không có nhân viên nào cả!</b></h1></center>
    <?php
    }
    else {
?>
<center><h1 style="color: white"><b> DANH SÁCH NHÂN VIÊN</b></h1></center>
<center><table width="95%" border="2" style="border-collapse: collapse; margin: 20px; background: white;">
  <tr align="center" style="height: 50px; background: #3399CC; COLOR: WHITE" >
	<td width="100px"><div align="center"><b>Mã</b></div></td>
   	<td width="350px"><div align="center"><b>Tên</b></div></td>
	<td width="400px"><div align="center"><b>GT</b></div></td>
    <td width="200px"><div align="center"><b>Địa chỉ</b></div></td>
	<td width="200px"><div align="center"><b>SĐT </b></div></td>
	<td width="200px"><div align="center"><b>Email</b></div></td>
    <td width="100px"><div align="center"><b>Chức vụ</b></div></td>
   	<td width="350px"><div align="center"><b>Lương CB</b></div></td>
	<td width="400px"><div align="center"><b>Khen/Phạt</b></div></td>
	<td width="200px"><div align="center"><b>Tổng lương </b></div></td>
	<td width="200px"><div align="center"><b>Ghi chú</b></div></td>
  </tr>
  <?php
  	
	while($row=$run->fetch_array()){
  ?>
  <tr align="center" height="100px" onclick="location.href='index.php?action=nhanVien&thongTin=thongTinNhanVien&ma=<?php echo $row['ma']  ?>';">
   	<td><?php echo $row['ma']  ?></td>
    <td><?php echo $row['ten']  ?></td>
    <td><?php echo $row['GT']  ?></td>
    <td><?php echo $row['DiaChi']  ?></td>
    <td><?php echo $row['SDT']  ?></td>
    <td><?php echo $row['Email']  ?></td>
    <td><?php echo $row['chucvu']  ?></td>
	<td><?php echo $row['luongCB'] ?></td>
	<td><?php echo $row['khen/phat'] ?></td>
	<td><?php echo $row['tongLuong'] ?></td>
    <td><?php echo $row['ghiChu'] ?></td>
   	<?php } ?>
  </tr>

    </table>
<?php } ?>
