<?php
    $act = "dangky";
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'dangky':
            include "./view/registration.php";
            break;
        case 'dangky_action':
            if(isset($_POST['txttenkh']))
            {
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsodt'];
                $username = $_POST['txtusername'];
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];

                
                $crypt = $pass;
                
                $us = new user();
                $un = $us->check_user($username);
                $ue = $us->check_email($email);
                if($un != false)
                {
                    echo '<script> alert("Tài khoản đã tồn tại vui lòng điền tài khoản khác");</script>';
                    include "./view/registration.php";  
                    break;  
                }
                else if($ue != false)
                {
                    echo '<script> alert("Email đã tồn tại vui lòng điền email khác");</script>';
                    include "./view/registration.php";
                    break;
                } 
                else
                {
                    $check = $us->InserUser($tenkh, $username, $crypt, $email, $diachi, $sodt);
                    echo '<script> alert("Đăng ký thành công");</script>';
                    include "./view/login.php";
                    
                }
            }
            break;
    }
    
?>