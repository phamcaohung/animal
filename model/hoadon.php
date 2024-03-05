<?php
    class hoadon
    {
        function __construct() {}

        function InsertOrder($makh)
        {
            $db = new connect();
            $date = new DateTime("now");
            $datecreate = $date->format("Y-m-d");
            $query = "insert into hoadon(mahd, makh, ngaydat, tongtien) values
            (NULL, $makh, '$datecreate' ,0)";
            $db->exec($query);
            $select = "select mahd from hoadon order by mahd desc limit 1";
            $int = $db->getInstance($select);
            return $int[0];
        }

        function InsertOrderDetail($mahd, $mahh, $soluong, $thanhtien)
        {
            $db = new connect();
            $query = "insert into cthoadon(mahd, mahh, soluongmua, thanhtien)
            values($mahd, $mahh, $soluong, $thanhtien)";
            $db->exec($query);
        }

        function updateOrderTotal($sohd, $tongtien)
        {
            $db = new connect();
            $query = "update hoadon set tongtien=$tongtien where mahd=$sohd";
            $db->exec($query);
        }

        function getOrder($sohdid)
        {
            $db = new connect();
            $select = "select b.mahd, a.tenkh, a.diachi, a.sodienthoai, b.ngaydat 
            from khachhang a INNER join hoadon b on a.makh=b.makh where b.mahd=$sohdid";
            $result = $db->getInstance($select);
            return $result;
        }

        function getOrderDetail($sohdid)
        {
            $db = new connect();
            $select = "select a.tenhh, a.dongia, a.giamgia, b.soluongmua, b.thanhtien 
            from hanghoa a INNER join cthoadon b on a.mahh=b.mahh where mahd=$sohdid";
            $result = $db->getList($select);
            return $result;
        }
    }
?>