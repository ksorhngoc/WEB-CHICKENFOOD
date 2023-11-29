<?php

if(!isset($_GET['id']) || $_GET['id'] == NULL){
    echo "Không tồn tại";
}
else {
    $cartegory_id =$_GET['id'];
}
    $delete_cartegory =delete_cartegory($cartegory_id);
    function  delete_cartegory($cartegory_id){
        require "connect.php";
        $query = "DELETE FROM bill WHERE id='$cartegory_id' ";
        $result = mysqli_query($conn, $query);
        header('Location:hienthidh.php');
        return $result;
    }
?>