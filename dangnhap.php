<?php
    //Khai báo sử dụng session
    session_start();
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    // Kiểm tra đã đăng nhập hay chưa ?
    if (isset($_SESSION['tk'])){
        header ('location:index.php');
    }

    //Xử lý kiểm tra đã bấm nút đăng nhập hay chưa?
    if (isset($_POST['dangnhap']))
    {
        $tendangnhap = $_POST["account"];
        $matkhau = $_POST["password"];
        $ketnoi = mysqli_connect("localhost","root","","chickenfood");
        $kiemtra = "select * from dangky where tk = '".$tendangnhap."' and mk = '".$matkhau."' ";
        $thuchien = mysqli_query($ketnoi, $kiemtra);

        if (@$row = mysqli_fetch_array($thuchien))
        {
            if($row['LoaiTK'] == '1'){
                $_SESSION['tk'] = $tendangnhap;
                header ('location:nhanVienThaoTacDH');
            }
            else if($row['LoaiTK'] == '2'){
                $_SESSION['tk'] = $tendangnhap;
                header ('location:nhanVienGiaoHang');
            }
            else if($row['LoaiTK'] == '3'){
                $_SESSION['tk'] = $tendangnhap;
                header ('location:NguoiQuanLy');
            }
            else{
                // Tạo session đăng nhập
                $_SESSION['tk'] = $tendangnhap;
                $_SESSION['id_kh'] = $row['id'];
                header ('location:index.php');
            }
        }
        else{   
            echo"<script>alert('Tên đăng nhập hoặc mật khẩu không đúng !!!');</script>";
        }
        mysqli_close($ketnoi);
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng nhập CHIKEN FOOD</title>
</head>
<body>
    <div id="wrapper">
        <form action="" method="post" id="form-login">
            <h1 class="form-heading">Đăng Nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name="account" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" name="password" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div style="color: rgb(255, 255, 255)">
                <input type="checkbox" class="form-checkbox" id="remember">Nhớ Mật Khẩu
            </div>
            <button type="submit" name="dangnhap" value="" class="form-submit">Đăng nhập</button>
            <a href="dangky.php" class="btn btn-primary">
                <input type="button" value="Đăng ký" class="form-submit">
            </a>
            <a href="index.php" class="btn btn-primary">
                <input type="button" value="Trang chủ" class="form-submit">
            </a>
        </form>
    </div>
</body>
</html>