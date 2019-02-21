-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 21, 2019 lúc 05:41 PM
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
-- Cấu trúc bảng cho bảng `autocomplete`
--

CREATE TABLE `autocomplete` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alpha_2` varchar(255) NOT NULL,
  `alpha_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `autocomplete`
--

INSERT INTO `autocomplete` (`id`, `name`, `alpha_2`, `alpha_3`) VALUES
(1, 'Afghanistan', 'af', 'afg'),
(2, 'Aland Islands', 'ax', 'ala'),
(3, 'Albania', 'al', 'alb'),
(4, 'Algeria', 'dz', 'dza'),
(5, 'American Samoa', 'as', 'asm'),
(6, 'Andorra', 'ad', 'and'),
(7, 'Angola', 'ao', 'ago'),
(8, 'Anguilla', 'ai', 'aia'),
(9, 'Antarctica', 'aq', ''),
(10, 'Antigua and Barbuda', 'ag', 'atg'),
(11, 'Argentina', 'ar', 'arg'),
(12, 'Armenia', 'am', 'arm'),
(13, 'Aruba', 'aw', 'abw'),
(14, 'Australia', 'au', 'aus'),
(15, 'Austria', 'at', 'aut'),
(16, 'Azerbaijan', 'az', 'aze'),
(17, 'Bahamas', 'bs', 'bhs'),
(18, 'Bahrain', 'bh', 'bhr'),
(19, 'Bangladesh', 'bd', 'bgd'),
(20, 'Barbados', 'bb', 'brb'),
(21, 'Belarus', 'by', 'blr'),
(22, 'Belgium', 'be', 'bel'),
(23, 'Belize', 'bz', 'blz'),
(24, 'Benin', 'bj', 'ben'),
(25, 'Bermuda', 'bm', 'bmu'),
(26, 'Bhutan', 'bt', 'btn'),
(27, 'Bolivia, Plurinational State of', 'bo', 'bol'),
(28, 'Bonaire, Sint Eustatius and Saba', 'bq', 'bes'),
(29, 'Bosnia and Herzegovina', 'ba', 'bih'),
(30, 'Botswana', 'bw', 'bwa'),
(31, 'Bouvet Island', 'bv', ''),
(32, 'Brazil', 'br', 'bra'),
(33, 'British Indian Ocean Territory', 'io', ''),
(34, 'Brunei Darussalam', 'bn', 'brn'),
(35, 'Bulgaria', 'bg', 'bgr'),
(36, 'Burkina Faso', 'bf', 'bfa'),
(37, 'Burundi', 'bi', 'bdi'),
(38, 'Cambodia', 'kh', 'khm'),
(39, 'Cameroon', 'cm', 'cmr'),
(40, 'Canada', 'ca', 'can'),
(41, 'Cape Verde', 'cv', 'cpv'),
(42, 'Cayman Islands', 'ky', 'cym'),
(43, 'Central African Republic', 'cf', 'caf'),
(44, 'Chad', 'td', 'tcd'),
(45, 'Chile', 'cl', 'chl'),
(46, 'China', 'cn', 'chn'),
(47, 'Christmas Island', 'cx', ''),
(48, 'Cocos (Keeling) Islands', 'cc', ''),
(49, 'Colombia', 'co', 'col'),
(50, 'Comoros', 'km', 'com'),
(51, 'Congo', 'cg', 'cog'),
(52, 'Congo, The Democratic Republic of the', 'cd', 'cod'),
(53, 'Cook Islands', 'ck', 'cok'),
(54, 'Costa Rica', 'cr', 'cri'),
(55, 'Cote d\'Ivoire', 'ci', 'civ'),
(56, 'Croatia', 'hr', 'hrv'),
(57, 'Cuba', 'cu', 'cub'),
(58, 'Curacao', 'cw', 'cuw'),
(59, 'Cyprus', 'cy', 'cyp'),
(60, 'Czech Republic', 'cz', 'cze'),
(61, 'Denmark', 'dk', 'dnk'),
(62, 'Djibouti', 'dj', 'dji'),
(63, 'Dominica', 'dm', 'dma'),
(64, 'Dominican Republic', 'do', 'dom'),
(65, 'Ecuador', 'ec', 'ecu'),
(66, 'Egypt', 'eg', 'egy'),
(67, 'El Salvador', 'sv', 'slv'),
(68, 'Equatorial Guinea', 'gq', 'gnq'),
(69, 'Eritrea', 'er', 'eri'),
(70, 'Estonia', 'ee', 'est'),
(71, 'Ethiopia', 'et', 'eth'),
(72, 'Falkland Islands (Malvinas)', 'fk', 'flk'),
(73, 'Faroe Islands', 'fo', 'fro'),
(74, 'Fiji', 'fj', 'fji'),
(75, 'Finland', 'fi', 'fin'),
(76, 'France', 'fr', 'fra'),
(77, 'French Guiana', 'gf', 'guf'),
(78, 'French Polynesia', 'pf', 'pyf'),
(79, 'French Southern Territories', 'tf', ''),
(80, 'Gabon', 'ga', 'gab'),
(81, 'Gambia', 'gm', 'gmb'),
(82, 'Georgia', 'ge', 'geo'),
(83, 'Germany', 'de', 'deu'),
(84, 'Ghana', 'gh', 'gha'),
(85, 'Gibraltar', 'gi', 'gib'),
(86, 'Greece', 'gr', 'grc'),
(87, 'Greenland', 'gl', 'grl'),
(88, 'Grenada', 'gd', 'grd'),
(89, 'Guadeloupe', 'gp', 'glp'),
(90, 'Guam', 'gu', 'gum'),
(91, 'Guatemala', 'gt', 'gtm'),
(92, 'Guernsey', 'gg', 'ggy'),
(93, 'Guinea', 'gn', 'gin'),
(94, 'Guinea-Bissau', 'gw', 'gnb'),
(95, 'Guyana', 'gy', 'guy'),
(96, 'Haiti', 'ht', 'hti'),
(97, 'Heard Island and McDonald Islands', 'hm', ''),
(98, 'Holy See (Vatican City State)', 'va', 'vat'),
(99, 'Honduras', 'hn', 'hnd'),
(100, 'Hong Kong', 'hk', 'hkg'),
(101, 'Hungary', 'hu', 'hun'),
(102, 'Iceland', 'is', 'isl'),
(103, 'India', 'in', 'ind'),
(104, 'Indonesia', 'id', 'idn'),
(105, 'Iran, Islamic Republic of', 'ir', 'irn'),
(106, 'Iraq', 'iq', 'irq'),
(107, 'Ireland', 'ie', 'irl'),
(108, 'Isle of Man', 'im', 'imn'),
(109, 'Israel', 'il', 'isr'),
(110, 'Italy', 'it', 'ita'),
(111, 'Jamaica', 'jm', 'jam'),
(112, 'Japan', 'jp', 'jpn'),
(113, 'Jersey', 'je', 'jey'),
(114, 'Jordan', 'jo', 'jor'),
(115, 'Kazakhstan', 'kz', 'kaz'),
(116, 'Kenya', 'ke', 'ken'),
(117, 'Kiribati', 'ki', 'kir'),
(118, 'Korea, Democratic People\'s Republic of', 'kp', 'prk'),
(119, 'Korea, Republic of', 'kr', 'kor'),
(120, 'Kuwait', 'kw', 'kwt'),
(121, 'Kyrgyzstan', 'kg', 'kgz'),
(122, 'Lao People\'s Democratic Republic', 'la', 'lao'),
(123, 'Latvia', 'lv', 'lva'),
(124, 'Lebanon', 'lb', 'lbn'),
(125, 'Lesotho', 'ls', 'lso'),
(126, 'Liberia', 'lr', 'lbr'),
(127, 'Libyan Arab Jamahiriya', 'ly', 'lby'),
(128, 'Liechtenstein', 'li', 'lie'),
(129, 'Lithuania', 'lt', 'ltu'),
(130, 'Luxembourg', 'lu', 'lux'),
(131, 'Macao', 'mo', 'mac'),
(132, 'Macedonia, The former Yugoslav Republic of', 'mk', 'mkd'),
(133, 'Madagascar', 'mg', 'mdg'),
(134, 'Malawi', 'mw', 'mwi'),
(135, 'Malaysia', 'my', 'mys'),
(136, 'Maldives', 'mv', 'mdv'),
(137, 'Mali', 'ml', 'mli'),
(138, 'Malta', 'mt', 'mlt'),
(139, 'Marshall Islands', 'mh', 'mhl'),
(140, 'Martinique', 'mq', 'mtq'),
(141, 'Mauritania', 'mr', 'mrt'),
(142, 'Mauritius', 'mu', 'mus'),
(143, 'Mayotte', 'yt', 'myt'),
(144, 'Mexico', 'mx', 'mex'),
(145, 'Micronesia, Federated States of', 'fm', 'fsm'),
(146, 'Moldova, Republic of', 'md', 'mda'),
(147, 'Monaco', 'mc', 'mco'),
(148, 'Mongolia', 'mn', 'mng'),
(149, 'Montenegro', 'me', 'mne'),
(150, 'Montserrat', 'ms', 'msr'),
(151, 'Morocco', 'ma', 'mar'),
(152, 'Mozambique', 'mz', 'moz'),
(153, 'Myanmar', 'mm', 'mmr'),
(154, 'Namibia', 'na', 'nam'),
(155, 'Nauru', 'nr', 'nru'),
(156, 'Nepal', 'np', 'npl'),
(157, 'Netherlands', 'nl', 'nld'),
(158, 'New Caledonia', 'nc', 'ncl'),
(159, 'New Zealand', 'nz', 'nzl'),
(160, 'Nicaragua', 'ni', 'nic'),
(161, 'Niger', 'ne', 'ner'),
(162, 'Nigeria', 'ng', 'nga'),
(163, 'Niue', 'nu', 'niu'),
(164, 'Norfolk Island', 'nf', 'nfk'),
(165, 'Northern Mariana Islands', 'mp', 'mnp'),
(166, 'Norway', 'no', 'nor'),
(167, 'Oman', 'om', 'omn'),
(168, 'Pakistan', 'pk', 'pak'),
(169, 'Palau', 'pw', 'plw'),
(170, 'Palestinian Territory, Occupied', 'ps', 'pse'),
(171, 'Panama', 'pa', 'pan'),
(172, 'Papua New Guinea', 'pg', 'png'),
(173, 'Paraguay', 'py', 'pry'),
(174, 'Peru', 'pe', 'per'),
(175, 'Philippines', 'ph', 'phl'),
(176, 'Pitcairn', 'pn', 'pcn'),
(177, 'Poland', 'pl', 'pol'),
(178, 'Portugal', 'pt', 'prt'),
(179, 'Puerto Rico', 'pr', 'pri'),
(180, 'Qatar', 'qa', 'qat'),
(181, 'Reunion', 're', 'reu'),
(182, 'Romania', 'ro', 'rou'),
(183, 'Russian Federation', 'ru', 'rus'),
(184, 'Rwanda', 'rw', 'rwa'),
(185, 'Saint Barthelemy', 'bl', 'blm'),
(186, 'Saint Helena, Ascension and Tristan Da Cunha', 'sh', 'shn'),
(187, 'Saint Kitts and Nevis', 'kn', 'kna'),
(188, 'Saint Lucia', 'lc', 'lca'),
(189, 'Saint Martin (French Part)', 'mf', 'maf'),
(190, 'Saint Pierre and Miquelon', 'pm', 'spm'),
(191, 'Saint Vincent and The Grenadines', 'vc', 'vct'),
(192, 'Samoa', 'ws', 'wsm'),
(193, 'San Marino', 'sm', 'smr'),
(194, 'Sao Tome and Principe', 'st', 'stp'),
(195, 'Saudi Arabia', 'sa', 'sau'),
(196, 'Senegal', 'sn', 'sen'),
(197, 'Serbia', 'rs', 'srb'),
(198, 'Seychelles', 'sc', 'syc'),
(199, 'Sierra Leone', 'sl', 'sle'),
(200, 'Singapore', 'sg', 'sgp'),
(201, 'Sint Maarten (Dutch Part)', 'sx', 'sxm'),
(202, 'Slovakia', 'sk', 'svk'),
(203, 'Slovenia', 'si', 'svn'),
(204, 'Solomon Islands', 'sb', 'slb'),
(205, 'Somalia', 'so', 'som'),
(206, 'South Africa', 'za', 'zaf'),
(207, 'South Georgia and The South Sandwich Islands', 'gs', ''),
(208, 'South Sudan', 'ss', 'ssd'),
(209, 'Spain', 'es', 'esp'),
(210, 'Sri Lanka', 'lk', 'lka'),
(211, 'Sudan', 'sd', 'sdn'),
(212, 'Suriname', 'sr', 'sur'),
(213, 'Svalbard and Jan Mayen', 'sj', 'sjm'),
(214, 'Swaziland', 'sz', 'swz'),
(215, 'Sweden', 'se', 'swe'),
(216, 'Switzerland', 'ch', 'che'),
(217, 'Syrian Arab Republic', 'sy', 'syr'),
(218, 'Taiwan, Province of China', 'tw', ''),
(219, 'Tajikistan', 'tj', 'tjk'),
(220, 'Tanzania, United Republic of', 'tz', 'tza'),
(221, 'Thailand', 'th', 'tha'),
(222, 'Timor-Leste', 'tl', 'tls'),
(223, 'Togo', 'tg', 'tgo'),
(224, 'Tokelau', 'tk', 'tkl'),
(225, 'Tonga', 'to', 'ton'),
(226, 'Trinidad and Tobago', 'tt', 'tto'),
(227, 'Tunisia', 'tn', 'tun'),
(228, 'Turkey', 'tr', 'tur'),
(229, 'Turkmenistan', 'tm', 'tkm'),
(230, 'Turks and Caicos Islands', 'tc', 'tca'),
(231, 'Tuvalu', 'tv', 'tuv'),
(232, 'Uganda', 'ug', 'uga'),
(233, 'Ukraine', 'ua', 'ukr'),
(234, 'United Arab Emirates', 'ae', 'are'),
(235, 'United Kingdom', 'gb', 'gbr'),
(236, 'United States', 'us', 'usa'),
(237, 'United States Minor Outlying Islands', 'um', ''),
(238, 'Uruguay', 'uy', 'ury'),
(239, 'Uzbekistan', 'uz', 'uzb'),
(240, 'Vanuatu', 'vu', 'vut'),
(241, 'Venezuela, Bolivarian Republic of', 've', 'ven'),
(242, 'Viet Nam', 'vn', 'vnm'),
(243, 'Virgin Islands, British', 'vg', 'vgb'),
(244, 'Virgin Islands, U.S.', 'vi', 'vir'),
(245, 'Wallis and Futuna', 'wf', 'wlf'),
(246, 'Western Sahara', 'eh', 'esh'),
(247, 'Yemen', 'ye', 'yem'),
(248, 'Zambia', 'zm', 'zmb'),
(249, 'Zimbabwe', 'zw', 'zwe');

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
('hk002', 'Hoàng Thị Lan', 'Xã A, Huyện B'),
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
  `dc` varchar(255) NOT NULL,
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

