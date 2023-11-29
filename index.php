<?php
    session_start();
    require "connect.php";
    $sql = "SELECT * FROM `sanpham` LIMIT 24";
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
    <title>Trang chủ</title>
</head>

<body>
<?php
    include 'connect.php';
    $item_per_page =!empty($_GET['per_page'])?$_GET['per_page']:8;
    $curent_page =!empty ($_GET['page'])?$_GET['page']:1;
    $offset = ($curent_page -1) * $item_per_page;
    $product = mysqli_query($conn, "select * from `sanpham` ORDER BY `cartegory_id` ASC LIMIT " . $item_per_page." OFFSET " .$offset);
    $total = mysqli_query($conn, "select * from `sanpham`");
    $total = $total->num_rows;
    /*$totalpage = ceil($total / $item_per_page);*/
?>
    <div id="wrapper">
        <?php include('header.php');?>
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>THƯƠNG HIỆU</span>
                    <br>
                    <span>CHIKEN FOOD</span>
                </h2>
                <p>Đã có hơn 12 chi nhánh ở khắp cả nước</p>
            </div>
            <div class="box-right">
            <img src="images/dau1.jpg" width="200" height="450">
            <img src="images/dau2.jpg" width="200" height="450">
            <img src="images/dau3.jpg" width="200" height="450">
            </div>
        </div>
        <div id="wp-products">
            <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
            <ul id="list-products">
            <?php 
              while ($row = mysqli_fetch_array($product)) {
            ?>
            <div class="item">
                <a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><img src="<?php echo $row['Hinh']?>" alt=""></a>
                <div class="name"><a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><?php echo $row['Tensp']?></a></div>
                <div class="price"><a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><?php echo $row['Gia']?><sup>vnđ</sup></a></div>
            </div>   
            <?php 
                }
            ?>
            </ul>
            <?php
                include ('sothutu.php');
            ?>
        </div>
        <div id="saleoff">
            <div class="box-left">
                <h1>
                    <span>ƯU ĐÃi CUỐI TUẦN - GIẢM GIÁ LÊN ĐẾN</span>
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
                            <p>Quán rộng rãi, thoáng mái. Phục vụ nhiệt tình, chu đáo.
                                Đồ ăn tươi, đậm đà. Nước uống cần đa dạng hơn.
                            </p>
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
        <section class="app-container">
        <p>Tải ứng dụng CHIKEN FOOD</p>
        <div class="app-images">
            <img src="images/appstoredownload.jpg">
            <img src="images/CHPLAY.jpg">
        </div>
        <div class="app-text">
            <p>Nhận bảng tin từ CHIKEN FOOD</p>
            <input type="text" placeholder="Nhập email của bạn">
        </div>
    </section>
    <footer>
        <div class="footer-top">
            <li><img src="images/thongbao.jpg"></li>
            <li><a href=""></a>Liên hệ</li>
            <li><a href=""></a>Tuyển dụng</li>
            <li><a href=""></a>Giới thiệu</li>
            <li>
                <a href="" class="fab fa-facebook-f"></a>
                <a href="" class="fab fa-youtube"></a>
                <a href="" class="fab fa-twitter"></a>
            </li>
        </div>
        <p>
            Công ty cổ phần Dương Lâm với số đăng ký: 456674434<br>
            Địa chỉ đăng ký: Tổ 26 , Phường Trần Phú, Thành phố Quy Nhơn, Tỉnh Bình Định, Việt Nam - 0935298142 <br>
            Đặt hàng online : <span>0256 789 789</span>
        </p>
        <div class="footer-bottom">
            @CHIKEN FOOD
        </div>
    </footer>

    </body>
</html>
