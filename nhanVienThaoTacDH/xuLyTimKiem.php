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
        .btn-CapNhat{
            width: 100px ; 
            height: 30px ; 
            border: 2px solid; 
            margin: 30 10; 
            background:#CC0000; 
            color: white
        }
        .btn-CapNhat:hover{
            background: #006600;
        }
    </style>
</head>    
<?php 
    include('connect.php');

    if(isset($_POST["timKiemDH"])){
		$tukhoa = $_POST["tuKhoa"];
    }
    else{
        $tukhoa = $_GET["tuKhoa"];
    }
    if($tukhoa == ''){
        echo '<center><h3 style="color: white">Vui lòng nhập mã đơn hàng hoặc tên khách hàng cần tìm!</h3><center>';
    }
    else{
        
        $sql="SELECT *FROM donhang WHERE maDH LIKE '%$tukhoa%' OR tenKH LIKE '%$tukhoa%' ";
	    $run=$conn->query($sql);

        if(($run->num_rows) < 1 ){ ?>
            <center><h1 style="color: white"><b> Dữ liệu không tồn tại!</b></h1></center>
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
	                <td width="400px"><div align="center"><b>Trạng thái</b></div></td>
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
                    <td><a href="index.php?action=chiTietDonHang&ma=<?php echo $row['maDH']?>&trang=xuLyTimKiem&tuKhoa=<?php echo $tukhoa ?>"><button class="btn-ChiTiet" name = "chiTietDH">Chi tiết</button></a></td>
                    <td>
                        <?php 
                            if($TT == '1'){
                        ?>
                                <button class="btn-XacNhan" name="xacNhanDH" style="float: left;width: 80px ; height: 30px ; border: 2px solid; margin: 30 10; background:#CC0000; color: white" >Xác nhận</button>
                                <button class="btn-Huy" name="huyDH" style=" float: right; width: 80px ; height: 30px ; border: 2px solid; margin: -60 10; background:#CC0000; color: white" >Hủy</button>
                        <?php
                            }
                            else if($TT == '2' || $TT == '3'){
                        ?>
                                <a href="index.php?action=capNhatTrangThaiDH&ma=<?php echo $row['maDH']?>&trang=xuLyTimKiem&tuKhoa=<?php echo $tukhoa ?>"><button class="btn-CapNhat" name="CapNhatTT">Cập nhật</button></a>
                                
                        <?php
                            }
                            else if($TT == '4'){
                                echo 'Đang giao';
                            }
                            else if($TT == '5'){
                                echo 'Đơn hàng đã được giao thành công';
                            }
                            else if($TT == '6'){
                                echo '<p style="color: red">Giao không thành công!</p>';
                            }
                            else if($TT == '0'){
                                echo '<p style="color: red"> Đơn hàng bị hủy!</p>';
                            }
                               
                        ?>
                    </td>
                <?php 
                    } 
                ?>
            </table>
<?php
        }
    }
    
?>

