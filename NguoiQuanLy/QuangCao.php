<head>
    <style>
        .noidung{
            width: 60%;
            margin: 30px auto;
            border: 1px solid white;
        }
        p{
            font-size: 20px;
            color: #CC0000;
            margin : 10px 20px;
            font-weight: bold;
            margin-left: 40px;
        }
        .form-input{
            width: 250px;
            height: 30px;
            margin-left: 40px;
        }
        textarea{
            width: 250px;
            height: 60px;
            margin-left: 40px;
        }
        .form-submit{
            width: 100px;
            height: 30px;
            margin: 20px;
            background: #C00000;
            color: white;
        }
        .form-submit:hover{
            background: #E80000;
        }
    </style>

</head>
<body>
<center><h1 style="color: white">BÀI QUẢNG CÁO</h1></center>
<div class="noidung">
<form action="" method="post" id="form-thongTin">
   <center> <table>
        <tr>
            <td><p> Tên sự kiện </p><input type="text" class="form-input" name="tenSuKien" required/></td>
            <td><p> Ngày diễn ra </p><input type="date" required class="form-input" name="NgayDienRa" placeholder="Ngày tháng năm"></td>
        </tr>
        <tr>
            <td><p> Địa điểm </p><textarea></textarea></td>
            <td><p> Đối tượng tham gia </p><textarea></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="file" class="form-input" name="hinhanh" placeholder="Chọn ảnh"/></td>
        </tr>
    </table>
    </center>
    <center><button class="form-submit" type="submit" name="dangTuyenDung" value="" class="form-submit">Đăng</button></center>
</form>
</div>
</body>
