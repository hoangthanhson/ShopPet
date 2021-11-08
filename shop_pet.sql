-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 09:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_admin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_admin`, `ho_ten`, `mat_khau`, `email`) VALUES
('60136746', 'Hoàng Thanh Sơn', '60136746', 'sonht.60cntt@ntu.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `ma_gio_hang` int(20) NOT NULL,
  `ma_thu_cung` int(20) NOT NULL,
  `ma_kh` int(20) NOT NULL,
  `ten_thu_cung` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(20) NOT NULL,
  `don_gia` int(20) NOT NULL,
  `tong_tien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ho_kh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_kh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_kh`, `ten_kh`, `email`, `dia_chi`, `sdt`, `mat_khau`) VALUES
(1, 'Hoàng', 'Sơn', 'son@gmail.com', 'Cam lâm, khánh hòa', '0358405987', '123456789'),
(2, 'Hoàng', 'Sang', 'sang@gmail.com', 'Cam Lâm, Khánh Hòa', '0936385632', '123456789'),
(3, 'Lê', 'Trường', 'truong@gmail.com', 'tp Nha Trang, Khánh Hòa', '0865478294', '123456789'),
(4, 'Nguyễn', 'Tùng', 'tung@gmail.com', 'tp Nha Trang, Khánh Hòa', '0864367897', '123456789'),
(5, 'Huỳnh', 'Trọng', 'trong@gmail.com', 'Cam Lâm, Khánh Hòa', '0986435678', '123456789'),
(6, 'Nguyễn', 'Tài', 'tai@gmail.com', 'Vạn Giả, Khánh Hòa', '0986456789', '123456789'),
(13, 'Lê', 'Anh', 'anh@gmail.com', 'Cam Lâm, Khánh Hòa', '098646765', '123456789'),
(18, 'Sơn', 'Hoàng', 'son1@gmail.com', 'Cam Lâm, Khánh Hòa', '02342746', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `loai_thu_cung`
--

CREATE TABLE `loai_thu_cung` (
  `ma_loai` int(20) NOT NULL,
  `ten_loai` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai_thu_cung`
--

INSERT INTO `loai_thu_cung` (`ma_loai`, `ten_loai`) VALUES
(1, 'Chó'),
(2, 'Mèo'),
(3, 'Cá'),
(4, 'Chim');

-- --------------------------------------------------------

--
-- Table structure for table `thu_cung`
--

