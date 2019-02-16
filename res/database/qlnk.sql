-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 16, 2019 lúc 09:18 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cktk`
--

CREATE TABLE `cktk` (
  `id` int(11) NOT NULL,
  `socmnd` varchar(255) NOT NULL,
  `khaucu` varchar(255) NOT NULL,
  `khaumoi` varchar(255) NOT NULL,
  `lydo` varchar(255) NOT NULL,
  `loai` varchar(255) NOT NULL COMMENT 'Chuyển khẩu hoặc tách khẩu',
  `ngayth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cktk`
--

INSERT INTO `cktk` (`id`, `socmnd`, `khaucu`, `khaumoi`, `lydo`, `loai`, `ngayth`) VALUES
(3, '088868222', 'hk002', 'hk001', 'chuyển lại nhà cũ', 'Chuyển khẩu', '2019-02-16'),
(5, '088868333', 'hk001', 'hk003', 'Lấy vợ tách khẩu ra khỏi bố mẹ', 'Tách khẩu', '2019-02-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hokhau`
--

CREATE TABLE `hokhau` (
  `mahk` varchar(255) NOT NULL,
  `tench` varchar(255) NOT NULL,
  `dc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hokhau`
--

INSERT INTO `hokhau` (`mahk`, `tench`, `dc`) VALUES
('hk001', 'Nông Văn Long', 'Xã 1, Huyện 2, Tỉnh 3'),
('hk002', 'Hoàng Thị Lan', 'Xã 1, Huyện 2, Tỉnh 3'),
('hk003', 'Nguyễn Quang Huy', 'Thôn A, Xã B, Huyện C');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_hokhau`
--

CREATE TABLE `log_hokhau` (
  `id` int(11) NOT NULL,
  `mahk` varchar(255) NOT NULL,
  `tench` varchar(255) NOT NULL,
  `dc` varchar(255) NOT NULL,
  `lydo` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_nhankhau`
--

CREATE TABLE `log_nhankhau` (
  `id` int(11) NOT NULL,
  `socmnd` varchar(255) NOT NULL,
  `hvt` varchar(255) NOT NULL,
  `tenkhac` varchar(255) NOT NULL,
  `gt` tinyint(4) NOT NULL,
  `ns` date NOT NULL,
  `dt` varchar(255) NOT NULL,
  `tg` varchar(255) NOT NULL,
  `quequan` varchar(255) NOT NULL,
  `tdhocvan` varchar(255) NOT NULL,
  `nghenghiep` varchar(255) NOT NULL,
  `mahk` varchar(255) NOT NULL,
  `qhvchuho` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `lydo` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `log_nhankhau`
--

INSERT INTO `log_nhankhau` (`id`, `socmnd`, `hvt`, `tenkhac`, `gt`, `ns`, `dt`, `tg`, `quequan`, `tdhocvan`, `nghenghiep`, `mahk`, `qhvchuho`, `type`, `lydo`, `date`) VALUES
(1, '082255000', 'Hoàng Thị Lan', '', 1, '1991-02-02', 'Kinh', '', 'Tân Thịnh Thái Nguyên', '12/12', 'Tự do', 'hk002', 'Chủ hộ', 'Thêm', 'Được thêm bởi nv001 - Hoàng Văn Long', '2019-02-14 13:46:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhankhau`
--

CREATE TABLE `nhankhau` (
  `socmnd` varchar(255) NOT NULL,
  `hvt` varchar(255) NOT NULL,
  `tenkhac` varchar(255) DEFAULT NULL,
  `gt` tinyint(4) NOT NULL COMMENT '0 là nữ, 1 là nam, 2 là k xác định',
  `ns` date NOT NULL,
  `dt` varchar(255) NOT NULL,
  `tg` varchar(255) NOT NULL,
  `quequan` varchar(255) NOT NULL,
  `tdhocvan` varchar(255) NOT NULL,
  `nghenghiep` varchar(255) NOT NULL,
  `mavp` int(11) DEFAULT NULL,
  `mahk` varchar(255) NOT NULL,
  `qhvchuho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhankhau`
--

INSERT INTO `nhankhau` (`socmnd`, `hvt`, `tenkhac`, `gt`, `ns`, `dt`, `tg`, `quequan`, `tdhocvan`, `nghenghiep`, `mavp`, `mahk`, `qhvchuho`) VALUES
('082255000', 'Hoàng Thị Lan', NULL, 1, '1991-02-02', 'Kinh', 'Không', 'Tân Thịnh Thái Nguyên', '12/12', 'Tự do', NULL, 'hk002', 'Chủ hộ'),
('088868000', 'Nông Văn Long', NULL, 1, '1999-02-15', 'Kinh', 'Không', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk001', 'Chủ hộ'),
('088868111', 'Hoàng Thị Lan', NULL, 0, '2002-02-15', 'Kinh', 'Không', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk001', 'Vợ'),
('088868222', 'Nông Quốc Minh', NULL, 0, '2010-02-21', 'Kinh', 'Không', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk002', 'Con - chuyển từ khẩu hk001'),
('088868333', 'Nguyễn Quang Huy', NULL, 1, '2010-02-21', 'Kinh', 'Không', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk003', 'Chủ hộ - tách từ khẩu hk001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` varchar(255) NOT NULL,
  `hvt` varchar(255) NOT NULL,
  `gt` tinyint(4) NOT NULL COMMENT '0 là nữ, 1 là nam, 2 là k xác định',
  `ns` date NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `capbac` varchar(255) NOT NULL,
  `mapb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hvt`, `gt`, `ns`, `sdt`, `email`, `password`, `code`, `capbac`, `mapb`) VALUES
('nv001', 'Hoàng Văn Long', 1, '1997-01-27', '0353270197', 'khanhnongvan0@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Thiếu Úy', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `mapb` int(11) NOT NULL,
  `tenpb` varchar(255) NOT NULL,
  `dc` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`mapb`, `tenpb`, `dc`, `sdt`) VALUES
(1, 'Phòng 001', 'Phòng 102, tầng 2, nhà A', '0313121121');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tttv`
--

CREATE TABLE `tttv` (
  `id` int(11) NOT NULL,
  `socmnd` varchar(255) NOT NULL,
  `khaucu` varchar(255) NOT NULL,
  `khaumoi` varchar(255) DEFAULT NULL,
  `lydo` varchar(255) NOT NULL,
  `loai` varchar(255) NOT NULL COMMENT 'Tạm trú hoặc tạm vắng',
  `ngaybd` date NOT NULL,
  `thoihan` int(11) NOT NULL COMMENT 'Tính theo ngày',
  `ngaykt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tttv`
--

INSERT INTO `tttv` (`id`, `socmnd`, `khaucu`, `khaumoi`, `lydo`, `loai`, `ngaybd`, `thoihan`, `ngaykt`) VALUES
(1, '088868222', 'hk001', 'hk002', 'Đây là lý do', 'Tạm trú', '2019-02-13', 1, '2019-02-14'),
(2, '088868111', 'hk001', '', 'Đây là lý do', 'Tạm vắng', '2019-02-13', 1, '2019-02-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vipham`
--

CREATE TABLE `vipham` (
  `mavp` int(11) NOT NULL,
  `toidanh` varchar(255) NOT NULL,
  `hinhphat` varchar(255) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cktk`
--
ALTER TABLE `cktk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `socmnd` (`socmnd`);

--
-- Chỉ mục cho bảng `hokhau`
--
ALTER TABLE `hokhau`
  ADD PRIMARY KEY (`mahk`);

--
-- Chỉ mục cho bảng `log_hokhau`
--
ALTER TABLE `log_hokhau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `log_nhankhau`
--
ALTER TABLE `log_nhankhau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhankhau`
--
ALTER TABLE `nhankhau`
  ADD PRIMARY KEY (`socmnd`),
  ADD KEY `mahk` (`mahk`),
  ADD KEY `mavp` (`mavp`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`,`email`),
  ADD KEY `mapb` (`mapb`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`mapb`);

--
-- Chỉ mục cho bảng `tttv`
--
ALTER TABLE `tttv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `socmnd` (`socmnd`);

--
-- Chỉ mục cho bảng `vipham`
--
ALTER TABLE `vipham`
  ADD PRIMARY KEY (`mavp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cktk`
--
ALTER TABLE `cktk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `log_hokhau`
--
ALTER TABLE `log_hokhau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `log_nhankhau`
--
ALTER TABLE `log_nhankhau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `mapb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tttv`
--
ALTER TABLE `tttv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `vipham`
--
ALTER TABLE `vipham`
  MODIFY `mavp` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cktk`
--
ALTER TABLE `cktk`
  ADD CONSTRAINT `cktk_ibfk_1` FOREIGN KEY (`socmnd`) REFERENCES `nhankhau` (`socmnd`);

--
-- Các ràng buộc cho bảng `nhankhau`
--
ALTER TABLE `nhankhau`
  ADD CONSTRAINT `nhankhau_ibfk_1` FOREIGN KEY (`mahk`) REFERENCES `hokhau` (`mahk`),
  ADD CONSTRAINT `nhankhau_ibfk_2` FOREIGN KEY (`mavp`) REFERENCES `vipham` (`mavp`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`mapb`) REFERENCES `phongban` (`mapb`);

--
-- Các ràng buộc cho bảng `tttv`
--
ALTER TABLE `tttv`
  ADD CONSTRAINT `tttv_ibfk_1` FOREIGN KEY (`socmnd`) REFERENCES `nhankhau` (`socmnd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
