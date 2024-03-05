<?php
    class hanghoa
    {
        public function __construct()
        {

        }

        public function getHangHoaNew()
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa ORDER BY soluotxem DESC LIMIT 8;";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaKM()
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE giamgia > 0;";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaALL()
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa;";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaALLNOSALE()
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE giamgia = 0;";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaALLSALE()
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE giamgia > 0;";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaNhom($nhom)
        {
            $db = new connect();
            $select = "SELECT hinh FROM hanghoa WHERE nhom = $nhom;";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaId($id)
        {
            $db = new connect();
            $select = "SELECT * FROM hanghoa WHERE mahh = $id;";
            $result = $db->getInstance($select);
            return $result;
        }

        public function getcountHH()
        {
            $db = new connect();
            $select = 'select count(*) from hanghoa';
            $result = $db->getInstance($select);
            return $result[0];
        }

        public function getListHangHoaAllPage($start, $limit)
        {
            $db = new connect();
            $select = "select * from hanghoa limit ".$start.",".$limit;
            // echo $select;
            $result = $db->getList($select);
            return $result;
        }
        
        function getinfSearch($tensp)
        {
            $db=new connect();
            $select="select * from hanghoa where nhom like '%$tensp%'";
            $result=$db->getList($select);
            return $result;
        }
        
        function View($id)
        {
            $db=new connect();
            $query = "update hanghoa set soluotxem = soluotxem + 1 where mahh=$id";
            $db->exec($query);
        }

    }
?>