

<?php
    if(isset($_GET['act']))
    {
      if($_GET['act'] == 'edittv' || $_GET['act'] == 'edit_action')
      {
        $ac = 1;
      }
      if($_GET['act'] == 'themtv')
      {
        $ac = 2;
      }
    }
?>
<div class="container-fluid" style="background-color: #28292d;height: 400px;">
    
<?php
    if($ac == 1)
    {
      echo '<h2 class="text-center text-white mt-5">Cap Nhat Thanh Vien</h2>';
    }
    if($ac == 2)
    {
      echo '<h2 class="text-center text-white mt-5">Them Thanh Vien</h2>';
    }
?>
    
<?php
        if(isset($_GET['id']))
        {
          $user = $_GET['id'];
          $hh = new ThanhVien();
          $result = $hh->getThanhVienId($user);
          $user = $result['user'];
          $password = $result['password'];
          $role = $result['role'];
        }
?>

<?php 
        if($ac == 1)
        {
            echo '<form action="index.php?action=quanli&act=edit_action&id='.$user.'" method="post" enctype="multipart/form-data">';
        }
        if($ac == 2)
        {
            echo '<form action="index.php?action=quanli&act=them_action" method="post" enctype="multipart/form-data">';
        }
?> 
            <table class="table table-dark table-striped mt-5">
                <thead style="color: #80BB01;">
                  <tr>
                    <th>User</th>
                    <th>Password</th>
                    
                    <th>Role</th>
                    
                    <th>Cập Nhật</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td> <input type="text" value="<?php if(isset($user)) echo $user;?>" class="form-control" name="user" ></td>
                    <td><input type="text" value="<?php if(isset($password)) echo $password;?>" class="form-control" name="password"  maxlength="100px"></td>
                    
                    <td>
                    <select class="form-select" name="role" id="role">
                        <option value="add_delete">Thêm và xóa</option>
                        <option value="update">Cập nhật</option>
                        <option value="check">Xem</option>
                        <option value="manager">Quản lí</option>
                    </select>
                    </td>
                    
                    <td colspan="2">
                        <input type="submit" value="submit" name="submit">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
</div>