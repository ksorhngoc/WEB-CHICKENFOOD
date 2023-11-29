<?php
  //Khai báo sử dụng session
  session_start();
  //Khai báo utf-8 để hiển thị được tiếng việt
  header('Content-Type: text/html; charset=UTF-8');

  // Kiểm tra đã đăng nhập hay chưa ?
  if (!isset($_SESSION['tk'])){
      header ('location:dangnhap.php');
  }


  if(isset($_POST['dmk'])){
    $ntk  = $_SESSION['tk'];
    $mkc  = $_POST['mkht'];
    $mkm1 = $_POST['mkm'];
    $mkm2 = $_POST['nlmkm'];
   
    include'connect.php';/*mysqli_connect("localhost","root","","website_pvnnk");*/
    $timkiem = "SELECT * FROM dangky WHERE  tk = '".$ntk."' and mk ='".$mkc."'";
    $thuchien = mysqli_query($conn, $timkiem);
    if($x = mysqli_fetch_array($thuchien))
    {
     if ($mkm1 != $mkm2)
     echo"<script>alert('Mật khẩu không khớp !!!');</script>";
     else
     {
      $doi = "update dangky set mk = '".$mkm1."' where tk = '".$ntk."'";
      $upd = mysqli_query($conn, $doi);
      echo"<script>alert('Mật khẩu thay đổi thành công !!!');</script>";
     //header ('location:dangnhap.html');
     }
    }
    else
    echo"<script>alert('Mật khẩu không đúng !!!');</script>";
    mysqli_close($conn);
  }
 
?>
<html>
  <head>
    <meta charset="utf8">
    <title> Đổi mật khẩu</title>
  </head>
  <body>
    <table align="center">
      <form action="" method="POST">
        
        <tr align="center"><td colspan="2">Đổi mật khẩu</td></tr>
        <tr>
          <td>Mật khẩu hiện tại:</td>
          <td>
            <input type="password" name="mkht">
          </td>
        </tr>


        <tr>
          <td>Mật khẩu mới:</td>
          <td>
            <input type="password" name="mkm">
          </td>
        </tr> 

        <tr>
          <td>Nhập lại mật khẩu mới:</td>
          <td>
            <input type="password" name="nlmkm">
          </td>
        </tr>

        <tr align="center">
          <td  colspan="2">
            <input type="submit" name="dmk" value="Đổi mật khẩu">
          </td>
        </tr>

      </form>
    </table>
  </body>
</html>