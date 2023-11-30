<head>
    <style>
        table tr:nth-child(odd){
            background-color:#FA8072;
        }
        table tr:hover{
            background-color: #FF3030;
        }
        .form-submit{
            background: #CC0000 ;
            border: 1px solid #f5f5f5;
            color: #fff;
            width: 100px;
            text-transform: uppercase;
            padding: 6px 10px;
            transition: 0.25s ease-in-out;
            float: right;
            margin: 30px 20px;
        }
        .form-submit:hover{
            background: #EE0000;
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
<form action="" method="post">
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
  <tr align="center" height="100px" onclick="location.href='index.php?action=taiKhoan&thongTin=thongTinTaiKhoan&ma=<?php echo $row['id']  ?>'; ">
   	<td><?php echo $row['tk']  ?></td>
    <td><?php echo $row['mk']  ?></td>
    <td><?php echo $row['LoaiTK']  ?></td>
   	<?php } ?>
  </tr>
    </table>
    <button type="submit" name="XoaTK" value="" class="form-submit">Xóa</button>
</form>
<?php } ?>
<?php 
    if(isset($_POST['XoaTK'])){
        $matk = $_GET["ma"];
        $sql_xoa = "DELETE from dangky WHERE id = '$matk' ";
        $run = $conn->query($sql_xoa);
        if($run){
            echo "<script>
            alert('Đã xóa tài khoản thành công');
            </script>";
        }else{
            die(mysqli_error($conn));
        }
    } 
?>