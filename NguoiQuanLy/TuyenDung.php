<head>
    <style>
        .noidung{
            width: 40%;
            margin: 30px auto;
            border: 1px solid white;
        }
        p{
            font-size: 20px;
            color: #CC0000;
            margin : 30px 20px;
            font-weight: bold;
        }
        .form-input{
            float: right;
            width: 250px;
        }
        textarea{
            width: 90%;
            height: 200px;
            margin: 15px 20px;
        }
        .dang{
            width: 100px;
            height: 30px;
            margin: 20px;
            background: #C00000;
            color: white;
        }
        .dang:hover{
            background: #E80000;
        }
    </style>

</head>
<body>
<center><h1 style="color: white">BÀI TUYỂN DỤNG</h1></center>
<div class="noidung">
<form action="" method="post" id="form-thongTin">
    <div class="form-group">
        <p> vị trí: <input type="text" class="form-input" name="vitri" required/> </p>
        
    </div>
    <div class="form-group">
        <p>Lương Cơ Bản: 
        <input type="text" class="form-input" name="luongCB" required/></p>
    </div>
    <div class="form-group">
        <p>Mô tả công việc</p> 
        <textarea></textarea>
    </div>
    <center><button class="dang" type="submit" name="dangTuyenDung" value="" class="form-submit">Đăng bài</button></center>
</form>
</div>
</body>
