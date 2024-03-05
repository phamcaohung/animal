<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #23242a;">
        <div class="container-fluid">
          
            <img src="../content/anh/9-1-removebg-preview.png" width="5%" height="5%" alt="">
        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link header-tieude" href="index.php?action=hanghoa">Sản Phẩm</a>
                </li>
                <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle header-tieude" href="#" role="button" data-bs-toggle="dropdown">Phân Loại</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item " href="index.php?action=loaisp">Loại Sản Phẩm</a></li>
                    <li><a class="dropdown-item " href="index.php?action=hoadon">Hóa Đơn</a></li>
                    <li><a class="dropdown-item " href="index.php?action=thongke">Thống kê</a></li>
                </ul>
            </li>
            <?php
                if($_SESSION['role'] == "admin"):
            ?>
                <li>
                    <a class="nav-link header-tieude" href="index.php?action=quanli">Quản Lí Thành Viên</a>
                </li>
            <?php
                endif;
            ?>  
              <li class="nav-item">
                <a class="nav-link header-tieude" href="index.php?action=dangnhap&act=changepass">Change Pass</a>
              </li>
              <li class="nav-item">
                <a class="nav-link header-tieude" href="index.php?action=dangnhap&act=logout">Đăng Xuất</a>
              </li>
            <li>
                    <a class="nav-link header-tieude" href="">
                    <?php
                        if(isset($_SESSION['role']) && isset($_SESSION['user'])):
                            $name = $_SESSION['user'];
                            $role = $_SESSION['role'];
                        ?>  
                        <p>Xin chao! <?php echo $name;?> (Quyền hạn: <?php echo $role;?>)</p>
                        <?php
                        endif
                    ?>
                    </a>
                </li>
              
  
            </ul>
            
          </div>

          <img  src="../content/anh/13-2-removebg-preview.png" width="5%" height="5%" alt="">
        </div>
      </nav>

      <div class="home2" style="background-color: #23242a;">
            <div class="image-box">
                <img src="../content\anh\img1-h22.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content\anh\ech3.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content\anh\tacke1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content\anh\ran3.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content\anh\ca1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content\anh\cho1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content\anh\meo1.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content/anh/nhen2.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content/anh/rua2.jpg" alt=""> 
            </div>
            <div class="image-box">
                <img src="../content/anh/tran3.jpg" alt=""> 
            </div>
        </div>