<?php
    session_start();
    require "connect.php";
    
    $sql = "SELECT * FROM sanpham WHERE Madanhmuc = '$_GET[dm]'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die('Loi'.mysqli_error($conn));
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="stylec.css">
</head>
<style>
 
</style>
<body>

    <div id="wrapper">
        <?php include('header.php');?>
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>ĐỒ ĂN</span>
                    <br>
                    <span>VẶT BÌNH DÂN</span>
                </h2>
                <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng
                    hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
                    hoàn hảo nhất</p>
            </div>
            <div class="box-right">
            <img src="images/dau1.jpg" width="200" height="450">
            <img src="images/dau2.jpg" width="200" height="450">
            <img src="images/dau3.jpg" width="200" height="450">
            </div>
        </div>
        <div id="wp-products">
            <h2>SẢN PHẨM</h2>
            <ul id="list-products">
            <?php
                if(mysqli_num_rows($result) > 0){
                    while($row=mysqli_fetch_assoc($result)){
            ?>
                <div class="item">
                    <a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><img src="<?php echo $row['Hinh']?>" alt=""></a>
                    <div class="name"><a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><?php echo $row['Tensp']?></a></div>
                    <div class="price"><a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><?php echo $row['Gia']?><sup>vnđ</sup></a></div>
                    </div>
                <?php
                    }
                }
            ?>
            </ul>
        </div>
        <div id="saleoff">
            <div class="box-left">
                <h1>
                    <span>GIẢM GIÁ LÊN ĐẾN</span>
                    <span>10%</span>
                </h1>
            </div>
            <div class="box-right"></div>
        </div>

        <div id="comment">
            <h2>NHẬN XÉT CỦA KHÁCH HÀNG</h2>
            <div id="comment-body">
                <div class="prev">
                    <a href="#">
                        <img src="" alt="">
                    </a>
                </div>
                <ul id="list-comment">
                    <li class="item">
                        <div class="fas fa-user">
                            <img src="" alt="">
                        </div>
                        <div class="name">Nguyễn Văn Tuấn</div>
                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                </ul>
                <div class="next">
                    <a href="#">
                        <img src="assets/next.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php
            include('footer.php');
        ?>
    </body>

</html>

