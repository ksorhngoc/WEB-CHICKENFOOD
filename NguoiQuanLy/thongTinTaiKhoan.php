<?php
  // Kiểm tra đã bấm nút đăng ký hay chưa
    if(isset($_POST['dangky'])){
        $name = $_POST['ht'];
        $date = $_POST['ns'];
        $email = $_POST['em'];
        $sdt = $_POST['dt'];
        $taikhoan = $_POST['tk'];
        $mk1 = $_POST['mk'];
        $mk2 = $_POST['nlmk'];
        if(isset($_POST['LoaiTK'])){
            $LoaiTK = $_POST['LoaiTK'];
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
            $nhap = "insert into dangky (hoten, ngaysinh, email, sodt, tk, mk,LoaiTK) values ('$name', '$date', '1 $email', '$sdt', '$taikhoan', '$mk1','$LoaiTK')";
            $row = mysqli_query ($ketnoi, $nhap);
            if ($row == 1)
            echo"<script>alert('Đăng ký tài khoảng thành công');</script>";
            else {
                echo"<script>alert('Đã có lỗi xảy ra !!!');</script>";
            }
        }
        }
        else{
            echo"<script>
            alert('Bạn chưa chọn loại tài khoản');
            </script>";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
       
#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-login{
    max-width: 400px;
    background: white;
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(89, 18, 18, 0.8);
}
.form-heading{
    font-size: 25px;
    color: black;
    text-align: center;
    margin-bottom: 30px;
}
.form-group{
    border-bottom: 1px solid black;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #fff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: black;
    flex-grow: 1;
}
.form-input::placeholder{
    color: black;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}
.form-submit{
    background: #B22222;
    border: 1px solid #f5f5f5;
    color: #fff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
}
.form-submit:hover{
    border: 1px solid #54a0ff;
    background: #FF3030;
}
.btnTimKiem{
            width: 80px ; 
            height: 30px ; 
            border: 2px solid black; 
            margin: 30 10; 
            background:#900000; 
            color: white; 
	   }
	   .btnTimKiem:hover{
			background:#CC0000;
	   }
    </style>
</head>
<body>
    <div id="wrapper">
        <form action="index.php?action=taiKhoan&thongTin=thongTinTaiKhoan" method="post" id="form-login">
            <h1 class="form-heading">Thông tin tài khoản</h1>
            <div class="form-group">
                <input type="text" required class="form-input" name="ht" placeholder="Tên tài khoản">
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
            <div>
                <input type="radio" id="NhanVienTTDH" name="LoaiTK" value="1"/><b>Nhân viên thao tác đơn hàng</b>
            </div>
            <div>
                <input  style="float: left; " type="radio" id="NhanVienGH" name="LoaiTK" value="2"/><b>Nhân viên giao hàng</b></div>
            <input type="submit" name="dangky" value="Xác nhận tài khoản" class="form-submit">
        </form>
    </div>
</body>
</html>