<?php
    $act = "sanpham";
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];//khuyen mai
    }
    switch ($act) {
        case 'sanpham':
            include "view/sanpham.php";
            break;
        case 'khuyenmai':
            include "view/sanpham.php";
            break;
        case 'detail':
            include "view/sanphamchitiet.php";
            break;
        case 'giamgia':
            include "view/sanphamchitiet.php";
            break;
        case 'khuyenmai1':
            include "view/sanpham.php";
            break;
        case 'timkiem':
            include "view/sanpham.php";
            break;
    }
?>