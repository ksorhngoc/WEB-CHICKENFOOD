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
    </style>
</head>
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
            <div class="form-group" style="color: white">
                <input type="date" required class="form-input" name="ns" placeholder="Ngày tháng năm">
                đến
                <input type="date" required class="form-input" name="ns" placeholder="Ngày tháng năm">
                <input type="checkbox" required class="form-input" name="ns">Sản phẩm bán nhiều nhất
                <input type="submit" name="thongKe" value="Thống kê" class="form-submit">
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['thongKe'])){} 
    ?>
</body>
</html>