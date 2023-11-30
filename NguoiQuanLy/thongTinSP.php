<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
       
       #wrapper{
    min-height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-thongTin{
    max-width: 400px;
    background: white;
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(89, 18, 18, 0.8);
}
.form-heading{
    font-size: 25px;
    color: #f5f5f5;
    text-align: center;
    margin-bottom: 30px;
}
.form-group{
    border-bottom: 1px solid black;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #fff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: black;
    flex-grow: 1;
}
.form-input::placeholder{
    color: black;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}
.form-submit{
    background: transparent;
    border: 1px solid #f5f5f5;
    color: #fff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
}
.form-submit:hover{
    border: 1px solid #54a0ff;
}
.btnTimKiem{
            width: 80px ; 
            height: 30px ; 
            border: 2px solid black; 
            margin: 30 10; 
            background:#900000; 
            color: white; 
	   }
	   .btnTimKiem:hover{
			background:#CC0000;
	   }
    </style>
</head>
<?php 
    include('../connect.php');
    //Lấy mã sản phẩm
    if(isset($_GET['ma'])){
		$maSP = $_GET["ma"];
	}
    else{
        $maSP = '1';
    }
    $maSP = $_GET["ma"];
    $sql="SELECT *FROM sanpham WHERE cartegory_id = '$maSP' ";
	$run=$conn->query($sql);
    $row=$run->fetch_array();
    if(($run->num_rows) < 1 ){ ?>
        <center><input type="text" name="tuKhoa" placeholder="Nhập mã sản phẩm hoặc tên sản phẩm" style="width: 250; height: 30;">
        <button class="btnTimKiem" name="timKiemDH">Tìm kiếm</button></center>
    <?php
    }
    else {
?>
<body>

    <div>
    <center><input type="text" name="tuKhoa" placeholder="Nhập mã sản phẩm hoặc tên sản phẩm" style="width: 250; height: 30;">
    <button class="btnTimKiem" name="timKiemDH">Tìm kiếm</button></center>
    </div>
    <div id="wrapper">
    <form action="" method="post" id="form-thongTin">
        
            <div>
                <img width="100%" src="../<?php echo $row['Hinh'] ?>" alt="">
            </div>
            <div class="form-group">
                <input type="file" class="form-input" name="hinhanh" placeholder="Chọn ảnh"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="MaSP" required placeholder="Mã sản phẩm" value="<?php echo $row['cartegory_id']  ?>"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="tenSP" required placeholder="Tên sản phẩm" value="<?php echo $row['Tensp'] ?>"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="Gia" required placeholder="giá" value="<?php echo $row['Gia'] ?>"/>
            </div>
            <div class="form-group">
                <textarea class="form-input" name="MoTa" required placeholder="Mô tả" value = ""><?php echo $row['Mota'] ?></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-input" name="BaoQuan" required placeholder="Bảo quản" value = "" ><?php echo $row['Baoquan'] ?></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="maDanhMuc" required placeholder="Mã danh mục" value = "<?php echo $row['Madanhmuc'] ?>" />
            </div>
            <button type="submit" name="ThemSP" value="" class="form-submit">Thêm</button>
            <button type="submit" name="SửaSP" value="" class="form-submit">Sửa</button>
    </div>
</form>

</body>
<?php } ?>
<?php 
    if(isset($_POST['ThemSP'])){
        $masp = $_POST["MaSP"];
        $tensp = $_POST["tenSP"];
        $giasp = $_POST["Gia"];
        $motasp = $_POST["MoTa"];
        $baoquan = $_POST["BaoQuan"];
        $madanhmuc = $_POST["maDanhMuc"];
        $anh = $_FILES['hinhanh']['name'];
        $anh_tmp = $_FILES['hinhanh']['tmp_name'];
        move_uploaded_file($anh_tmp,'..images/'.$anh);
        $kiemtra = "select * from sanpham where cartegory_id = '".$masp."' OR Tensp = '".$tensp."' ";
        $thuchien = mysqli_query($ketnoi, $kiemtra);
        if(($run->num_rows) > 0 ){
            echo 'Mã sản phẩm hoặc tên sản phẩm bị trùng!';
        }
        else{
            $sql_sanpham = "INSERT INTO sanpham (cartegory-id, Tensp, Gia, Hinh, Mota, Baoquan, Madanhmuc) VALUES ('$masp', '$tensp','$giasp','$hanh', '$motasp', '$baoquan', '$madanhmuc')";
            $result = $conn->query($sql_sanpham);
			if($result){
					echo "Thêm sản phẩm thành công";
			}else{
					die(mysqli_error($conn));
			}
        }
    }
    //Kiểm tra có baamsnuts xóa
    if(isset($_POST['ThemSP'])){

    }
?>