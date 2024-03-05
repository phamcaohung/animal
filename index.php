<?php
    session_start();
    // include "model/connect.php";
    // include "model/hanghoa.php";
    // include "model/giohang.php";
    // include "model/user.php";
    // include "model/hoadon.php";
    set_include_path(get_include_path().PATH_SEPARATOR.'model/');
    spl_autoload_extensions('.php');
    spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin San Pham</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="content/css/css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <?php 
            include "view/header.php";
    ?>
      <div class="container-fluid">
          <div class="row">
              <!-- hien thi noi dung đây -->
              <?php
                $ctrl = "dangnhap";
                if(isset($_GET['action']))
                {
                    $ctrl = $_GET['action'];
                }
                include "controller/".$ctrl.".php";
              ?>
          </div>
      </div>
    <?php
            include "view/footer.php";
    ?>
</body>
</html>
<script>
    stars = document.getElementById('stars');
    function DANHGIA(sosao)
    {
        for(i = 0; i<sosao; i++)
            stars.children[i].style.color="yellow";
        for(i = sosao; i<5; i++)
            stars.children[i].style.color="white";
    }
</script>
