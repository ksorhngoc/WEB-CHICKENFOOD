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

    $sql="SELECT *FROM sanpham";
	$run=$conn->query($sql);
    
    if(($run->num_rows) < 1 ){ ?>
        <center><h1 style="color: white"><b> Chưa có sản phẩm!</b></h1></center>
    <?php
    }
    else {
?>
<form action="" method="post">
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
  <tr align="center" height="100px" onclick="location.href='QuanLySanPham.php?ma=<?php echo $row['cartegory_id']  ?>';">
  <a href = "index.php?thongTin=thongTinSP&ma=<?php echo $row['cartegory_id']  ?>">
   	<td><?php echo $row['cartegory_id']  ?></td></a>
	<td><img width="100px" src="../<?php echo $row['Hinh'] ?>" alt=""></td>
	<td><?php echo $row['Tensp'] ?></td>
	<td><?php echo $row['Gia'] ?></td>
	<td><?php echo $row['Madanhmuc'] ?></td>
   	<?php } ?>
  </tr>
    </table>
    <button type="submit" onclick="TaoMoi()" id="taomoi" name="TaoMoiSP" class="form-submit">Tạo mới</button>
    <button type="submit" name="XoaSP" value="" class="form-submit">Xóa</button>
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
    if(isset($_POST['XoaSP'])){
        $masp = $_GET["ma"];
        $sql_xoa = "DELETE from sanpham WHERE cartegory_id = '$masp' ";
        $run = $conn->query($sql_xoa);
        if($run){
            echo "<script>
            alert('Đã xóa sản phẩm thành công');
            </script>";
        }else{
            die(mysqli_error($conn));
        }
    } 
    if(isset($_POST['TaoMoiSP'])){ 
        $TM =  $_POST['TaoMoiSP'];
        if($TM == "dongy"){
            $sql_xoa = "DELETE from sanpham";
            $run = $conn->query($sql_xoa);
            if($run){
                echo "<script>
                alert('Đã tạo mới sản phẩm thành công.');
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
