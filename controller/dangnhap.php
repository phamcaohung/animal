<?php
    $act = 'dangnhap';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'dangnhap':
            include "./view/login.php";
            break;
        case 'dangnhap_action':
            if(isset($_POST['txtusername']) && isset($_POST['txtpassword']))
            {
                $user = $_POST['txtusername'];
                $pass = ($_POST['txtpassword']);
                

                $us = new user();

                $ur = $us->loginUser($user, $pass);

                if($ur != false)
                {
                    $_SESSION['makh'] = $ur['makh'];
                    $_SESSION['tenkh'] = $ur['tenkh'];
                    $_SESSION['username'] = $ur['username'];

                    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
                }
                else
                {
                    echo '<script> alert("Dang nhap ko thanh cong");</script>';
                    include "./view/login.php";
                }
            }
            
            break;
        case 'logout':
            if(isset($_SESSION['makh']))
            {
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                unset($_SESSION['username']);
                unset($_SESSION['cart']);
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
            }
            break;
    }
?>