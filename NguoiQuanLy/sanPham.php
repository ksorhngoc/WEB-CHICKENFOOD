<head>
    <style>
        table tr:nth-child(odd){
            background-color:#90EE90;
        }
        table, th, td{
            border-top:1px solid black;
            border-bottom:1px solid black;
        }
        table tr:hover{
            background-color: #228B22;
        }
    </style>
</head>
<?php 
    include('../connect.php');

    $sql="SELECT *FROM sanpham";
	$run=$conn->query($sql);
    
    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: white"><b> Chưa có sản phẩm!</b></h1></center>
    <?php
    }
    else {
?>
<center><h1 style="color: white"><b> DANH SÁCH SẢN PHẨM</b></h1></center>
<center><table width="95%" border="2" style="border-collapse: collapse; margin: 20px; background: white; border: none">
  <tr align="center" style="height: 50px; background: #336600; COLOR: WHITE" >
	<td width="100px"><div align="center"><b>Mã</b></div></td>
   	<td width="350px"><div align="center"><b>Hình ảnh</b></div></td>
	<td width="400px"><div align="center"><b>Tên</b></div></td>
	<td width="200px"><div align="center"><b>Giá </b></div></td>
	<td width="200px"><div align="center"><b>Mã danh mục</b></div></td>
  </tr>
  <?php
  	
	while($row=$run->fetch_array()){
  ?>
  <tr align="center" height="100px" onclick="location.href='index.php?action=sanPham&thongTin=thongTinSP&ma=<?php echo $row['cartegory_id']  ?>';">
  <a href = "index.php?thongTin=thongTinSP&ma=<?php echo $row['cartegory_id']  ?>">
   	<td><?php echo $row['cartegory_id']  ?></td></a>
	<td><img width="100px" src="../<?php echo $row['Hinh'] ?>" alt=""></td>
	<td><?php echo $row['Tensp'] ?></td>
	<td><?php echo $row['Gia'] ?></td>
	<td><?php echo $row['Madanhmuc'] ?></td>
   	<?php } ?>
  </tr>

    </table>
<?php } ?>
