<div class="table-responsive" style="background-color: #23242a;">
  <div class="container" >
		<h2 class="text-center text-white mt-5">HÓA ĐƠN</h2>
		<div class="body_form_dangky" style="margin-top: -120px;">
			<div class="box_dangky" style="height: 400px;">
			  <form action="" method="post" class="form">
        <?php

          if(isset($_SESSION['order']))
          {
            $name = $_SESSION['name'];
            $diachi = $_SESSION['diachi'];
            $date = $_SESSION['date'];
            $sdt = $_SESSION['sdt'];
          }
        ?>
				<div class="row">
				  <div class="col-lg-6">
					<div class="inputBox">
						<input value="<?php echo $name; ?>" type="text">
						<span>Họ và tên:</span>
						<i></i>
					</div>

                    <div class="inputBox">
					  <input value="<?php echo $diachi; ?>" type="text">
					  <span>Địa chỉ:</span>
					  <i></i>
					</div>
				  </div>
		  
				  <div class="col-lg-6">
                    <div class="inputBox">
					  <input value="<?php echo $date; ?>" type="date">
					  <span>Ngày đặt: </span>
					  <i></i>
					</div>
					
					<div class="inputBox">
					  <input value="<?php echo $sdt; ?>" type="number">
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
            foreach($_SESSION['cart'] as $key => $item):
              $j++; 
          ?>

            <tr>
              <td><?php echo $j; ?></td>
              <td><?php echo $item['ten']; ?></td>
              <td>Đơn Giá: 
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
              - Số Lượng: <?php echo $item['soluong']; ?><br />
              </td>
              <td>
                <?php
                  if($item['giamgia'] == 0)
                  {
                    
                    echo number_format($item['dongia']*$item['soluong'])
                    ."<sup><u> đ</u></sup>";
                    
                  }
                  else
                  {
                    echo number_format($item['giamgia']*$item['soluong'])."<sup><u> đ</u></sup>";
                  }
                ?>
              </td>
            </tr>
          <?php
            endforeach;
          ?>
          <tr>
            <td colspan="3" class="text-center">
              <b>Tổng Tiền</b>
            </td>
            <td>
              <b>
                <?php
                  $gh = new giohang();
                  echo $gh->getTotal()
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