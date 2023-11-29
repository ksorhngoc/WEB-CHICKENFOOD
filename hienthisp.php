<?php
include "headera.php";
include "slider.php";
require "connect.php";
?>
<?php
$query = "SELECT * FROM sanpham ORDER BY cartegory_id DESC";
$ketnoi = mysqli_query($conn, $query);
?>

<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách sản phẩm</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Hình</th>
                    <th>Mã danh mục</th>
                    <th>Mô tả</th>
                    <th>Bảo quản</th>
                    <th>Tùy chỉnh</th>
                </tr>
                <?php
                //if($show_cartegory){ $i=0;
                      while( $result = mysqli_fetch_assoc($ketnoi)) {
                ?>
                <tr>
                    <td><?php echo $result['cartegory_id'] ?></td>
                    <td><?php echo $result['Tensp'] ?></td>  <!--hiển thị dữ liệu bảng ra (bảng có mấy cột thì hiển thị ra mấy cột phụ thuộc vào dòng 16 đến 19)-->
                    <td><?php echo $result['Gia'] ?></td>
                    <td><img width="50px" src="<?php echo $result['Hinh'] ?>"></td>
                    <td><?php echo $result['Madanhmuc'] ?></td>
                    <td><?php echo $result['Mota'] ?></td>
                    <td><?php echo $result['Baoquan'] ?></td>
                    <td><a href="suasp.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">Sửa/</a><a href="xoasp.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">Xóa</a></td>
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