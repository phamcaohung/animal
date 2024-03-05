<?php
    if(isset($_GET['act1']) == "giamgia")
    {
        $ac = 0;
    }
    else
    {
        $ac = 1;
    }
?>
<div class="container bg-dark" style="height: 800px;">
    <h2 class="text-center text-white mt-5">CHI TIẾT SẢN PHẨM</h2>
      
        <form action="index.php?action=giohang" method="post">
          <div class="row mt-4">
            <?php
              if(isset($_GET['id']))
              {
                  $id = $_GET['id'];
                  $hh = new hanghoa();
                  $a = $hh->View($id);
                  $result = $hh->getHangHoaId($id);
                  $mahh = $result["mahh"];
                  $tenhh = $result['tenhh'];
                  $hinh = $result["hinh"];
                  $dongia = $result["dongia"];
                  $mota = $result["mota"];
                  $giamgia = $result["giamgia"];
                  $soluotxem = $result["soluotxem"];
              }
            ?>
            <div class="col-lg-4 text-center">
              <img src="content\anh\<?php echo $hinh;?>" alt="" width="500px" height="350px">

              
            </div>

            

            <div class="col-lg-3 text-white">
              
                  
                      <input type="hidden" name="mahh" value="<?php echo $mahh;?>" />
                      <h2 class="card-title"><?php echo $tenhh;?></h2>
                      <?php
                          if($giamgia != 0)
                                  echo '<h3 class="text-danger mt-4">Giá bán:
                                      <strike>
                                          '.number_format($dongia).'đ
                                      </strike><br>
                                      Giảm còn:
                                      <font>
                                          '.number_format($giamgia).'đ
                                      </font>
                                      </h3>';
                          else
                              echo '<h3 class="text-danger mt-4">Giá bán: '.number_format($dongia).'đ</h3>';
                      ?>
                      <div id="stars" class="mt-4">
                              <i class="fa fa-star" onclick="DANHGIA(1)" style="color: yellow;" aria-hidden="true"></i>
                              <i class="fa fa-star" onclick="DANHGIA(2)" style="color: yellow;" aria-hidden="true"></i>
                              <i class="fa fa-star" onclick="DANHGIA(3)" style="color: yellow;" aria-hidden="true"></i>
                              <i class="fa fa-star" onclick="DANHGIA(4)" style="color: yellow;" aria-hidden="true"></i>
                              <i class="fa fa-star" onclick="DANHGIA(5)" style="color: yellow;" aria-hidden="true"></i>
                      </div>
                      <h3 class="card-title mt-3">Số lượt xem: <?php echo $soluotxem;?></h3>
                      <h4 class="mt-4">
                      Số Lượng:
                      <input type="number" style="width: 70px;padding-left: 15px;" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                      </h4>
                      <button type="submit" class="btn btn-danger text-white mt-4">Mua ngay</button>
                      <button class="like btn btn-danger mt-4" type="button"><span class="fa fa-heart"></span></button> </a>   
            </div>

            <div class="col-lg-5 text-white">
              <h3>Mô tả</h3>
              <p class="mt-4"><?php echo $mota;?></p>
            </div>
          </div>
        </form>
       

      <div class="container mt-5 bg-white">
        <h4 >Bình luận</h4>
        <hr>
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-1 text-center">
                <input type="hidden" name="txtmahh" value="" />
                <img src="content/anh/people.png" width="100px" height="80px"; />
                </div>

                <div class="col-lg-9">
                <textarea class="input-field" style="width:100%; height:80px"  type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                </div>

                <div class="col-lg-2">
                <input type="submit" style="width:100%; height:80px" class="btn btn-primary" id="submitButton" value="Bình Luận" />
                </div>            
            </div>

        </form>
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <hr>
            </div>
      </div>

                
      
</div>

