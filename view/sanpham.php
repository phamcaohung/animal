<?php
        $hh = new hanghoa();
        $count = $hh->getcountHH();
        $limit = 8;
        $p = new page();
        $page = $p->findPage($count, $limit);
        $start = $p->findStart($limit);
        $current_page = isset($_GET['page'])?$_GET['page']:1;
        if(isset($_GET['act']) == 'timkiem')
          $ac = 2;       
        else if(isset($_GET['act']) == "khuyenmai")
        {
            $ac = 0;
        }
        else
        {
            $ac = 1;
        }
        
?>
<div class="container" style="background-color: #23242a;">
		<?php
                if($ac == 0)
                {
                    echo '<h2 class="text-center text-white mt-5">SẢN PHẨM KHUYẾN MÃI</h2>';
                }
                else
                {
                    echo '<h2 class="text-center text-white mt-5">SẢN PHẨM</h2>';
                }
        ?>

		<div class="row">
			      <?php   
                $hh = new hanghoa();
                if($ac == 0)
                  $result = $hh->getHangHoaALLSALE();
                else if($ac == 1)
                  $result = $hh->getListHangHoaAllPage($start, $limit);
                else if($ac == 2)
                  if($_SERVER['REQUEST_METHOD'] == 'POST')
                  {
                      $namesearch=$_POST['txtsearch'];
                      $result=$hh->getinfSearch($namesearch);
                  }
                while($set = $result->fetch()):
            ?>
			<div class="col-lg-3">
				<div class="card mt-5 border border-dark shadow" style="width: 400px;margin-left: 20px;">
					<img class="card-img-top" height="250px"  src="content\anh\<?php echo $set["hinh"]; ?>" alt="Card image">
					<div class="card-body">
					  <h4 class="card-title">
						<?php echo $set["tenhh"]; ?>
					  </h4>
					  <?php 
						if($ac == 0)
							  echo '<h4 class="card-title">
									<strike>
									  '.number_format($set["dongia"]).'
									  <sup><u>đ</u></sup>
									  <span> </span>
									</strike>
									<font color="red">
									  '.number_format($set["giamgia"]).'
									  <sup><u>đ</u></sup>
									</font>
								  </h4>';
						else if($ac == 1)
						{
              if($set['giamgia'] != 0)
                echo '<h4 class="card-title">
                <strike>
                  '.number_format($set["dongia"]).'
                  <sup><u>đ</u></sup>
                  <span> </span>
                </strike>
                <font color="red">
                  '.number_format($set["giamgia"]).'
                  <sup><u>đ</u></sup>
                </font>
                </h4>';
              else
                echo '<h4>
                    <font color="red">
                      '.number_format($set["dongia"]).'
                      <sup><u>đ</u></sup>
                    </font>
                    </h4>';
						}
            else if($ac == 2
            )
            {
              if($set['giamgia'] != 0)
                echo '<h4 class="card-title">
                <strike>
                  '.number_format($set["dongia"]).'
                  <sup><u>đ</u></sup>
                  <span> </span>
                </strike>
                <font color="red">
                  '.number_format($set["giamgia"]).'
                  <sup><u>đ</u></sup>
                </font>
                </h4>';
              else
                echo '<h4>
                    <font color="red">
                      '.number_format($set["dongia"]).'
                      <sup><u>đ</u></sup>
                    </font>
                    </h4>';
            }
              
					  ?>
					  <p class="card-text">Số lượt xem: <?php echo $set["soluotxem"]; ?></p>
					  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set['mahh'];?>" class="btn btn-dark">Xem</a>
					</div>
				  </div>
			   </div>
			   	<?php
                endwhile;
              	?>
			</div>
		

		
			<ul class="pagination pagination-lg justify-content-center mt-5 mb-5">
                    <?php
                        if($ac != 2):
                        if($current_page > 1 && $page > 1)
                        {
                            echo '<li class="page-item"><a class="page-link" href="index.php?action=sanpham&page='.($current_page - 1).'">Prev</a></li>';
                        }
                        for($i=1; $i <= $page; $i++):

                    ?>

                        <li class="page-item"><a class="page-link" href="index.php?action=sanpham&page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php
                        endfor;
                        if($current_page < $page && $page > 1)
                        {
                            echo '<li class="page-item"><a class="page-link" href="index.php?action=sanpham&page='.($current_page + 1).'">Next</a></li>';
                        }
                        endif;
                    ?>
			</ul>
		
		
</div>