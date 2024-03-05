<?php
    class user {
        function __construct(){}

        function InserUser($tenkh, $user, $matkhau, $email, $diachi, $dt)
        {
            $db = new connect();
                $query = "insert into khachhang(makh,tenkh,taikhoan,matkhau,email,diachi,sodienthoai) 
                values(NULL,'$tenkh', '$user', '$matkhau', '$email', '$diachi', '$dt')";
                $db->exec($query);
        }

        function loginUser($username, $matkhau)
        {
            $db = new connect();
            $select = "select * from khachhang where taikhoan = '$username' and matkhau = '$matkhau'";
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set;
        }

        function check_user($username)
        {
            $db = new connect();
            $select = "select taikhoan from khachhang where taikhoan = '$username'";
            // $result = $db->getList($select);
            // return $result;
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set;
        }  

        function check_email($email)
        {
            $db = new connect();
            $select = "select email from khachhang where email = '$email'";
            // $result = $db->getList($select);
            // return $result;
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set;
        }
        
    }
?>