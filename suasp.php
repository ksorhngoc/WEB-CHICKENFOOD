<?php
include "headera.php";
include "slider.php";
require "connect.php";
?>
<?php

if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL){
    echo "<script>window.location = 'cartegorylist.php</script>";
}
else {
    $cartegory_id =$_GET['cartegory_id'];
}
    $get_cartegory =get_cartegory($cartegory_id); //khi chọn sửa từ cartegorylist.php thì dữ liệu được lấy dựa trên cartegory_id đổ ra trang này 
    if($get_cartegory) {
        $kq = mysqli_fetch_assoc($get_cartegory);  
    }
?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $Tensp= $_POST['Tensp'];
    $Gia= $_POST['Gia'];
    $Hinh= $_POST['Hinh'];
    $Mota= $_POST['Mota'];
    $Baoquan= $_POST['Baoquan'];
    $Madanhmuc= $_POST['Madanhmuc'];
    $insert_cartegory = update_cartegory($cartegory_id,$Tensp, $Gia, $Hinh, $Mota, $Baoquan, $Madanhmuc);
}




function get_cartegory($cartegory_id){
    require "connect.php";
    $sql = "SELECT * FROM sanpham WHERE cartegory_id='$cartegory_id'"; //chọn dòng dữ liệu có cartegory_id
    $result = mysqli_query($conn, $sql);
    return $result;
}





function update_cartegory($cartegory_id,$Tensp, $Gia, $Hinh, $Mota, $Baoquan, $MaDanhmuc){
    require "connect.php";
    $sql = "UPDATE sanpham SET Tensp = '$Tensp', Gia = '$Gia', Hinh= '$Hinh',Mota = '$Mota',Baoquan = '$Baoquan', Madanhmuc='$Madanhmuc' WHERE cartegory_id ='$cartegory_id' ";
    $result = mysqli_query($conn, $sql);
    header('Location:hienthisp.php');
    return $result;
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa thông tin sản phẩm</h1>
                <form action="" method="POST">
                    <input type="text" name="Tensp" value="<?php echo $kq['Tensp']?>" >
                    <input type="text" name="Gia" value="<?php echo $kq['Gia']?>" >
                    <input type="text" name="Madanhmuc" value="<?php echo $kq['Madanhmuc']?>">
                    <input type="text" name="Mota" value="<?php echo $kq['Mota']?>">
                    <input type="text" name="Baoquan" value="<?php echo $kq['Baoquan']?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>