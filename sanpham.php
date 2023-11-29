<?php 
    session_start();
    $_SESSION['maSP'] = $_GET["id"];
    require "connect.php";
    $sql_sanpham ="SELECT * FROM `sanpham` WHERE cartegory_id= '$_GET[id]' LIMIT 1";
    /*if(!$result){
        die('Loi'.mysqli_error($conn));
    }*/
    $result_sanpham =mysqli_query($conn, $sql_sanpham);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="stylec.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Sản phẩm</title>
</head>
<body>

<!----------------Header----------------------->
    <?php include('header.php');?>
    <?php
            while($row_sanpham= mysqli_fetch_array($result_sanpham)){
    ?>
    <section class="product">
        <div class="container">
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img name="hinh" src="<?php echo $row_sanpham['Hinh']?>" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="<?php echo $row_sanpham['Hinh']?>" alt="">
                        <img src="<?php echo $row_sanpham['Hinh']?>" alt="">
                        <img src="<?php echo $row_sanpham['Hinh']?>" alt="">
                        <img src="<?php echo $row_sanpham['Hinh']?>" alt="">
                    </div>
                </div>
                <div class="product-content-right">
                
                    <div class="product-content-right-product-name">
                        <h1 name="tensp"><?php echo $row_sanpham['Tensp']?></h1>
                    </div>
                    <div class="product-content-right-product-price">
                            <p name="gia"><?php echo $row_sanpham['Gia']?><sup>vnđ</sup></p>
                    </div>
                    <form method="POST" action="cart.php">
                        <div class="quantity">
                            <p style="font-weight:bold;">Số lượng:</p>
                            <input name="soluong" type="number" min="1" value="1">
                            <input type="hidden" name="tensp" value="<?php echo $row_sanpham['Tensp']?>">
                            <input type="hidden" name="gia" value="<?php echo $row_sanpham['Gia']?>">
                            <input type="hidden" name="hinh" value="<?php echo $row_sanpham['Hinh']?>">
                        </div>
                        <div class="product-content-right-product-button">
                            <input type="<?php if(isset($_SESSION['tk'])){
                         echo"submit";
                       }
                       else{
                        echo"";
                      }?>" name="addcart" value="THÊM VÀO GIỎ">
                        </div>
                    </form>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-phone">Hotline</i>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-comments">Chat</i>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-envelope">Mail</i>
                        </div>
                    </div>
                    <div class="product-content-right-product-QR">
                        <img src="images/qrcode2.png" alt="">
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item chitiet">
                                    <p>Chi tiết</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item baoquan">
                                    <p>Bảo quản</p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-chitiet">
                                    <?php echo $row_sanpham['Mota']?>
                                </div>
                                <div class="product-content-right-bottom-content-baoquan">
                                    <?php echo $row_sanpham['Baoquan']?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </section>
     <!--"product-related"----------------->
    <section class="product-related container">
        <div class="product-related-title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>    
        <div class=" row product-content">
        <?php
            $sql = "SELECT * FROM `sanpham` WHERE Madanhmuc='$row_sanpham[Madanhmuc]' LIMIT 5";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
        ?>
            <div class="product-related-item">
                <a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><img src="<?php echo $row['Hinh']?>" alt=""></a>
                <a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><h1><?php echo $row['Tensp']?></h1></a>
                <a href="sanpham.php?id=<?php echo $row['cartegory_id']?>"><p><?php echo $row['Gia']?></p></a>
            </div>
        <?php
            }
        ?>
        </div>
    </section>
    <?php
        }
    ?>
    <?php
            include ('footer.php');
    ?>
    </body>
    <script>
        /*------chọn chtiet và baoquan-----------*/
    const baoquan = document.querySelector(".baoquan")
    const chitiet = document.querySelector(".chitiet")
    if(baoquan){
        baoquan.addEventListener("click",function(){
            document.querySelector(".product-content-right-bottom-content-chitiet").style.display ="none"
            document.querySelector(".product-content-right-bottom-content-baoquan").style.display ="block"
        })
    }
    if(chitiet){
        chitiet.addEventListener("click",function(){
            document.querySelector(".product-content-right-bottom-content-chitiet").style.display ="block"
            document.querySelector(".product-content-right-bottom-content-baoquan").style.display ="none"
        })
    }
            /*------ẩn chitiet và baoquan------*/
    const butTon = document.querySelector(".product-content-right-bottom-top")
    if(butTon){
        butTon.addEventListener("click", function(){
            document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
        })
    }    
    </script>
</html>













