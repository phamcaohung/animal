<?php
    class DangNhap{
        // var $user = null;
        // var $pass = null;

        public function __construct() {}

        public function logAdmin($user, $pass)
        {
            $db = new connect();
            $select = "select * from admin where user='$user' and password='$pass'";
            $result = $db->getList($select);
            $set = $result->fetch(); //$set[admin, 123465]
            return $set;
        }

        public function changePass($pass)
        {
            $db = new connect();
            $query = "update admin set password='$pass'";
            $db->exec($query);
        }

        public function getPass()
        {
            $db = new connect();
            $select="select password from admin";
            $result = $db->getInstance($select);
            return $result[0];
        }

        public function role()
        {
            $db = new connect();
            $select="select role from admin";
            $result = $db->getInstance($select);
            return $result[0];
        }
    }

?>