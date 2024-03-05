<?php
    class ThanhVien{


        public function __construct() {}


        public function getListThanhVien()
        {
            $select = "select * from admin";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }

        public function deleteThanhVienID($id)
        {
            $db = new connect();
            $query = "delete from admin where admin.user = '$id'";
            $db->exec($query);
        }

        public function getThanhVienId($id)
        {
            $select = "select * from admin where user='$id'";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result;
        }

        function updatetv($id,$password,$role)
        {
            $db=new connect();
            $query="update admin 
            set password='$password',
            role='$role'
            where user='$id'";
            $db->exec($query);
        }

        function inserttv($user,$password,$role)
        {
            $db=new connect();
            $query="insert into admin(user,password,role)
            values ('$user','$password','$role')";
            $db->exec($query);
        }

        
    }
?>  