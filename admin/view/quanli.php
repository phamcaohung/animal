<?php
    if(isset($_SESSION['role']) == "admin")
        $a = $_SESSION['role'];
?>
<div class="container-fluid" style="background-color: #28292d;height: 100%;">
        <div class="container">
            <h2 class="text-center text-white mt-5">DANH SÁCH THÀNH VIÊN</h2>
            <a class="btn btn-success" href="index.php?action=quanli&act=themtv">Thêm Thành Viên</a>
        </div>
            <table class="table table-dark table-striped mt-5">
                <thead style="color: #80BB01;">
                  <tr>
                    <th>User</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $tt = new ThanhVien();
                        $result = $tt->getListThanhVien();
                        while($set = $result->fetch()):
                        
                    ?>
                <tr>
                    <td><?php echo $set['user'];?></td>
                    <td><?php echo $set['password'];?></td>
                    <td><?php echo $set['role'];?></td>
                    <?php
                        if($a != $set['user']):
                    ?>
                    <td><a class="btn btn-primary" href="index.php?action=quanli&act=edittv&id=<?php echo $set['user'];?>">Update</a></td>
                    <td><a class="btn btn-danger" href="index.php?action=quanli&act=delete&id=<?php echo $set['user'];?>">Delete</a></td>
                    <?php
                        endif;
                    ?>
                </tr>
                    <?php
                        endwhile;
                    ?>
                </tbody>
              </table>
              
</div>