<?php

if(!isset($_GET['ht']) || $_GET['ht'] == NULL){
    echo "Không tồn tại";
}
else {
    $ht =$_GET['ht'];
}
    $delete_cartegory =delete_cartegory($ht);
    function  delete_cartegory($ht){
        require "connect.php";
        $query = "DELETE FROM dangky WHERE hoten='$ht' ";
        $result = mysqli_query($conn, $query);
        header('Location:hienthikh.php');
        return $result;
    }
?>