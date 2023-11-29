<?php
include "headera.php";
include "slider.php";
require "connect.php";
?>
<?php
$query = "SELECT * FROM bill ORDER BY id DESC";
$ketnoi = mysqli_query($conn, $query);
?>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách đơn hàng</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Tổng đơn hàng</th>
                    <th>Phương thức thanh toán</th>
                    <th>Tùy chỉnh</th>
                </tr>
                <?php
                //if($show_cartegory){ $i=0;
                      while( $result = mysqli_fetch_assoc($ketnoi)) {
                ?>
                <tr>
                    <td><?php echo $result['id'] ?></td>
                    <td><?php echo $result['ht'] ?></td>  <!--hiển thị dữ liệu bảng ra (bảng có mấy cột thì hiển thị ra mấy cột phụ thuộc vào dòng 16 đến 19)-->
                    <td><?php echo $result['diachi'] ?></td>
                    <td><?php echo $result['dt'] ?></td>
                    <td><?php echo $result['tongdonhang'] ?></td>
                    <td><?php echo $result['pttt'] ?></td>
                    <td><a href="xoadh.php?id=<?php echo$result['id']?>">Xóa</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>
</body>
</html>