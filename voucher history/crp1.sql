-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2021 lúc 04:24 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `crp1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedbackID` varchar(255) NOT NULL,
  `feedbackRating` int(255) NOT NULL,
  `feedbackContent` varchar(255) NOT NULL,
  `feedbackTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customerName` varchar(255) NOT NULL,
  `customerPhone` int(10) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `productID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_log`
--

CREATE TABLE `tbl_log` (
  `logDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logName` varchar(255) NOT NULL,
  `logContent` varchar(255) NOT NULL,
  `logcatID` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_log_category`
--

CREATE TABLE `tbl_log_category` (
  `logcatID` varchar(255) NOT NULL,
  `logcatName` varchar(255) NOT NULL,
  `logcatDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderID` varchar(255) NOT NULL,
  `orderTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderStatus` varchar(255) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerAddress` varchar(255) NOT NULL,
  `customerPhone` int(10) NOT NULL,
  `paytypeID` varchar(255) NOT NULL,
  `voucherID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment_type`
--

CREATE TABLE `tbl_payment_type` (
  `paytypeID` varchar(255) NOT NULL,
  `paytypeName` varchar(255) NOT NULL,
  `paytypeDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productID` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `productStatus` varchar(255) NOT NULL,
  `productQuantity` int(255) NOT NULL,
  `prodcatID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productID`, `productName`, `productPrice`, `productStatus`, `productQuantity`, `prodcatID`) VALUES
('p_r001', 'Rau mung toi', 2000, '', 0, 'p_c01'),
('p_r003', 'Rau Cải', 123421, '', 0, 'p_c01'),
('p_r05', 'Rau Cai', 5000, '', 0, 'p_c01'),
('p_r06', 'Rau Muong', 10000, '', 0, 'p_q01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `prodcatID` varchar(255) NOT NULL,
  `prodcatName` varchar(255) NOT NULL,
  `prodcatDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`prodcatID`, `prodcatName`, `prodcatDesc`) VALUES
('p_c01', 'Rau', 'Rau'),
('p_q01', 'Hoa Quả', 'Đây là hoa quả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_images`
--

CREATE TABLE `tbl_product_images` (
  `prodimgID` varchar(255) NOT NULL,
  `prodimgName` varchar(255) NOT NULL,
  `prodimgLink` varchar(255) NOT NULL,
  `productID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_images`
--

INSERT INTO `tbl_product_images` (`prodimgID`, `prodimgName`, `prodimgLink`, `productID`) VALUES
('pic02', 'a02', 'a4.jpg', 'p_r001'),
('rmt01', 'rau mung toi picture', 'rau03.jpg', 'p_r001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_order`
--

CREATE TABLE `tbl_product_order` (
  `productID` varchar(255) NOT NULL,
  `orderID` varchar(255) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_role`
--

CREATE TABLE `tbl_role` (
  `roleID` varchar(255) NOT NULL,
  `roleName` varchar(255) NOT NULL,
  `roleDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` varchar(255) NOT NULL,
  `userFullname` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userMail` varchar(255) NOT NULL,
  `userPhone` int(10) NOT NULL,
  `roleID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_voucher`
--

CREATE TABLE `tbl_voucher` (
  `voucherID` varchar(255) NOT NULL,
  `voucherDesc` varchar(255) NOT NULL,
  `voucherCost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_voucher_user`
--

CREATE TABLE `tbl_voucher_user` (
  `voucherID` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `voucherQuantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_wallet`
--

CREATE TABLE `tbl_wallet` (
  `walletID` varchar(255) NOT NULL,
  `walletBalance` int(11) NOT NULL,
  `userID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_wallet_history`
--

CREATE TABLE `tbl_wallet_history` (
  `historyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `historyName` varchar(255) NOT NULL,
  `historyContent` varchar(255) NOT NULL,
  `historyAmount` int(11) NOT NULL,
  `walletID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedbackID`),
  ADD KEY `product_feedback` (`productID`);

--
-- Chỉ mục cho bảng `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`logDate`),
  ADD KEY `user_log` (`userID`),
  ADD KEY `log_category` (`logcatID`);

--
-- Chỉ mục cho bảng `tbl_log_category`
--
ALTER TABLE `tbl_log_category`
  ADD PRIMARY KEY (`logcatID`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `payment_order` (`paytypeID`),
  ADD KEY `voucher_order` (`voucherID`);

--
-- Chỉ mục cho bảng `tbl_payment_type`
--
ALTER TABLE `tbl_payment_type`
  ADD PRIMARY KEY (`paytypeID`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `productCategory` (`prodcatID`);

--
-- Chỉ mục cho bảng `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`prodcatID`);

--
-- Chỉ mục cho bảng `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD PRIMARY KEY (`prodimgID`),
  ADD KEY `product_images` (`productID`);

--
-- Chỉ mục cho bảng `tbl_product_order`
--
ALTER TABLE `tbl_product_order`
  ADD PRIMARY KEY (`productID`,`orderID`),
  ADD KEY `order_po` (`orderID`);

--
-- Chỉ mục cho bảng `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`roleID`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `role_user` (`roleID`);

--
-- Chỉ mục cho bảng `tbl_voucher`
--
ALTER TABLE `tbl_voucher`
  ADD PRIMARY KEY (`voucherID`);

--
-- Chỉ mục cho bảng `tbl_voucher_user`
--
ALTER TABLE `tbl_voucher_user`
  ADD PRIMARY KEY (`voucherID`,`userID`),
  ADD KEY `user_vu` (`userID`);

--
-- Chỉ mục cho bảng `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD PRIMARY KEY (`walletID`),
  ADD KEY `user_wallet` (`userID`);

--
-- Chỉ mục cho bảng `tbl_wallet_history`
--
ALTER TABLE `tbl_wallet_history`
  ADD PRIMARY KEY (`historyDate`),
  ADD KEY `wallet_history` (`walletID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `product_feedback` FOREIGN KEY (`productID`) REFERENCES `tbl_product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD CONSTRAINT `log_category` FOREIGN KEY (`logcatID`) REFERENCES `tbl_log_category` (`logcatID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user_log` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`userID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `payment_order` FOREIGN KEY (`paytypeID`) REFERENCES `tbl_payment_type` (`paytypeID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `voucher_order` FOREIGN KEY (`voucherID`) REFERENCES `tbl_voucher` (`voucherID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `productCategory` FOREIGN KEY (`prodcatID`) REFERENCES `tbl_product_category` (`prodcatID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD CONSTRAINT `product_images` FOREIGN KEY (`productID`) REFERENCES `tbl_product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product_order`
--
ALTER TABLE `tbl_product_order`
  ADD CONSTRAINT `order_po` FOREIGN KEY (`orderID`) REFERENCES `tbl_order` (`orderID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_po` FOREIGN KEY (`productID`) REFERENCES `tbl_product` (`productID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `role_user` FOREIGN KEY (`roleID`) REFERENCES `tbl_role` (`roleID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_voucher_user`
--
ALTER TABLE `tbl_voucher_user`
  ADD CONSTRAINT `user_vu` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `voucher_vu` FOREIGN KEY (`voucherID`) REFERENCES `tbl_voucher` (`voucherID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD CONSTRAINT `user_wallet` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_wallet_history`
--
ALTER TABLE `tbl_wallet_history`
  ADD CONSTRAINT `wallet_history` FOREIGN KEY (`walletID`) REFERENCES `tbl_wallet` (`walletID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
