<?php
    session_start();
    include 'connect.php';
    $maKH = $_SESSION['id_kh'];
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
        $sql = "SELECT chitietdh.hinhAnh, chitietdh.tenSP, chitietdh.tongTien, donhang.trangThai FROM donhang, chitietdh WHERE donhang.maKH = '$maKH' AND donhang.maDH = chitietdh.maDH";
        $run = $conn->query($sql);
        if(($run->num_rows) < 1 ){ ?>
                <center><h1 style="color: white"><b> Không có đơn hàng!</b></h1></center>
    <?php
        }
        else {
    ?>
        <!--Giỏ hàng---------------------------->

    <section class="cart">
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Ảnh đại diện</th>
                            <th>Tên sản phẩm</th>
                            <th>Thành tiền</th>
                            <th>Tình trạng</th>
                        </tr>
                        <?php
                            while($row=$run->fetch_array()){
                        ?>

<tr>
                                <td><img width="100px" src="<?php echo $row['hinhAnh'] ?>" alt=""></td>
                                <td><?php echo $row['tenSP'] ?></td>
                                <td>
                                    <div><?php echo $row['tongTien'] ?></div>
                                </td>
                                <td>
                                    <?php 
                                        if($row['trangThai'] == '1' ) {
                                    ?>
                                            <p>Đang chờ xác nhận</p>
                                    <?php
                                        }
                                        else if($row['trangThai'] == '3'){
                                    ?>
                                            <p>Đang chuẩn bị hàng</p>   
                                    <?php
                                        }
                                        else if($row['trangThai'] == '4'){
                                    ?>
                                            <p>Chờ giao cho nhân viên vận chuyển</p>   
                                    <?php
                                        }
                                        else if($row['trangThai'] == '5'){
                                    ?>
                                            <p>Đang giao hàng</p>   
                                    <?php
                                        }
                                        else if($row['trangThai'] == '6'){
                                    ?>
                                            <p>Giao hàng thành công</p>   
                                    <?php       
                                        }
                                        else if($row['trangThai'] == '7'){
                                    ?>
                                            <p>Giao hàng không thành công</p>   
                                    <?php        
                                        }
                                        else if($row['trangThai'] == '0'){
                                    ?>
                                            <p>Đơn hàng bị hủy</p>   
                                    <?php     
                                        }
                                    ?>
                                </td>
                                </tr> 
                        <?php
                            }
                        ?>
                                
                        
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
    <?php
        include('footer.php');
    ?>
    </body>
</html>