<?php
include "headera.php";
include "slider.php";
require "connect.php";
?>
<?php
$query = "SELECT hoten, ngaysinh, email, sodt FROM dangky WHERE hoten !='admin' ";
$ketnoi = mysqli_query($conn, $query);
?>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách khách hàng</h1>
            <table>
                <tr>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Tùy chỉnh</th>
                </tr>
                <?php
                //if($show_cartegory){ $i=0;
                      while( $result = mysqli_fetch_assoc($ketnoi)) {
                ?>
                <tr>
                    <td><?php echo $result['hoten'] ?></td>
                    <td><?php echo $result['ngaysinh'] ?></td>  <!--hiển thị dữ liệu bảng ra (bảng có mấy cột thì hiển thị ra mấy cột phụ thuộc vào dòng 16 đến 19)-->
                    <td><?php echo $result['email'] ?></td>
                    <td><?php echo $result['sodt'] ?></td>
                    <td><a href="xoakh.php?ht=<?php echo $result ['hoten']?>">Xóa</a></td>
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