CREATE TABLE `thu_cung` (
  `ten_thu_cung` varchar(50) DEFAULT NULL,
  `hinh_anh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong` int(20) DEFAULT NULL,
  `don_gia` int(20) DEFAULT NULL,
  `loai_thu_cung` int(20) DEFAULT NULL,
  `ma_thu_cung` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thu_cung`
--

INSERT INTO `thu_cung` (`ten_thu_cung`, `hinh_anh`, `mo_ta`, `so_luong`, `don_gia`, `loai_thu_cung`, `ma_thu_cung`) VALUES
('Husky', 'husky.jpg', 'Husky sở hữu một thân hình thuôn dài, đôi chân chúng gân guốc, to khỏe và rất săn chắc. Chó Husky có chiều cao từ 53-58cm đối với con đực còn con cái cao từ 51-56cm, đây là chiều cao khiêm tốn nhất trong những giống chó kéo xe. Cân nặng con đực thường rơi vào khoảng 20-27kg, con cái nặng khoảng 16-23kg.', 20, 4000000, 1, 1),
('Alaska', 'alaska.jpg', 'Ngoại hình của chó Alaska vẫn giữ được những nét của tổ tiên loài sói tuyết: to lớn, dũng mãnh. Chiều cao, cân nặng trung bình của loài chó này rơi vào khoảng 65 đến 70cm và 45 đến 50kg. Đối với những Alaska Giant có thể cao tới 1m và nặng 80kg. Bộ lông của giống chó Alaska có 2 lớp để thích nghi với khí hậu khắc nghiệt vùng cực bắc nước Mỹ. Lớp lông phía trong dày, lớp lông phía ngoài dài, bông và giúp chống thấm nước vào lớp lông phía trong. Chó Alaska sở hữu nhiều màu lông đa dạng như: Trắng,', 15, 4000000, 1, 2),
('Ngao Tây Tạng', 'ngao.jpg', 'Chó ngao Tây Tạng hay còn gọi là Ngao Tạng, tên tiếng Anh là Tibetan Mastiff, là một giống chó Ngao được người Tây Tạng nuôi và huấn luyện để bảo vệ gia súc và bảo vệ cuộc sống của những người dân bản địa trên vùng núi Himalaya khỏi những con thú hoang như chó sói, hổ, gấu và để canh gác các tu viện ở Tây Tạng.', 20, 6000000, 1, 3),
('Pug', 'pug.jpg', 'Pug, hay thường được gọi là chó mặt xệ, là giống chó thuộc nhóm chó cảnh có nguồn gốc từ Trung Quốc, chúng có một khuôn mặt nhăn, mõm ngắn, và đuôi xoăn. Giống chó này có bộ lông mịn, bóng, có nhiều màu sắc nhưng phổ biến nhất là màu đen và nâu vàng. Cơ thể của Pug nhỏ gọn hình vuông với các cơ bắp rất phát triển.', 20, 2000000, 1, 4),
('Corgi', 'corgi.jpg', 'Corgi chân ngắn có đôi tai hình tam giác, dựng thẳng. Tai và mặt của các bé có tỷ lệ khá cân đối. Mõm của Corgi dài và nhọn, mắt chúng to tròn, miệng và khuôn hàm nhỏ nhưng cực kì sắc nhọn. Nhìn tổng thể, khuôn mặt của Corgi trông giống loài cáo nên chúng còn được gọi là Foxy Dog.', 25, 3000000, 1, 5),
('Poodle', 'poodle.jpg', 'Chó Poodle là một giống chó ngoại nhập, tổ tiên của nó được phát hiện lần đầu tiên ở Tây Âu ít nhất là 400 năm trước, cụ thể tại một số nước như: Đức, Pháp, Anh,… Ban đầu chúng được coi là giống chó săn thủy cầm, phổ biến nhất là săn vịt, ngoài ra còn dùng để đánh hơi chim nước và nấm cục trong rừng.', 15, 2000000, 1, 6),
('Abyssinian', 'abyssinian.jpg', 'Giống Mèo Abyssinian hay được gọi là mèo Aby vượt trội trong việc học các thủ thuật và chúng thậm chí còn giỏi hơn trong việc huấn luyện mọi người làm những gì chúng muốn. Mèo Abyssinians có thể sống từ 15 tuổi trở lên. Nhờ bản tính ham học hỏi, có tính xã hội cao, chúng có thể được dạy để đi bộ bằng dây xích. Mèo Aby được lai tạo ở Mỹ lần đầu tiên vào năm 1935.', 17, 10000000, 2, 7),
('Bali', 'bali.jpg', 'Giống mèo Bali có tên tiếng anh Balinese. Mèo Bali trông giống như một con Xiêm dài và có các màu sắc tương tự như màu Xiêm: hải cẩu, sô cô la, xanh lam và hoa cà. Mèo Bali rất năng động và có giọng hát. chúng muốn tham gia vào mọi thứ đang diễn ra trong nhà. Giữ một con mèo Bali trong nhà để bảo vệ nó khỏi ô tô, các bệnh lây lan bởi những con mèo khác và các cuộc tấn công từ các động vật khác. Mèo Bali là một con mèo hay nói chuyện; chúng sẽ nói chuyện với bạn nếu bạn để chúng.', 15, 9000000, 2, 8),
('Bengal', 'bengal.jpg', 'Bộ lông tuyệt đẹp của mèo Bengal có nhiều màu nền, từ vàng, gỉ, nâu và cam cho đến cát, trắng và ngà. Các đốm của mèo bengal cũng khác nhau về màu sắc, từ gỉ sắt hoặc ca cao và nâu sô cô la đến than hoặc đen. Một số bộ lông của mèo Bengal có các đốm hoặc hoa hồng nổi bật được tạo thành từ nhiều hơn một màu, thường là màu phụ tạo thành đường viền tối cho điểm. Áo khoác bengal cũng có họa tiết cẩm thạch: một hoặc nhiều màu xen kẽ vào màu nền. Mặc dù thường thấy nhất ở kiểu tabby đốm nâu, chúng cũn', 10, 6000000, 2, 9),
('Birman', 'birman.jpg', 'Giống mèo này lần đầu tiên được nhập khẩu vào Hoa Kỳ vào những năm 1960. Mèo Birman phải có bốn bàn chân trắng, với kiểu được mô tả là “găng tay và dây buộc”. Mèo Birman có một chiếc mũi La Mã đặc biệt. Đây là những con mèo thông minh phát triển mạnh trong trò chơi tương tác, chẳng hạn như đồ chơi xếp hình. Các chú mèo Birman liên tục lọt vào danh sách mười người hàng đầu ở Hoa Kỳ.', 5, 10000000, 2, 10),
('Bombay', 'bombay.jpg', 'Khi bạn nhìn vào một con mèo Bombay, bạn sẽ thấy một con mèo cơ bắp, kích thước trung bình. Nếu bạn đến đón chúng, bạn sẽ thấy rằng chúng đẹp hơn vẻ ngoài của chúng. Để duy trì kiểu cơ thể và kết cấu bộ lông của mèo Bombay, các nhà lai tạo đôi khi có thể lai với mèo Miến Điện, một trong những giống bố mẹ của mèo Bombay. Việc lai xa Mỹ hoặc lai ngắn trong nước hiếm khi được thực hiện vì kiểu cơ thể không giống nhau.', 2, 15000000, 2, 11),
('Rồng', 'rong.jpg', 'Tên khoa học: Osteoglossidae. Loại sản phẩm:Cá nước ngọt. Đồng thời chú ý chuẩn bị các loại thức ăn như côn trùng, thạch sùng, ếch hay các loại cá nhỏ lọc nước và bổ sung nước mỗi khi cần thiết để gia tăng tuổi thọ cho chúng. Xuất xứ: châu Á và Nam Mỹ. Giá thị trường của cá rồng khá cao khoảng 5-7 triệu đồng/1 con nhỏ và 15-20 triệu đồng/ 1 con trưởng thành, tương ứng với các loại cá rồng khác nhau lại có các mức giá khác nhau.', 50, 7000000, 3, 12),
('Dĩa', 'dia.jpg', 'Tên khoa học: Symphysodon. Loại sản phẩm:Cá nước ngọt. Nếu nuôi một bể cá đĩa, bạn nên cho chúng ăn trùn đỏ, trùn chỉ, bo bo hay loăng quăng. \r\n Xuất xứ: nhiệt đới ở Nam Mỹ. Giá thị trường dao động từ 300.000-2.300.000 đồng/ con có chiều dài từ 10-15 cm, tùy từng loại cá, màu sắc và hoa văn khác nhau.', 30, 1500000, 3, 13),
('Koi Nhật Bản', 'koi.jpg', 'Tên khoa học: Nishikigoi. Loại sản phẩm:Cá nước ngọt. Nếu nuôi một bể cá Koi, bạn nên cho chúng ăn thức ăn được chế biến riêng biệt. Xuất xứ: Nhật Bản', 50, 500000, 3, 14),
('La hán', 'lahan.jpg', 'Tên khoa học:Hippocampus comes. Loại sản phẩm: Cá nước ngọt. Xuất xứ: nhiệt đới ở Nam Mỹ Cá La Hán có tên tiếng Anh là Flower Horn là một trong những loài cá cảnh nhiệt đới được các nghệ nhân lai tạo từ cá hồng két và cá rô phi.Thức ăn chủ yếu của chúng thường là tôm tép, ốc, cá con, gan và thịt băm nhuyễn,… Cá La Hán sinh sản dễ dàng và được cho nhân tạo trong hồ kính. Giá thị trường cá la hán nhỏ dao động từ 20.000-30.000 đồng/ con, cá nhú đầu: 100.000 đồng/ con, cá đầu to hơn: 200.000-300.000', 20, 200000, 3, 15),
('Trạng Nguyên', 'trangnguyen.jpg', 'Tên khoa học: Synchiropus splendidus. Loại sản phẩm: cá nước mặn. Xuất xứ: sống gần các đảo san hô khu vực Thái Bình Dương. Thức ăn thường là các loại như: tôm ngâm nước muối, giun ống,… Chúng thường bắt cặp bạn khá tốt, khả năng bảo vệ trứng cao. Giá thị trường khoảng 400.000 đồng/ con dài khoảng 15 cm.', 25, 400000, 3, 16),
('Sơn Ca', 'sonca.jpg', 'Là một trong các loại chim sâu ở Việt Nam nên chim Sơn Ca có thân hình nhỏ bé, chỉ to ngang một nắm tay của người lớn. Chim thường có màu lông đa sắc, vàng ở trên đầu, nâu, đen ở thân trên và có màu trắng ở phần bụng.Tùy vào đặc điểm khí hậu của mỗi vùng miền mà lông của chim Sơn Ca sẽ có sự khác biệt đôi chút. Nếu như ở Huế lông chim có màu vàng hơn bình thường và có hình vảy cả trên trán thì Sơn Ca Đà Nẵng lại có vân khía ở trán.', 25, 200000, 4, 17),
('Họa Mi', 'hoami.jpg', 'Có tên khoa học là Garrulux Canorus, chim Họa Mi thường sinh sống ở các khu rừng, vườn cây, công viên,… Loài chim cảnh Việt Nam này khá nhỏ bé, chỉ ngang hoặc bé hơn chim Sơn Ca nhưng bù lại chúng là một trong các loại chim hót hay nhất. Bởi vậy mà người ta thường ví các ca sĩ có giọng hát cao là những chú chim họa mi.Tuy nhiên không phải con nào cũng hót hay, một số con có giọng hơi khàn, thấp sẽ không được đánh giá cao. Chim Họa Mi chuẩn phải có giọng cao, vang và hót được nhiều loại âm thanh.', 30, 250000, 4, 18),
('Chào Mào', 'chaomao.jpg', 'Chào Mào cũng là một trong các loại chim cảnh thường nuôi trong nhà được nhiều người yêu thích. Loài chim này sống theo bầy đàn, ăn các loại côn trung nhỏ và hoa quả. Khi làm tổ chúng sẽ quấn các sợi rơm, cảnh cây nhỏ thành hình cái cốc nhỏ.Đặc điểm nhận dạng dễ nhất của loài chim cảnh Việt Nam này là phần mào hình tam giác nhô hẳn lên trên đầu. Có lẽ chính vì vậy mà cái tên Chào Mào ra đời. Lông chim có màu nâu nhạt, đậm nhất ở phần đầu và mào.\r\n\r\n', 50, 300000, 4, 19),
('Chích Chòe', 'chichchoe.jpg', 'Là một trong các loài chim cảnh nhỏ được nuôi phổ biến tại Việt Nam, chim Chích Chòe có thân hình nhỏ nhắn cùng đôi chân nhảy thoăn thoắt trên các cảnh cây. Loài chim này thường hót vào lúc giữa trưa hoặc tối muộn nên thường được nuôi ở các nơi công cộng như quán cafe, vườn chim,…Ở Việt Nam có hai loài Chích Chòe phổ biến là Chích Chòe Than và Chích Chòe Lửa. Hai loài nhỏ này khá giống nhau nhưng vẫn có một vài điểm khác biệt nhỏ.', 15, 300000, 4, 20),
('Vẹt', 'vet.jpg', 'Đây là loài chim cảnh có đa dạng các loài, chi trên thế giới và được ưa chuộng khi nuôi chim cảnh tại nhà. Thức ăn của Vẹt khá đơn giản, thường là các loại hạt, hoa quả, thực vật,… Song vẫn có một số ít các loài Vẹt có thể ăn thịt sống và xác thối.Vẹt được coi là một trong các loại chim cảnh đẹp và thông minh, có thể nói nhại tiếng người. Lông Vẹt rất rực rỡ và đa sắc màu, có thể là đỏ, vàng, xanh,… Khi nuôi loài chim cảnh Việt Nam này bạn sẽ khá vất vả do chúng vẫn còn tính hoang dã, bừa bộn, k', 50, 100000, 4, 21),
('Vàng Anh', 'vanganh.jpeg', 'Chim Vàng Anh luôn nổi bật với màu lông vàng rực. Chim mái và chim trống sẽ có ánh màu khác nhau đôi chút. Chim Vàng Anh cũng thuộc các loại chim sâu ở Việt Nam nên thường được nuôi để diệt sâu và trang trí.Khi nuôi bạn nên chú ý thức ăn cho Vàng An để tránh chim không thân thiện với chủ. Loài chim cảnh này thường lảng tránh và tỏ ra nhút nhát nếu không được cho ăn ngon.', 15, 200000, 4, 22),
('Sáo', 'sao.jpg', 'Chim Sáo là loài chim thông minh và có thể bắt chước tiếng người. Tuy nhiên các loại chim Sáo ở Việt Nam thường khá hung dữ, bởi vậy để thuần được một con chim Sáo phải là người yêu chim, có đam mê và lòng kiên nhẫn.Thuộc các loại chim cảnh đẹp nên không khó để thấy loài chim này trong nhà người nuôi chim tại Việt Nam. Thức ăn dành cho chim Sáo cũng khá dễ tìm như sâu bọ, cào cào, cơm,… Nếu bạn nuôi trong lồng thì nên cho ăn chuối, lạc trộn trứng, cơm,… thì sẽ hợp lý.', 10, 200000, 4, 23),
('Khướu', 'khongtuoc.jpg', 'Loài chim cảnh Việt Nam này hay sống theo đàn nhỏ ở các vùng núi, làm tổ trong các bụi cây, có mái che hoặc hình cái chén. Ở Việt Nam phổ biến hai loại Khướu là Khướu Mun và Khướu Ô.Khi nuôi chim Khướu bạn không nên nuôi trong lồng sắt vì nếu chim mổ, cắn phải hoặc chạm vào dẫn đến bị thương thì rất khó lành.', 20, 400000, 1, 24),
('Khổng Tước', 'khongtuoc.jpg', 'Chim màu sắc sặc sở', 10, 2500000, 4, 53);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_admin`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`ma_gio_hang`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_thu_cung` (`ma_thu_cung`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai_thu_cung`
--
ALTER TABLE `loai_thu_cung`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `thu_cung`
--
ALTER TABLE `thu_cung`
  ADD PRIMARY KEY (`ma_thu_cung`),
  ADD KEY `loai_thu_cung` (`loai_thu_cung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `ma_gio_hang` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `loai_thu_cung`
--
ALTER TABLE `loai_thu_cung`
  MODIFY `ma_loai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thu_cung`
--
ALTER TABLE `thu_cung`
  MODIFY `ma_thu_cung` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `gio_hang_ibfk_3` FOREIGN KEY (`ma_thu_cung`) REFERENCES `thu_cung` (`ma_thu_cung`);

--
-- Constraints for table `thu_cung`
--
ALTER TABLE `thu_cung`
  ADD CONSTRAINT `thu_cung_ibfk_1` FOREIGN KEY (`loai_thu_cung`) REFERENCES `loai_thu_cung` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
