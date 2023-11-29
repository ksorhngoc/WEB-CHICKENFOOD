<?php
    session_start();
    require "connect.php";
    if(isset($_POST['timkiem'])){
        $tukhoa= $_POST['tukhoa'];
    }
    $sql_search = "SELECT * FROM sanpham, danhmuc WHERE sanpham.Madanhmuc=danhmuc.Madanhmuc AND (Tensp LIKE '%".$tukhoa."%' OR Danhmuc LIKE '%".$tukhoa."%' OR Gia LIKE '%".$tukhoa."%')";
    $query_search = mysqli_query($conn, $sql_search);
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
            <h2>SẢN PHẨM CẦN TÌM </h2>
            <ul id="list-products">
            <?php
                    while($row_search= mysqli_fetch_array($query_search)){
            ?>
                <div class="item">
                    <a href="sanpham.php?id=<?php echo $row_search['cartegory_id']?>"><img src="<?php echo $row_search['Hinh']?>" alt=""></a>
                    <div class="name"><a href="sanpham.php?id=<?php echo $row_search['cartegory_id']?>"><?php echo $row_search['Tensp']?></a></div>
                    <div class="price"><a href="sanpham.php?id=<?php echo $row_search['cartegory_id']?>"><?php echo $row_search['Gia']?><span>vnđ</span></a></div>
                </div>
            <?php
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

















































<!--require "connect.php";

    if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
        $kyw=$_POST['kyw'];
    }else{
        $kyw="";
    }   
    if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
        $iddm= $_GET['iddm'];
    }else{
        $iddm=0;
    }
    $dssp=loadall_sanpham($kyw,$iddm);
    $tendm=loadall_ten_dm($iddm);
    include ()

    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like'%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm = '".$iddm."' ";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        } 
    }-->
