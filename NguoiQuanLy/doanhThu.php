<head>
    <style>
        .form-input{
            margin: 10px 30px;
        }
        .form-submit{
            width: 100px;
            height: 30px;
            margin-left : 30px;
            background: #B22222;
            color: white;
        }
        .form-submit:hover{
            background: #E00000;
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Doanh Thu</title>
</head>
<body>
<form action="" method="post">
<div id="wrapper">
        <form action="" method="post" id="form-login">
            <div class="form-group" style="color: white">
                <input type="date" required class="form-input" name="NgayBD" placeholder="Ngày tháng năm">
                đến
                <input type="date" required class="form-input" name="NgayKT" placeholder="Ngày tháng năm">
                <input type="checkbox" class="form-input" name="SanPham">Sản phẩm bán nhiều nhất
                <input type="submit" name="thongKe" value="Thống kê" class="form-submit">
            </div>
        </form>
    </div>
    <?php
        include '../connect.php';
        if(isset($_POST['thongKe'])){
            $ngayBD = $_POST["NgayBD"];
            $ngayKT = $_POST["NgayKT"];
            if(isset($_POST['SanPham'])){
                $sql = "SELECT sanpham.cartegory_id, sanpham.Tensp, SUM(chitietdh.soLuong) AS soLuong, donhang.ThoiGian, SUM(chitietdh.tongTien) As tongTien from donhang, chitietdh, sanpham where sanpham.cartegory_id = chitietdh.maSP AND (donhang.ThoiGian >= '$ngayBD' AND donhang.ThoiGian <= '$ngayKT') AND donhang.maDH = chiTietdh.maDH group by sanpham.cartegory_id, donhang.ThoiGian ORDER BY soLuong DESC LIMIT 10";
                $run = $conn->query($sql);
            }
            else{
                $sql = "SELECT sanpham.cartegory_id, sanpham.Tensp, SUM(chitietdh.soLuong) AS soLuong, donhang.ThoiGian, SUM(chitietdh.tongTien) As tongTien from donhang, chitietdh, sanpham where sanpham.cartegory_id = chitietdh.maSP AND (donhang.ThoiGian >= '$ngayBD' AND donhang.ThoiGian <= '$ngayKT') AND donhang.maDH = chiTietdh.maDH  group by sanpham.cartegory_id, donhang.ThoiGian ORDER BY donhang.ThoiGian ASC";
                $run = $conn->query($sql);
            }
            if(($run->num_rows) < 1 ){ ?>
                <center><h1 style="color: white"><b> Chưa có doanh thu!</b></h1></center>
            <?php
            }
            else {
            ?>
                <center><table width="95%" border="2" style="border-collapse: collapse; margin: 20px; background: white;">
                    <tr align="center" style="height: 50px; background: #FF8C00; COLOR: WHITE" >
	                    <td width="100px"><div align="center"><b>Mã</b></div></td>
   	                    <td width="350px"><div align="center"><b>Tên </b></div></td>
	                    <td width="400px"><div align="center"><b>Số lượng</b></div></td>
	                    <td width="200px"><div align="center"><b>Thời gian</b></div></td>
	                    <td width="200px"><div align="center"><b>Tổng tiền</b></div></td>
                    </tr>
            <?php
                $tongdoanhthu=0;
	            while($row=$run->fetch_array()){
                    $tongdoanhthu += $row['tongTien'];
            ?>
                    <tr align="center" height="100px">
                    	<td><?php echo $row['cartegory_id']  ?></td>
	                    <td><?php echo $row['Tensp']  ?></td>
	                    <td><?php echo $row['soLuong'] ?></td>
	                    <td><?php echo $row['ThoiGian'] ?></td>
	                    <td><?php echo $row['tongTien'] ?></td>
                    </tr>
                    
   	        <?php } ?>
                <tr>
                    <td colspan="4" style="padding-left:10px; margin-bottom: 30px">
                    <?php
                        echo '<h3>Tổng doanh thu</h3> ' ;
                    ?>
                    </td>
	                <td>
                    <?php
                        echo '<center><h3> '.number_format($tongdoanhthu).'VNĐ'.'</h3></center>';
                    ?>
                    </td>
                </tr>
                </table>
            <?php
            
                
            }
        } 
    ?>
</form>   
</body>
</html>