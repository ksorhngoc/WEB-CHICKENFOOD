<html>
<head>
   
	<meta charset="utf8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        

</head>
<?php 
    include('connect.php');

    $ma_dh = $_GET['ma'];
    $sql = "SELECT *FROM donhang WHERE maDH = '$ma_dh' ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>

<center><div style=" width: 600; height: 400; background: #FFCC99; margin">
    <center><h1 style="padding-top: 30px" ><b> CẬP NHẬT TRẠNG THÁI ĐƠN HÀNG</b></h1></center>
    <table style=" width: 600; float: left; margin: 30px 50px " >
        <tr>
			<td style="width: 200px; "><b>Mã đơn hàng:</b></td>
			<td><?php echo $row['maDH']  ?></td>
	    </tr>
        <tr>
			<td><b>Người nhận:</b></td>
			<td><?php echo $row['tenKH']  ?></td>
	    </tr>
        <tr>
			<td><b>Số điện thoại:</b></td>
			<td><?php echo $row['SDT']  ?></td>
	    </tr>
        <tr>
			<td><b>Địa chỉ:</b></td>
			<td><?php echo $row['diaChi']  ?></td>
	    </tr>
        <tr>
			<td><b>Số lượng sản phẩm:</b></td>
			<td><?php echo $row['SoluongSP']  ?></td>
	    </tr>
        <tr>
			<td><b>Tổng tiền:</b></td>
			<td><?php echo $row['tongTien']  ?></td>
	    </tr>
    </table>
    <br></br>
    <form action= "index.php?action=xacNhanDonGiaoKTC&ma=<?php echo $ma_dh ?>" method="post">
    <input type="radio" name="trangThai" value="6"/><b>Giao thành công</b>
    <input  style="margin-left: 100px" type="radio" name="trangThai" value="0"/><b>Hủy đơn</b>
    <button style="float: right; width: 100px ; height: 30px ; border: 2px solid black; margin: 40 130; background:#CC0000;color: white; " name="capNhat" >Cập nhật</button>
    </form>
    <a href="index.php?action=donHangGiaoKhongTC"><button style=" float: left; width: 100px ; height: 30px ; border: 2px solid black; margin: -70 130; background:#CC0000;color: white" >Quay về</button></a>
    


</div></center>

<?php 
    if(isset($_POST["capNhat"])){
        $trangThai = $_POST["trangThai"]; 
        if($trangThai == '6'){
            $sql = "UPDATE donhang SET trangThai = '6' where maDH = '$ma_dh' ";
		    $KQ = $conn->query($sql);
        }
        else if($trangThai == '0'){
            $sql = "UPDATE donhang SET trangThai = '0' where maDH = '$ma_dh' ";
		    $KQ = $conn->query($sql);
        }
        else{
			echo "Bạn chưa chọn trạng thái!";
		}
        if($KQ){
			echo "Cập nhật thành công";
		}else{
			echo "Cập nhật không thành công";
		}
    }
?>

