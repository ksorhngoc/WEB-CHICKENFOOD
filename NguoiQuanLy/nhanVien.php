<head>
    <style>
        table tr:nth-child(odd){
            background-color:#87CEFA;
        }
        table tr:hover{
            background-color: #63B8FF;
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
        .form-tinhluong{
            background: #CC0000 ;
            border: 1px solid #f5f5f5;
            color: #fff;
            width: 150px;
            text-transform: uppercase;
            padding: 6px 10px;
            transition: 0.25s ease-in-out;
            float: left;
            margin: 30px 20px;
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
<form action="" method="post">
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
  <tr align="center" height="100px" onclick="location.href='QuanLyNhanVien.php?ma=<?php echo $row['ma']  ?>';">
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
    <button type="submit" name="TinhLuong" value="" class="form-tinhluong">Tính Lương</button>
    <button type="submit" onclick="TaoMoi()" id="taomoi" name="TaoMoiNV" class="form-submit">Tạo mới</button>
    <button type="submit" name="XoaNV" value="" class="form-submit">Xóa</button>
</form>
<?php } ?>
<script>
        function TaoMoi(){
            if(confirm("Bạn có chắc muốn tạo mới. Dữ liệu hiện có sẽ bị xóa hết nếu bạn đồng ý.") == true){
                document.getElementById("taomoi").value = "dongy";
            }else{
                document.getElementById("taomoi").value = "huy";
            }
        }
</script>
<?php 
    if(isset($_POST['XoaNV'])){
        $manv = $_GET["ma"];
        $sql_xoa = "DELETE from nhanvien WHERE ma = '$manv' ";
        $run = $conn->query($sql_xoa);
        if($run){
            echo "<script>
            alert('Đã xóa nhân viên thành công');
            </script>";
        }else{
            die(mysqli_error($conn));
        }
    } 
    if(isset($_POST['TaoMoiNV'])){ 
        $TM =  $_POST['TaoMoiNV'];
        if($TM == "dongy"){
            $sql_xoa = "DELETE from sanpham";
            $run = $conn->query($sql_xoa);
            if($run){
                echo "<script>
                alert('Đã tạo mới nhân viên thành công.');
                </script>";
            }else{
                die(mysqli_error($conn));
            }
        }
        else{
            echo "<script>
                alert('Đã hủy lệnh tạo mới.');
                </script>";
        }
    } 
?>
