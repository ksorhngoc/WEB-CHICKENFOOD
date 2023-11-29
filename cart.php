<?php
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trùng trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                $_SESSION['giohang'][$i][4]=$_SESSION['maSP'];
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong,$_SESSION['maSP']];
            $_SESSION['giohang'][]=$sp;
        }
        unset($_SESSION['maSP']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="stylec.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Giỏ hàng</title>
</head>
<body>
<!----------------Header----------------------->
    <?php
        include('header.php');
    ?>
    <!--Giỏ hàng---------------------------->

    <section class="cart">
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>SL</th>
                            <th>Thành tiền</th>
                            <th>Tùy chỉnh</th>
                        </tr>
                        <?php
                        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
                            if(sizeof($_SESSION['giohang'])>0){ 
                                $tong=0;
                                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                                    $tong+=$tt;
                        ?>
                                <tr>
                                            <td><?php echo ($i+1)?></td>
                                            <td><img width="100px" src="<?php echo $_SESSION['giohang'][$i][0]?>" alt=""></td>
                                            <td><?php echo $_SESSION['giohang'][$i][1]?></td>
                                            <td><?php echo $_SESSION['giohang'][$i][2] ?></td>
                                            <td><?php echo $_SESSION['giohang'][$i][3] ?></td>
                                            <td>
                                                <div><?php echo $tt?></div>
                                            </td>
                                            <td>
                                                <a href="cart.php?delid=<?php echo $i?>">Xóa</a>
                                            </td>
                                        </tr>
                        <?php }?>
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td><p style="color:black; font-weight: bold;"><?php echo $tong?></p></td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN HÀNG</td>
                            <td><p><?php echo $tong?></p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p><a href="cart.php?delcart=1">Xóa tất cả</a></p></td>
                        </tr>
                        <?php
                                }
                                else{
                                    '<p>"Giỏ hàng rỗng!"</p>';
                                }    
                            }
                        ?>
                    </table>
                    <div class="cart-content-right-button">
                        <a href="index.php"><button>TIẾP TỤC MUA SẮM</button></a>
                        <a href="dongydathang.php"><input type="submit" value="TẠO ĐƠN HÀNG"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('footer.php');
    ?>
    </body>
</html>