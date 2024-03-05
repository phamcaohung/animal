-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 06:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(10) NOT NULL,
  `mahh` int(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `mahd` int(10) NOT NULL,
  `mahh` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `thanhtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(10) NOT NULL,
  `tenhh` varchar(50) NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `nhom` varchar(10) NOT NULL,
  `maloai` int(10) NOT NULL,
  `soluotxem` int(10) NOT NULL,
  `mota` text NOT NULL,
  `soluongton` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `nhom`, `maloai`, `soluotxem`, `mota`, `soluongton`) VALUES
(1, 'cá Nemo', 150000, 0, 'ca1.jpg', 'cá', 1, 20, 'Cá hề có màu da cam tuyệt đẹp xen kẽ với những dãy màu trắng được vạch ra bằng màu đen trên cơ thể tạo ra những nét uyển chuyển nhẹ nhàng.\r\nCá hề là một bổ sung tuyệt vời cho hầu như bất kỳ hệ thống hồ cá nước mặn nào. Thực tế rằng mỗi loài cá hề được nuôi sẽ giúp bảo vệ các môi trường rạn san hô trong hồ cá của bạn.', 50),
(2, 'Cá xiêm đuôi xòe', 70000, 40000, 'ca2.jpg', 'cá', 1, 30, 'là loài cá được thuần dưỡng lâu đời ở Thái Lan sau đó được phân bố ra nhiều quốc gia khác và được lai tạo ra nhiều chủng loại. Đây là dòng cá phổ biến trên thị trường thuộc họ Osphronemidae, có màu sắc sặc sỡ và bộ vây dày hơn, đa dạng kiểu vây hơn dòng hoang dã trước kia. Cá có kích thước nhỏ, cá trưởng thành dài từ 6 – 8 cm, tùy vào chủng loại mà có kích thước khác nhau.', 50),
(3, 'Cá Lóc Vây Xanh Cầu Vồng', 200000, 0, 'ca3.jpg', 'cá', 1, 40, 'Đây cũng là một dòng cá lóc vây xanh tuyệt đẹp, giá bình dân, dễ mua dễ chơi, rất phù hợp cho người mới bắt đầu nuôi Lóc cảnh. Đây là một loài cá có sức sống mãnh liệt có nguồn gốc từ sông Brahmaputra, Ấn Độ, chúng có thể sống 4 ngày trên cạn và rạch men theo các vùng đất ẩm lên tới 400m. Kích thước tối đa của chúng khi trưởng thành là từ 18-20cm, cá cái thường lớn hơn cá đực, trên thân cũng nhiều đốm đỏ hơn, cá đực thì có bộ vây dài và óng ánh màu sắc hơn cá cái. Chúng cũng ăn rất tạp, hầu như bạn có thể cho ăn rất nhiều loại thức ăn khác nhau dành cho cá săn mồi có bán trên thị trường hiện nay.', 50),
(4, 'chó alaska', 20000000, 2000000, 'cho2.jpg', 'chó', 2, 100, 'Chó Alaska được nhiều người yêu thích và ưa chuộng bởi vẻ ngoài oai hùng nhưng không kém phần dễ thương. Đây được xem là giống chó kế thừa bộ gen của dòng chó sói tuyết hoang dã được thuần hóa trở thành một giống chó gần gũi được nhiều người yêu thích', 50),
(5, 'chó Husky', 5000000, 200000, 'cho1.jpg', 'chó', 2, 80, 'Chó Husky là loài có xuất xứ từ khu vực Đông Bắc Siberia (Nga) tầm 3000 năm trước và được dạy để giúp con người di chuyển, vận chuyển hàng hóa. Chúng thường cao tầm 50 – 60cm, nặng khoảng 16 – 27kg, mắt cũng tựa hạt hạnh nhân, hơi xếch lên và có nhiều màu đa dạng', 50),
(6, 'Chó Chihuahua', 1500000, 0, 'cho4.jpg', 'chó', 2, 50, 'Chó Chihuahua vốn “xuất thân” từ Mexico nhưng lại được mọi người biết đến nhờ Trung Quốc. Chúng có vóc dáng nhỏ nhắn, cao khoảng 16 – 20cm, nặng tầm 1,5 – 3kg với cái đầu nhỏ, tai dựng đứng, mắt to tròn và màu lông khá đa dạng. Chihuahua khá thông minh, nhanh nhẹn, thích được chiều và rất trung thành với chủ.', 50),
(7, 'Ếch xanh mắt đỏ', 100000, 0, 'ech1.jpg', 'ếch', 3, 40, 'Chúng thường sống trong các khu rừng nhiệt đới ở Trung Mỹ và không hề gây độc hại gì tới con người\r\nĐặc biệt chúng có khả năng nhảy xa nhất trong họ hàng nhà Ếch\r\nThân hình có lớp da màu xanh giúp cho đôi mắt đỏ của ếch cây ngụy trang thành màu của cây cỏ, che mắt côn trùng và những động vật săn mồi ăn thịt\r\nẾch cây mắt đỏ là loài động vật ăn đêm\r\nChính vì vậy, loài vật này ban ngày nghỉ ngơi và mắt của chúng cũng nhắm lại nên rất ít khi con người có thể nhận ra chúng lẫn trong màu xanh của cỏ cây, hoa lá\r\nVì có màu xanh nên loài động vật này cũng được gọi là ếch cây', 50),
(8, 'ếch âm dương', 500000, 50000, 'ech2.jpg', 'ếch', 3, 70, 'Một loài ếch mới có tên khoa học là Leptobrachium leucops đã được phát hiện ở khu rừng trên cao nguyên Langbian, thuộc địa phận 2 tỉnh Lâm Đồng và Khánh Hòa của Việt Nam.\r\nTạp chí Times đã gọi loài lưỡng cư này là “ếch âm dương” vì đôi mắt kỳ lạ có một nửa màu trắng, một nửa màu đen, giống như vòng tròn âm dương của chúng.', 50),
(9, 'Ếch phi tiêu', 500000, 0, 'ech3.jpg', 'ếch', 3, 100, 'Loài ếch phi tiêu ѕinh ѕống chủ уếu ở các khu rừng ᴠùng Trung – Nam Mỹ. Tùу ᴠào môi trường ѕống (chủ уếu là các khu rừng trải dài từ Coѕta Rica đến Braᴢil) mà loài ếch nàу có màu ѕắc khác nhau.\r\nLoại ếch độc nàу có ѕự chuуển ѕắc từ màu ᴠàng, đỏ dâu đến хanh ѕapphire, đen haу có ѕự pha trộn giữa các màu khác nhau. Nhờ những màu ѕắc khác lạ đó, chúng cảnh báo những kẻ ѕăn mồi rằng ѕẽ nguу hiểm nếu đụng đến nó.', 50),
(10, 'Tắc Kè', 100000, 30000, 'tacke1.jpg', 'tắc kè', 4, 30, ' là một loài tắc kè có kích thước nhỏ tầm khoảng 25 – 30cm rất thích hợp để nuôi làm cảnh. Chúng được tìm thấy ở vùng Madagascar, màu sắc của chúng thường là màu xanh lá cây, màu vàng và một chú màu xanh lam quanh mắt và bàn chân.\r\nTuổi thọ của loài tắc kè này khá ngắn chúng chỉ sống được từ 2 – 3 năm, nhiệt độ môi trường nuôi khoảng 23 – 25 độ C và độ ẩm 65%.', 50),
(11, 'Tắc kè da báo', 400000, 40000, 'tacke2.jpg', 'tắc kè', 4, 90, 'Tắc kè da báo hay được gọi một cách trìu mến là leos, nói chung là loài dễ chăm sóc. Chúng không yêu cầu nhiều bảo dưỡng lồng, và chúng rất cứng rắn và dễ tha thứ nếu môi trường của chúng không hoàn hảo.\r\nTắc kè da báo là loài tắc kè sống về đêm, sống trên mặt đất, thường ngoan ngoãn và dễ thuần hóa. Chúng không có lớp đệm ngón chân dính như các loài tắc kè khác nên chúng không leo tường, nhưng không giống như các loài tắc kè khác, chúng có mí mắt.', 50),
(12, 'Tắc Kè Tokay', 80000, 0, 'tacke3.jpg', 'tắc kè', 4, 50, 'Mắt màu nâu hoặc vàng cam, mí mắt có màng trong suốt, cặp mắt lập thể, con ngươi cử động dọc, có thể xoay độc lập, nhìn theo 2 hướng cùng lúc mà không cần di chuyển phần đầu. Lưng màu xanh xám nhạt điểm đốm vàng hoặc đỏ sáng, nhiều nốt sần; con đực thường có màu sắc sặc sỡ hơn con cái; bụng màu trắng đục hoặc xám có pha nhiều chấm vàng nhỏ.', 50),
(13, 'Kỳ Nhông cát', 280000, 0, 'kinhong1.jpg', 'kỳ nhông', 5, 30, 'Dông cát nhiều nơi còn gọi là con Dông, một loài thích đào hang và sống ở dưới đất. Loài này có kích thước khá bé, một con trưởng thành có thể đạt chiều dài từ 10 – 20cm tính cả chiều dài đuôi, nặng từ 150 – 300g, con cái thường nhỏ hơn con đực.\r\nLoài này có thể dễ dàng tìm thấy ở các vùng đất cát thuộc miền Trung Việt Nam, chúng thường bò ra khỏi hang vào lúc có nhiều nắng để làm ấm cơ thể và tìm kiếm bạn tình. Loài này hiện nay có giá trị kinh tế cáo, bởi thịt của chúng rất thơm ngon, thế nên được nhiều người nuôi theo hình thức kinh doanh.', 50),
(14, 'Kỳ Nhông xanh', 300000, 0, 'kinhong2.jpg', 'kỳ nhông', 5, 50, 'Loài này nổi tiếng là động vật của vùng Nam Mỹ, ngoài ra chúng còn được biết đến với cái tên khá hầm hố đó chính là Rồng Nam Mỹ. Giống như cái tên của chúng, thì toàn bộ cơ thể của chúng được bao phủ với màu xanh rất nổi bật. Kèm theo đó, chúng có một dãi gai rất nhọn và dài ở phần sống lưng trông rất hầm hố và nổi bật. Loài này rất to lớp, con trưởng thành có thể nặng lên tới 10kg và dài từ 150 – 200cm.', 50),
(15, 'Mèo Anh lông ngắn', 2500000, 200000, 'meo1.jpg', 'mèo', 6, 100, 'Đặc điểm của mèo Anh lông ngắn là thân hình cơ bắp, khung xương chắc chắn, khỏe mạnh với chiếc đầu to tròn, má rộng, mũi miệng ngắn, mắt to màu đồng, xanh lá cây hoặc đen. Nổi bật nhất là bộ lông tuy ngắn nhưng rất dày và không xù, giúp cơ thể giữ ấm. Bên cạnh một số màu như đen, xám, xanh dương, vàng thì lông màu xám là phổ biến nhất.', 50),
(16, 'Mèo mướp', 800000, 0, 'meo2.jpg', 'mèo', 6, 90, 'Đây là giống mèo ta quen thuộc ở rất nhiều gia đình Việt Nam. Nếu bạn muốn nuôi một chú mèo thông minh, nghịch ngợm và tinh ranh thì mèo mướp là lựa chọn hoàn hảo nhất.\r\nĐặc điểm nổi bật của mèo mướp là thân hình nhỏ nhắn, khuôn mặt nhỏ, tai vểnh cao và đuôi dài. Giống mèo này có bộ lông ngắn, sọc vằn với đường vân sắc màu, trong đó màu đen là tông chủ đạo. Đặc biệt với màu lông trên trán hiện chữ M là đặc điểm nhận dạng của mèo mướp.', 50),
(17, 'mèo da báo', 3000000, 0, 'meo3.jpg', 'mèo', 6, 70, 'Mèo da báo là một giống mèo độc đáo mới du nhập về nước ta chưa lâu. Những chú mèo này gây ấn tượng mạnh mẽ và thu hút sự chú ý của mọi người ngay từ ánh nhìn đầu tiên bởi ngoại hình trông giống như một chú báo thu nhỏ của mình. Với bộ lông có các họa tiết và màu sắc sao chép gần như nguyên bản của một chú báo trong tự nhiên.\r\nMèo da báo có tên phổ biến hơn là mèo Bengal. Ngoài ra, chúng cũng có một số tên gọi khác tại Việt Nam như mèo báo, mèo vằn hổ, mèo lông báo,…', 50),
(18, 'Nhện cảnh Lasiodora parahybana', 600000, 0, 'nhen1.jpg', 'nhện', 7, 30, 'Nhện Brazilian Fire Rad Tarantula thuộc giống nhện đất. Chúng được nhận định là rất hay phòng thủ. Thậm chí người nuôi chúng cũng dễ dàng bị đe dọa khi có sự xáo trộn xung quanh, cho dù đó là một điều nhỏ nhoi. Ngay khi chúng phát hiện ra sự thay đổi, chúng sẽ bắn lông vào kẻ thù ( Nếu bạn vô tình dính phải sẽ rất ngứa). Do tính cách của chúng khá e dè nên người nuôi nhện Brazilian Fire Red Tarantula rất dễ bị tấn công, nhưng cũng may là chúng di chuyển khá chậm.', 50),
(19, 'Nhện Tarantula màu xanh coban', 1000000, 0, 'nhen2.jpg', 'nhện', 7, 60, 'Đây được xem là một trong những giống nhện Tarantula đẹp nhất. Lưng chúng có màu xanh lá, còn chân, bụng và phần hông lại có màu cam nổi bật. Tuy là loài nhện đất, nhưng nhện cảnh Greenbottle Blue Tarantula lại sống như một loài nhện cây bình thường.', 50),
(20, 'Rắn sữa', 80000, 0, 'ran1.jpg', 'rắn', 8, 30, 'Răn sữa là loài rắn cảnh bắt nguồn từ Canada và Bắc Mỹ chúng còn có tên gọi là milk snake ( Lampropeltis triangulum ). Rắn sữa milk snake là loại rắn cảnh không độc có màu sắc đẹp, chúng có 2 phân loài khác nhau và chia thành 3 mảng màu là đỏ đen, cam đen, vàng đen.', 50),
(21, 'Rắn sữa Honduran', 70000, 0, 'ran2.jpg', 'rắn', 8, 30, 'Rắn sữa Honduran là dòng rắn cảnh không độc sinh sống chủ yếu tại 2 quốc gia Honduras và Nicaragua ở Trung Mỹ. Chúng là loài rắn có màu sắc sặc sỡ, không có nọc độc và hiện được ưu chuộng nuôi tại nhiều quốc gia trên thế giới như một dòng thú cưng độc đáo.\r\nNhìn sơ qua thi rắn Honduran có màu sắc có vẻ giống những loài rắn độc nhưng thực tế chúng có màu sắc như vậy chỉ để đánh lừa những kẻ thù có ý định tấn công chúng.', 50),
(22, 'Rắn vảy gai', 200000, 0, 'ran3.jpg', 'rắn', 8, 50, 'Rắn Gopher Snake có lẽ là loài rắn mà ít người nhận ra nó nhân trong một vài lần tiếp xúc bởi chúng có khá nhiều hình thái khác nhau nên bạn có thể tìm mua một chú rắn Gopher Snake có màu sắc và hình dáng mình thích tại một shop bán rắn cảnh nào đó. Giá thành của loài rắn này cũng không hề cao khoảng 1tr 1 bé. Tuổi thọ của loài rắn này khoảng 15 năm. Kích thước có thể đạt tới 150cm.', 50),
(23, 'Trăn cây xanh lam', 1500000, 0, 'tran1.jpg', 'trăn', 9, 60, 'Vẻ đẹp kỳ bí của trăn cây có màu xanh lam khiến nhiều người không tiếc bỏ tiền để sở hữu chúng, dù với cái giá \"trên trời\" đủ để tậu cả một căn nhà.', 50),
(24, 'Trăn cây xanh lục', 1300000, 0, 'tran2.jpg', 'trăn', 9, 30, 'Vẻ đẹp kỳ bí của trăn cây có màu xanh luc khiến nhiều người không tiếc bỏ tiền để sở hữu chúng, dù với cái giá \"trên trời\" đủ để tậu cả một căn nhà.', 50),
(25, 'Trăn bạch', 20000000, 0, 'tran3.jpg', 'trăn', 9, 100, 'Vẻ đẹp kỳ bí của trăn cây có màu xanh bạch khiến nhiều người không tiếc bỏ tiền để sở hữu chúng, dù với cái giá \"trên trời\" đủ để tậu cả một căn nhà.', 50);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(10) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `taikhoan` varchar(30) NOT NULL,
  `matkhau` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(30) NOT NULL,
  `idmenu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`mahd`,`mahh`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
