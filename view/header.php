<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #23242a;">
        <div class="container-fluid">
          
            <img src="content/anh/9-1-removebg-preview.png" width="5%" height="5%" alt="">
        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link header-tieude" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-tieude" href="index.php?action=sanpham">Sản phẩm</a>
                </li>
                <?php
                    if(!isset($_SESSION['makh']))
                    {
                    echo "<li class='nav-item'>
                            <a class='nav-link header-tieude' href='index.php?action=dangnhap'>Đăng nhập</a>
                            </li>";
                    }
                ?>
              <li class="nav-item">
                <a class="nav-link header-tieude" href="index.php?action=dangky">Đăng ký</a>
              </li>
              <li class="nav-item">
                <a class="nav-link header-tieude" href="index.php?action=dangnhap&act=logout">Đăng xuất</a>
              </li>
              <form action="index.php?action=sanpham&act=timkiem" method="post" class="d-flex" style="margin-left: 80px;">
                <input name="txtsearch" style="width: 300px;" class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit">Search</button>
              </form>
              <li class="nav-item">
                <a class="nav-link header-tieude" href="index.php?action=giohang">
                    <i class="fa-2x fa-solid fa-cart-shopping"></i>
                </a>
              </li>
              <li>
                <?php
                  if(isset($_SESSION['cart']))
                  {
                    $dem = count($_SESSION['cart']);
                  }
                  else
                    $dem = 0;
                ?>
                <p class="text-white"><?php echo $dem;?></p>
                </li>
                <li>
                    <a class="nav-link header-tieude" href="">
                    <?php
                        if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
                            $name = $_SESSION['tenkh'];
                        ?>  
                        <p>Xin chao! <?php echo $name;?></p>
                        <?php
                        endif
                    ?>
                    </a>
                </li>
            </ul>
            
          </div>

          <img  src="content/anh/13-2-removebg-preview.png" width="5%" height="5%" alt="">
        </div>
      </nav>

      <div class="home2" style="background-color: #23242a;">
            <div class="image-box">
                <img src="content\anh\img1-h22.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content\anh\ech3.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content\anh\tacke1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content\anh\ran3.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content\anh\ca1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content\anh\cho1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content\anh\meo1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content/anh/nhen2.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content/anh/rua2.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="content/anh/tran3.jpg" alt=""> 
            </div>
        </div>