INSERT INTO `nhankhau` (`socmnd`, `hvt`, `tenkhac`, `gt`, `ns`, `dt`, `tg`, `dc`, `quequan`, `tdhocvan`, `nghenghiep`, `mavp`, `mahk`, `qhvchuho`) VALUES
('082255000', 'Hoàng Thị Lan', NULL, 1, '1991-02-02', 'Kinh', 'Không', '', 'Tân Thịnh Thái Nguyên', '12/12', 'Tự do', NULL, 'hk002', 'Chủ hộ'),
('088868000', 'Nông Văn Long', NULL, 1, '1999-02-15', 'Kinh', 'Không', '', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk001', 'Chủ hộ'),
('088868111', 'Hoàng Thị Lan', NULL, 0, '2002-02-15', 'Kinh', 'Không', '', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk001', 'Vợ'),
('088868222', 'Nông Quốc Minh', NULL, 1, '2010-02-21', 'Kinh', 'Không', '', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk001', 'Con'),
('088868333', 'Nguyễn Thị Hoa', NULL, 0, '2010-02-21', 'Kinh', 'Không', '', 'Thái Nguyên', '12/12', 'Tự do', NULL, 'hk001', 'Con dâu');

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
-- Chỉ mục cho bảng `autocomplete`
--
ALTER TABLE `autocomplete`
  ADD PRIMARY KEY (`id`);

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
