<?php
    class connect
    {

        var $db = null;
        
        public function __construct()
        {
            $dsn = 'mysql:host=localhost;dbname=qlbh';
            $user = 'root';
            $pass = '';
            try {
                $this->db = new PDO($dsn, $user, $pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); 
            } catch (\Throwable $th) {
                
                echo "that bai";
            }
        }

        public function getList($select)
        {
            $result = $this->db->query($select);
            return $result;
        }

        public function getInstance($select)
        {
            // query thuc thi select ma query thuoc ve phuong thuc cua PDO
            $result = $this->db->query($select);
            $result = $result->fetch();
            return $result;
        }

        public function exec($query)
        {
            $result = $this->db->exec($query);
            return $result;

        }
    }
?>