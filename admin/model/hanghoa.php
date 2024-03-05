<?php
    class HangHoa{
        // var $mahh = null;
        // var $tenhh = null;
        // var $dongia = 0;
        // var $giamgia = 0;
        // var $hinh = "";
        // var $maloai = null;
        // var $dacbiet = 0;
        // var $soluotxem = 0;
        // var $ngaylap = null;
        // var $mota = null;
        // var $sodt = 0;
        // var $mausac = null;
        // var $size = 0;

        public function __construct() {}


        public function getListHangHoa()
        {
            $select = "select * from hanghoa";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }

        public function deleteHangHoaID($id)
        {
            $db = new connect();
            $query = "delete from hanghoa where hanghoa.mahh = '$id'";
            $db->exec($query);
        }

        public function getHangHoaId($id)
        {
            $select = "select * from hanghoa where mahh='$id'";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result;
        }

        function updatesp($id,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$soluotxem,$soluongton)
        {
            $db=new connect();
            $query="update hanghoa 
            set tenhh='$tenhh',
            dongia=$dongia,
            giamgia=$giamgia,
            hinh='$hinh',
            nhom='$Nhom',
            maloai=$maloai,
            soluotxem=$soluotxem,
            soluongton=$soluongton
            where mahh='$id'";
            $db->exec($query);
        }

        function insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$mota,$soluotxem,$soluongton)
        {
            $db=new connect();
            $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,nhom,maloai,soluotxem,mota,soluongton)
            values (NULL,'$tenhh',$dongia,$giamgia,'$hinh','$Nhom',$maloai,$soluotxem,$mota,$soluongton)";
            $db->exec($query);
        }

        function getTenLoai()
        {
            $db=new connect();
            $select="select maloai,tenloai from loai";
            $result=$db->getList($select);
            return $result;
        }

        function getListThongKe_SL_mathang()
        {
            $db=new connect();
            $select="SELECT a.tenhh,sum(soluongmua) as soluongban from hanghoa a INNER join cthoadon b on a.mahh=b.mahh GROUP by a.tenhh";
            $result=$db->getList($select);
            return $result;
        }
    }
?>  