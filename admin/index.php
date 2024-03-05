<?php
    session_start();
    set_include_path(get_include_path().PATH_SEPARATOR.'model/');
    spl_autoload_extensions('.php');
    spl_autoload_register();
    include "model/uploadhinh.php";
    include "model/quanli.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../content/css/css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <?php 
        if(isset($_SESSION['tk']))
        {
            include "view/header.php";
        }
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
        if(isset($_SESSION['tk']))
        {
            include "view/footer.php";
        }
    ?>
    
</body>
</html>

