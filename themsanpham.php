<?php
include "headera.php";
include "slider.php";
require "connect.php";
?>

<?php
    if(isset($_POST['them'])){
        echo "hi";
        $Tensp =$_POST['Tensp'];
        $Gia =$_POST['Gia'];
        $Hinh = $_POST['Hinh'];
        $Mota =$_POST['Mota'];
        $Baoquan =$_POST['Baoquan'];
        $Madanhmuc =$_POST['Madanhmuc'];
        $sql_product = "INSERT INTO sanpham (Tensp, Gia, Hinh, Mota, Baoquan, Madanhmuc)VALUES ('$Tensp', '$Gia', '$Hinh', '$Mota', '$Baoquan', '$Madanhmuc')";
        $query_product= mysqli_query($conn, $sql_product);
    }
?>
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm sản phẩm</h1>
            <form action="" method="POST">  
                    <label for="">Nhập tên sản phẩm<span style="color:red;">*</span></label>
                    <input name="Tensp" required type="text" >
                    <label for="">Giá sản phẩm<span style="color:red;">*</span></label>
                    <input required name="Gia" type="text" >
                    <label for="">Mã danh mục sản phẩm<span style="color:red;">*</span></label>
                    <input name="Madanhmuc" required type="text" >
                    <label for="">Mô tả sản phẩm<span style="color:red;">*</span></label>
                    <textarea required name="Mota"  cols="30" rows="10"></textarea> <!--id="editor1"-->
                    <label for="">Cách bảo quản<span style="color:red;">*</span></label>
                    <textarea required name="Baoquan" cols="30" rows="10"></textarea>
                    <label for="">Ảnh sản phẩm<span style="color:red;">*</span></label>
                    <input  name="Hinh" required type="file">
                    <!--label for="">Ảnh mô tả<span style="color:red;">*</span></label>
                    <input name="product_img_desc[]" required multiple type="file"-->
                    <input type="submit" name="them" value="THÊM">   
                </form>
            </div>
        </div>
    </section>
</body>
<!--label for="">Giá khuyến mãi<span style="color:red;">*</span></label>
                    <input required name="product_price_new" type="text"-->
<!-- enctype="multipart/form-data"label for="">Chọn danh mục<span style="color:red;">*</span></label>
                    <select name="cartegory_id" id="cartegory_id">
                         <option value="#">--Chọn--</option>
                        <--?php
                        $show_cartegory = $product->show_cartegory();
                        if($show_cartegory) { while ($result = $show_cartegory->fetch_assoc()){

                        ?>
                        <option value=" ?php echo $result['cartegory_id']?>">?php echo $result['cartegory_name']?></option>
                        <-?php
                        }}
                        ?>
                    </select
                    <label for="">Chọn loại sản phẩm<span style="color:red;">*</span></label>
                    <select name="brand_id" id="brand_id">
                    <label for="">Chọn loại sản phẩm<span style="color:red;">*</span></label>
                        <option value="#">---Chọn--</option>
                    </select-->
<!--script>
    CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );

</script>
script>
    $(document).ready(function(){
        $("#cartegory_id").change(function(){
           // alert($(this).val())
           var x = $(this).val()
           $.get("productadd_ajax.php",{cartegory_id:x},function(data){
                $("#brand_id").html(data);
           })
        })
    })
</script-->
</html>