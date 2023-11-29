<?php
    session_start();
    // Kiểm tra đã đăng nhập hay chưa ?
    if (isset($_SESSION['tk'])){
        header ('location:index.php');
    }

    // Kiểm tra đã bấm nút đăng ký hay chưa
    if(isset($_POST['dangky'])){
        $name = $_POST['ht'];
        $date = $_POST['ns'];
        $email = $_POST['em'];
        $sdt = $_POST['dt'];
        $taikhoan = $_POST['tk'];
        $mk1 = $_POST['mk'];
        $mk2 = $_POST['nlmk'];
        $diachi= $_POST['diachi'];
        $ketnoi = mysqli_connect("localhost","root","","chickenfood");
        $kiemtra = "select * from dangky where tk = '".$taikhoan."'";
        $thuchien = mysqli_query($ketnoi, $kiemtra);
        if ($row = mysqli_fetch_array($thuchien) >0 )
        {
            echo"<script>
                alert('Tài khoản đã được đăng ký');
                </script>";
        }
        else if ($mk1 !=$mk2)
        {
            echo"<script>alert('Mật khẩu không khớp');
                </script>";
        }
        else
        {
            $nhap = "insert into dangky (hoten, ngaysinh, email, sodt, tk, mk, Diachi, LoaiTK) values ('$name', '$date', '$email', '$sdt', '$taikhoan', '$mk1','$diachi','0')";
            $row = mysqli_query ($ketnoi, $nhap);
            if ($row == 1)
                header ('location:index.php');
            else {
                echo"<script>alert('Đã có lỗi xảy ra !!!');</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng kí CHIKEN FOOD</title>
</head>
<body>
    <div id="wrapper">
        <form action="" method="post" id="form-login">
            <h1 class="form-heading">Đăng Ký Tài Khoản</h1>
            <div class="form-group">
                <input type="text" required class="form-input" name="ht" placeholder="Họ tên khách hàng">
            </div>
            <div class="form-group">
                <input type="date" required class="form-input" name="ns" placeholder="Ngày tháng năm sinh">
            </div>
            <div class="form-group">
                <input type="text" required class="form-input" name="em" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" required class="form-input" name="dt" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <input type="text" required class="form-input" name="tk" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <input type="password" required class="form-input" name="mk" placeholder="Mật Khẩu">
            </div>
            <div class="form-group">
                <input type="password" required class="form-input" name="nlmk" placeholder="Nhập lại mật khẩu">
            </div>
            <div class="form-group">
            <input type="text" required class="form-input" name="diachi" placeholder="Địa chỉ">
            </div>
            <input type="submit" name="dangky" value="Đăng ký" class="form-submit">
            <a href="index.php" class="btn btn-primary">
                <input type="button" value="Quay lại" class=" form-submit">
            </a>
        </form>
    </div>
</body>
</html>