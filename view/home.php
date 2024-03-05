<div class="container home">    
    <h2 class="text-center text-white">SẢN PHẨM ĐANG KHUYẾN MÃI</h2>
<div class="row">

              <?php
                $hh = new hanghoa();
                $result = $hh->getHangHoaKM();
                while($set = $result->fetch()):
              ?>

    <div class="col-lg-3">
        <div class="card mt-4 border border-dark shadow" style="width: 400px;margin-left: 20px;">
            <img class="card-img-top" height="250px" src="content\anh\<?php echo $set["hinh"]; ?>" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><?php echo $set["tenhh"]; ?></h4>
              <h4 class="card-title">
                <strike>
                  <?php echo number_format($set["dongia"]); ?>
                  <sup><u>đ</u></sup>
                  <span> </span>
                </strike>
                <font color="red">
                  <?php echo number_format($set["giamgia"]); ?>
                  <sup><u>đ</u></sup>
                </font>
              </h4>
              <p class="card-text">Số lượt xem: <?php echo $set["soluotxem"]; ?></p>
              <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'];?>&act1=giamgia" class="btn btn-dark">Xem</a>
            </div>
          </div>
       </div>

              <?php
                endwhile;
              ?>
</div>
<div class="container mt-3 text-center ">    
    <a href="index.php?action=sanpham&act=khuyenmai" class="btn btn-secondary mt-5">XEM TẤT CẢ CÁC SẢN PHẨM KHUYẾN MÃI</a>
</div>

<div class="container mt-5">    
    <h2 class="text-center text-white">SẢN PHẨM CÓ NHIỀU LƯỢT XEM NHẤT</h2>
</div>
<div class="row">

              <?php   
                
                $result = $hh->getHangHoaNew();
                while($set = $result->fetch()):
              ?>
            
   <div class="col-lg-3">
    <div class="card mt-4 border border-dark shadow" style="width: 400px;margin-left: 20px;">
        <img class="card-img-top" height="250px"  src="content\anh\<?php echo $set["hinh"]; ?>" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $set["tenhh"]; ?>
          </h4>
          <h4>
            <font color="red">
              <?php 
                if($set['giamgia'] == 0)
                  echo number_format($set["dongia"])."<sup><u>đ</u></sup>"; 
                else
                {
                  echo "<strike>".
                        number_format($set['dongia'])."
                        <sup><u>đ</u></sup>
                        <span> </span>
                      </strike>
                      <font color='red'>
                        ".number_format($set['giamgia'])."
                        <sup><u>đ</u></sup>
                      </font>";
                }
              ?>
              
            </font>
          </h4>
          <p class="card-text">Số lượt xem: <?php echo $set["soluotxem"]; ?></p>
          <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'];?>" class="btn btn-dark">Xem</a>
        </div>
      </div>
   </div>

              <?php
                endwhile;
              ?>
</div>
<div class="container mt-3 text-center ">    
    <a href="index.php?action=sanpham" class="btn btn-secondary mt-5 mb-5">XEM TẤT CẢ CÁC SẢN PHẨM</a>
</div>
        <div class="home3 container-fuild">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 ">
                        <div class="card bg-white" style="height: 250px;">
                            <img class="xoay mt-4" style="margin: 0 auto;" width="25%" src="content/anh/imgbox1-h19.png" alt="">
                            <h4 class="mt-4 mb-3">Free Same-Day Delivery</h4>
                            <p>Order by 2pm local time to get free delivery</p>
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-white " style="height: 250px;">
                            <img class="xoay mt-4" style="margin: 0 auto;" width="25%" src="content/anh/imgbox2-h19.png" alt="">
                            <h4 class="mt-4 mb-3">30 Days Return</h4>
                            <p>35% off your first order plus 5% off all future orders.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-white " style="height: 250px;">
                            <img class="xoay mt-4" style="margin: 0 auto;" width="25%" src="content/anh/imgbox3-h19.png" alt="">
                            <h4 class="mt-4 mb-3">Security payment</h4>
                            <p>25% off your online order of $50+. Available at most locations.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-white" style="height: 250px;">
                            <img class="xoay mt-4" style="margin: 0 auto;" width="25%" src="content/anh/imgbox4-h19.png" alt="">
                            <h4 class="mt-4 mb-3">24/7 Support</h4>
                            <p>Shop online to get orders over $35 shipped fast and free.*</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
</div>


