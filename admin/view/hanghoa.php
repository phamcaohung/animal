                    <?php
                        if(isset($_SESSION['role']))
                            $a = $_SESSION['role'];                
                    ?>
<div class="container-fluid" style="background-color: #28292d;height: 100%;">
        <div class="container">
            <h2 class="text-center text-white mt-5">DANH SÁCH HÀNG HÓA</h2>
            <?php
                if($a == "add_delete" || $a == "admin" || $a == "manager"):
            ?>
            <a class="btn btn-success" href="index.php?action=hanghoa&act=themsp">Thêm sản phẩm</a>
            <?php
                endif;
            ?>
        </div>
            <table class="table table-dark table-striped mt-5">
                <thead style="color: #80BB01;">
                  <tr>
                    <th>Mã hàng</th>
                    <th>Tên hàng</th>
                    <th>Đơn giá</th>
                    <th>Giảm giá</th>
                    <th>Hình</th>
                    <th>Nhóm</th>
                    <th>Mã loại</th>
                    <th>Số lượt xem</th>
                    <!-- <th>Mô tả</th> -->
                    <th>Số lượng tồn</th>
                    <?php
                        switch ($a) {
                                case 'add_delete':
                                    echo "<th>Xóa</th>";
                                    break;
                                case 'admin':
                                    echo "<th>Xóa</th>";
                                    echo "<th>Cập Nhật</th>";
                                    break;
                                case 'update':
                                    echo "<th>Cập Nhật</th>";
                                    break;
                                case 'check':
                                    break;
                                case 'manager':
                                    echo "<th>Xóa</th>";
                                    echo "<th>Cập Nhật</th>";
                                    break;
                        }                        
                    ?>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $hh = new HangHoa();
                        $result = $hh->getListHangHoa();
                        while($set = $result->fetch()):
                    ?>
                <tr>
                    <td><?php echo $set['mahh'];?></td>
                    <td><?php echo $set['tenhh'];?></td>
                    <td><?php echo $set['dongia'];?></td>
                    <td><?php echo $set['giamgia'];?></td>
                    <td><img width="100px" height="100px" src="../content\anh\<?php echo $set['hinh'];?>"/></td>
                    <td><?php echo $set['nhom'];?></td>
                    <td><?php echo $set['maloai'];?></td>
                    <td><?php echo $set['soluotxem'];?></td>
                    <td><?php echo $set['soluongton'];?></td>
                    <?php
                        $mahh = $set["mahh"];
                        switch ($a) {
                            case 'add_delete':
                                echo '<td><a class="btn btn-danger" href="index.php?action=hanghoa&act=delete&id='.$mahh.'">Xóa</a></td>';
                                break;
                            case 'admin':
                                echo '<td><a class="btn btn-primary" href="index.php?action=hanghoa&act=edithh&id='.$mahh.'">Cập nhật</a></td>';
                                echo '<td><a class="btn btn-danger" href="index.php?action=hanghoa&act=delete&id='.$mahh.'">Xóa</a></td>';
                                break;
                            case 'update':
                                echo '<td><a class="btn btn-primary" href="index.php?action=hanghoa&act=edithh&id='.$mahh.'">Cập nhật</a></td>';
                                break;
                            case 'check':
                                break;
                            case 'manager':
                                echo '<td><a class="btn btn-primary" href="index.php?action=hanghoa&act=edithh&id='.$mahh.'">Cập nhật</a></td>';
                                echo '<td><a class="btn btn-danger" href="index.php?action=hanghoa&act=delete&id='.$mahh.'">Xóa</a></td>';
                                break;
                    }                              
                    ?>
                </tr>
                    <?php
                        endwhile;
                    ?>
                </tbody>
              </table>
              
</div>