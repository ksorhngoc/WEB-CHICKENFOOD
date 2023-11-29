<?php
if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL){
    echo "<script>window.location = 'cartegorylist.php'</script>";
}
else {
    $cartegory_id =$_GET['cartegory_id'];
}
    $delete_cartegory =delete_cartegory($cartegory_id);
    function  delete_cartegory($cartegory_id){
        require "connect.php";
        $query = "DELETE FROM sanpham WHERE cartegory_id='$cartegory_id' ";
        $result = mysqli_query($conn, $query);
        header('Location:hienthisp.php');
        return $result;
    }
?>