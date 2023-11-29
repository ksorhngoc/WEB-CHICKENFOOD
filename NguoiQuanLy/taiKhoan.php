<head>
    <style>
        table tr:nth-child(odd){
            background-color:#FA8072;
        }
        table tr:hover{
            background-color: #FF3030;
        }
    </style>
</head>
<?php 
    include('../connect.php');

    $sql="SELECT *FROM dangky";
	$run=$conn->query($sql);
    
    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: white"><b> Không có tài khoản nào cả!</b></h1></center>
    <?php
    }
    else {
?>
<center><h1 style="color: white"><b> DANH SÁCH TÀI KHOẢN</b></h1></center>
<center><table width="95%" border="2" style="border-collapse: collapse; margin: 20px; background: white;">
  <tr align="center" style="height: 50px; background: #B22222; COLOR: WHITE" >
	<td width="100px"><div align="center"><b>Tài khoản</b></div></td>
   	<td width="350px"><div align="center"><b>Mật khẩu</b></div></td>
	<td width="400px"><div align="center"><b>Loại tài khoản</b></div></td>
  </tr>
  <?php
  	
	while($row=$run->fetch_array()){
  ?>
  <tr align="center" height="100px">
   	<td><?php echo $row['tk']  ?></td>
    <td><?php echo $row['mk']  ?></td>
    <td><?php echo $row['LoaiTK']  ?></td>
   	<?php } ?>
  </tr>

    </table>
<?php } ?>