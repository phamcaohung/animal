<?php
    $act = 'quanli';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }

    switch ($act) {
        case 'quanli':
            include "./view/quanli.php";
            break;
        
        case 'edittv':
            include "./view/edittv.php";
            break;
        case 'delete':
            if(isset($_GET['id']))
            {
                $user = $_GET['id'];
                $hh = new ThanhVien();
                $hh->deleteThanhVienID($user);
            }
            include "view/quanli.php";
            break;
        case 'themtv':
            include "view/edittv.php";
            break;
        case 'edit_action':
            
                
                    if(isset($_GET['id']))
                {
                    $user=$_GET['id'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];
                    $hh = new ThanhVien();
                    $a = $hh->updatetv($user,$password,$role);
                    if(isset($hh))
                    {
                        echo '<script>alert("Cap nhat thanh cong")</script>';
                    }
                    else
                        echo '<script>alert("Cap nhat ko thanh cong")</script>';
                }
            
            include "./view/quanli.php";
            break;
        case 'them_action':
            if(isset($_POST['submit']))
            {
                $user=$_POST['user'];
                $password = $_POST['password'];
                $role = $_POST['role'];
                $hh = new ThanhVien();
                $hh->inserttv($user,$password,$role);
                if(isset($hh))
                {
                    echo '<script> alert("Thêm thành viên thành công")</script>';
                }
            }
            include "./view/quanli.php";
            break;
    }
?>