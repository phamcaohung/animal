<?php
    $act = 'dangnhap';
    
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'dangnhap':
            include "./view/dangnhap.php";
            break;
        
        case 'dangnhap_action':
            if(isset($_POST['txtusername']) && isset($_POST['txtpassword']))
            {
                $user = $_POST['txtusername'];
                $pass = ($_POST['txtpassword']);
                

                $us = new DangNhap();

                $ur = $us->logAdmin($user, $pass);

                if($ur != false)
                {
                    $_SESSION['tk'] = $ur['user'];
                    $_SESSION['user'] = $ur['user'];
                    $_SESSION['role'] = $ur['role'];
                    echo '<script> alert("Dang nhap thanh cong");</script>';
                    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=hanghoa"/>';
                    include "./view/hanghoa.php";
                    
                }
                else
                {
                    echo '<script> alert("Dang nhap ko thanh cong");</script>';
                    include "./view/dangnhap.php";
                }
            }
            break;
        case 'changepass':
            include "./view/changepass.php";
            break;
        case 'changepass_action':
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $oldpass = $_POST['oldpass'];
                $newpass = $_POST['newpass'];
                $mk = new DangNhap();
                $pass = $mk->getPass();
                if(strcmp($oldpass, $pass) == 0)
                {
                    if(strcmp($newpass, $pass) == 0)
                    {
                        echo '<script>alert("Mat khau moi ko dc trung voi mat khau cu");</script>';
                        include "./view/changepass.php";
                    }
                    else
                    {
                        $result = $mk->changePass($newpass);
                        echo '<script>alert("Thay doi mat khau thanh cong");</script>';
                    }
                    
                }
                else
                {
                    echo '<script>alert("Mat khau cu khong hop le");</script>';
                    include "./view/changepass.php";
                }
            }
            include "./view/dangnhap.php";
            break;
        case 'logout':
            if(isset($_SESSION['user']))
            {
                $_SESSION['tk'] = [];
                $_SESSION['user'] = [];
                unset($_SESSION['role']);
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=dangnhap"/>';
            }
            include "./view/dangnhap.php";
            break;
    }
?>
<!-- if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $user = $_POST['txtusername'];
                $pass = $_POST['txtpassword'];

                $dn = new DangNhap();
                $result = $dn->logAdmin($user, $pass);
                if($result)
                {
                    $_SESSION['user'] = $result['user'];
                    $_SESSION['role'] = $result['role'];
                    $role = $dn->role();
                    $role_add = "add";
                    $role_delete = "delete";
                    if(strcmp($role, $role_add) == 0)
                    {
                        $_SESSION['role'] = "add";
                    }
                    echo '<script>alert("Dang nhap thanh cong");</script>';
                    echo '<meta http-equiv=refresh content="0;url=../admin/index.php?action=hanghoa&act=hanghoa"/>';
                }
                else
                {
                    echo '<script>alert("Mat khau ko dung");</script>';
                    include "./View/dangnhap.php";
                }
            } -->