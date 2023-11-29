<?php
    require 'connect.php';
    /*if(isset($_POST['']) && )
echo "hi";*/
    if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])){
        /*$ht= $_POST['hdoten'];
        $diachi= $_POST['diachi'];
        $dt= $_POST['dt'];
        $tongdonhang= tongdonhang(); 
        $pttt=$_POST['pttt'];
        
        $sql_bill="INSERT INTO bill(ht , diachi, dt, tongdonhang, pttt) VALUES('$ht', '$diachi', '$dt', '$tongdonhang', '$pttt')";
        $result_bill=mysqli_query($conn, $sql_bill);*/
        echo "Ban da dat hang thanh cong";

    }
    



    function tongdonhang(){
        $tong=0;
        if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt; 
                }
            }    
        }
        return $tong; 
    }



    function taodonhang($ht, $diachi, $dt, $tongdonhang, $pttt){
        $sql_bill="INSERT INTO bill(ht,diachi,dt, tongdonhang, pttt) VALUES('$ht', '$diachi', '$dt', '$tongdonhang', '$pttt')";
        $result_bill=mysqli_query($conn, $sql);
        $conn.close();
}  
?>