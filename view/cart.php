<div style="background-color: #23242a">
<h2 class="text-center text-white mt-5 mb-4">THÔNG TIN GIỎ HÀNG</h2>
  <form action="index.php?action=giohang&act=update" method="post">
    <table class="table table-dark table-hover table-striped">
      <?php
        if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0):
          echo "<script> alert('Gio hang ban chua co hang');</script>";
      ?>
      <?php 
        else:
      ?>
      <thead class="text-center">
        <tr class="table-info">
          <th>Số TT</th>
          <th>Hình</th>
          <th>Thông Tin Sản Phẩm</th>
          <th>Đơn Giá</th>
          <th>Số Lượng</th>
          <th>Thành Tiền</th>
          <th>Chỉnh Sửa</th>
        </tr>
      </thead>
      <tbody class="text-center" >
          <?php
            $j = 0;
            foreach($_SESSION['cart'] as $key => $item):
              $j++;           
          ?>
          <tr >
            <td style="padding-top: 50px;"><?php echo $j;?></td>
            <td style="padding-top: 10px;"><img width="100px" height="100px" src="content\anh\<?php echo $item['hinh'];?>"> </td>
            <td style="padding-top: 50px;"><?php echo $item['ten'];?></td>
            <td style="padding-top: 50px;">
              Đơn Giá:
              <?php
                if($item['giamgia'] == 0)
                {
                  
                  echo number_format($item['dongia'])
                  ."<sup><u> đ</u></sup>";
                  
                }
                else
                {
                  echo "<strike>".number_format($item['dongia'])."</strike><sup><u> đ</u></sup>"
                  ." - ".number_format($item['giamgia'])."<sup><u> đ</u></sup>";
                }
                  
              ?>
              

            </td>
            <td style="padding-top: 50px;">Số Lượng: 
              <input type="text" name="newqty[<?php echo $key; ?>]" value="<?php echo $item['soluong'];?>" />
            </td>
            <td style="padding-top: 50px;">Thành Tiền : 
              <?php
                
                echo number_format($item['total']);
              ?>    
              <sup><u> đ</u></sup>
            </td>
            <td style="padding-top: 50px;"><a href="index.php?action=giohang&act=delete&id=<?php echo $key;?>"><button type="button" class="btn btn-danger">Xóa</button></a>

              <button type="submit" class="btn btn-primary">Sửa</button>

            </td>
          </tr>
          <?php
            endforeach;
          ?>
        <tr>
          <td colspan="5" class="text-center">
            <b>Tổng Tiền</b>
          </td>
          <td class="text-center">
            <b> 
              <?php
                $gh = new giohang();
                echo $gh->getTotal();
              ?>
              <sup><u>đ</u></sup>
              
            </b>
          </td>
          <td><a href="index.php?action=order" class="btn btn-warning">Thanh toán</a></td>
        </tr>
      </tbody>
    </table>
  </form>
<?php
  endif;
?>
</div>
</div>



