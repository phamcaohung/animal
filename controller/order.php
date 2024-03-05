<?php

    if(!isset($_SESSION['makh']) || count($_SESSION['cart']) == 0)
    {
        echo '<script> alert("Ban chua dang nhap");</script>';
        // include "view/login.php";
        $action = "order_detail"; 
        switch ($action) {
            case 'order_detail':
                include "view/order_detail.php";
        }
        if(isset($_GET['act']))
        {
            $act = $_GET['act'];
            switch ($act) {
                case 'order_detail_action':
                    if(isset($_POST['submit']))
                    {
                        $name = $_POST['name'];
                        $diachi = $_POST['diachi'];
                        $sdt = $_POST['sdt']; 
                        $date = $_POST['date'];
                        $a = array(
                            'name' => $name,
                            'diachi' => $diachi,
                            'sdt' => $sdt,
                            'date' => $date
                        );
                        $_SESSION['order'] = $a;
                        include "view/order_action.php";
                    }
            }
        } 
        
        
    }
    else
    {
    $action="order";
    if(isset($_GET['act']))
    {
        $action=$_GET['act'];
    }
    switch ($action) {
        case 'order':
        //goi phuong thuc tu model
        $hd = new hoadon();
        $sohd = $hd->InsertOrder($_SESSION['makh']);
        //co duoc ma hd thi insert vao bang ct hoa don
        $_SESSION['mahd'] = $sohd;
        $total = 0;
        foreach ($_SESSION['cart'] as $key => $item) {
            $hd->InsertOrderDetail($sohd, $item['mahh'], $item['soluong'], $item['total']);
            $total += $item['total'];
        }
        //phuong thuc update tong tien vao lai bang hd
        $hd->updateOrderTotal($sohd, $total);
        include "./view/order.php";
        
        // case 'order_detail':
        // include "./view/order.php";

    }
    }
?>