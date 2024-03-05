<div class="table-responsive" style="background-color: #23242a;">
<?php
  // if(!isset($_SESSION['makh']) || count($_SESSION['cart']) == 0):
  //   echo '<script> alert("Ban chua dang nhap");</script>';
  //   include "login.php";
?>
<?php
  // else :
?>
  <div class="container" >
		<h2 class="text-center text-white mt-5">HÓA ĐƠN</h2>
		<div class="body_form_dangky" style="margin-top: -120px;">
			<div class="box_dangky" style="height: 400px;">
			  <form action="" method="post" class="form">
        <?php
          $hd = new hoadon();

          if(isset($_SESSION['mahd']))
          {
            $result = $hd->getOrder($_SESSION['mahd']);
            $sohd = $result['mahd'];
            $tenkh = $result['tenkh'];
            $diachi = $result['diachi'];
            $sodt = $result['sodienthoai'];
            $ngaydat = $result['ngaydat'];
            $d = new DateTime($ngaydat);
          }
        ?>
				<div class="row">
				  <div class="col-lg-6">
					<div class="inputBox">
					  <input value="<?php echo $sohd; ?>" type="number">
					  <span>Số Hóa đơn:</span>
					  <i></i>
					</div>
					
					<div class="inputBox">
					  <input value="<?php echo $d->format('d/m/Y'); ?>">
					  <span>Ngày lập:</span>
					  <i></i>
					</div>
				   
					<div class="inputBox">
						<input value="<?php echo $tenkh; ?>" type="text">
						<span>Họ và tên:</span>
						<i></i>
					</div>
				  </div>
		  
				  <div class="col-lg-6">
					<div class="inputBox">
					  <input value="<?php echo $diachi; ?>" type="text">
					  <span>Địa chỉ:</span>
					  <i></i>
					</div>
					
					<div class="inputBox">
					  <input value="<?php echo $sodt; ?>" type="number">
					  <span>Số điện thoại: </span>
					  <i></i>
					</div>
				  </div>
				</div>
			  </form>
			</div>
		  </div>
	</div>


    
      <!-- Thông tin sản phầm -->
      <table class="table table-dark table-hover table-striped" style="margin-top: -100px;">
        <thead>

          <tr class="table-info">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th>Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $j = 0;
            $result1 = $hd->getOrderDetail($_SESSION['mahd']);
            while ($set = $result1->fetch()): 
              $j++
          ?>

            <tr>
              <td><?php echo $j; ?></td>
              <td><?php echo $set['tenhh']; ?></td>
              <td>Đơn Giá: 
                <?php
                  if($set['giamgia'] == 0)
                  {
                    
                    echo number_format($set['dongia'])
                    ."<sup><u> đ</u></sup>";
                    
                  }
                  else
                  {
                    echo "<strike>".number_format($set['dongia'])."</strike><sup><u> đ</u></sup>"
                    ." - ".number_format($set['giamgia'])."<sup><u> đ</u></sup>";
                  }
                ?> 
              - Số Lượng: <?php echo $set['soluongmua']; ?><br />
              </td>
              <td>
                <?php
                  if($set['giamgia'] == 0)
                  {
                    
                    echo number_format($set['dongia']*$set['soluongmua'])
                    ."<sup><u> đ</u></sup>";
                    
                  }
                  else
                  {
                    echo number_format($set['giamgia']*$set['soluongmua'])."<sup><u> đ</u></sup>";
                  }
                ?>
              </td>
            </tr>
          <?php
            endwhile
          ?>
          <tr>
            <td colspan="3" class="text-center">
              <b>Tổng Tiền</b>
            </td>
            <td>
              <b>
                <?php
                  $gh = new giohang();
                  echo $gh->getTotal();
                  $_SESSION['cart'] = [];
                ?>
              <sup><u>đ</u></sup></b>
            </td>
           
          </tr>
        </tbody>
      </table>
    </form>
    <?php
      // endif
    ?>
</div>
</div>