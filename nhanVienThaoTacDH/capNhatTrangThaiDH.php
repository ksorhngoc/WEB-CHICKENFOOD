<html>
<head>
   
	<meta charset="utf8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
      .capNhatTT{
          float: right; 
          width: 100px ; 
          height: 30px ; 
          border: 2px solid black; 
          margin: 40 130; 
          background: #CC0000;
          color: white; " 
      }
      .capNhatTT:hover{
          background: #006600;
      }
      .quayVe{
          float: left; 
          width: 100px ; 
          height: 30px ; 
          border: 2px solid black; 
          margin: -70 130; 
          background:#CC0000;
          color: white;
      }
      .quayVe:hover{
          background: #006600;
      }
  </style>
        

</head>
<?php 
    include('connect.php');

    $ma_dh = $_GET['ma'];
    $action = $_GET['trang'];
    $sql = "SELECT *FROM donhang WHERE maDH = '$ma_dh' ";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
    $trangThai = $row['trangThai'];
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
    <form action= "index.php?action=capNhatTrangThaiDH&ma=<?php echo $ma_dh ?>&trang=donHangChoGiao" method="post">
        <input type="radio" id="chuanBiHang" name="trangThai" value="1"/><b>Đang chuẩn bị hàng</b>
        <input  style="margin-left: 100px" type="radio" id="choGiaoHang" name="trangThai" value="2"/><b>chờ giao cho nhân viên vận chuyển</b>
        <button class="capNhatTT" name="capNhat" >Cập nhật</button>
        <?php 
          if($trangThai == '2'|| $trangThai == '3'){
          ?>
              <script>
                  document.getElementById("chuanBiHang").checked = true;
              </script>
          <?php
          }
          if($trangThai == '4'){
          ?>
              <script>
                  document.getElementById("choGiaoHang").checked = true;
                  document.getElementById("chuanBiHang").disabled = true;
              </script>
          <?php
          }
        ?>
      </form>
      <?php 
      if($action == 'xuLyTimKiem'){
          $tuKhoa = $_GET['tuKhoa'];
      ?>
          <a href="index.php?action=<?php echo $action ?>&tuKhoa=<?php echo $tuKhoa ?>"><button class="quayVe">Quay về</button></a>
      <?php
      }
      else{
      ?>
          <a href="index.php?action=<?php echo $action ?>"><button class="quayVe">Quay về</button></a>
    <?php
      }
    ?>
        
</div></center>
<?php 
    if(isset($_POST["capNhat"])){
      $TT = $_POST["trangThai"];
      if(!empty($TT)){
        if($TT == '1'){
          echo $TT;
          $sql="UPDATE donhang set trangThai = '3' where maDH = '$ma_dh' ";
          $run=$conn->query($sql);
        ?>
          <script>
              alert('Cập nhật đơn hàng thành công');
          </script>
        <?php
        }
        else if($TT == '2'){ 
          $sql="UPDATE donhang set trangThai = '4' where maDH = '$ma_dh' ";
          $run=$conn->query($sql);
        ?>
          <script>
              alert('Cập nhật đơn hàng thành công');
          </script>
        <?php
        }
      }
      else{ 
        echo '<center><h3 style="color: white">Vui lòng chọn trạng thái bạn muốn cập nhật!</h3><center>';
      }
    }
    
?>
