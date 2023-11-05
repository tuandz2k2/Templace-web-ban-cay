-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 05:45 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `caycanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethdb`
--

CREATE TABLE `chitiethdb` (
  `MaHDB` char(250) NOT NULL,
  `MaCTHDB` char(250) NOT NULL,
  `MaSP` char(250) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethdb`
--

INSERT INTO `chitiethdb` (`MaHDB`, `MaCTHDB`, `MaSP`, `SoLuong`) VALUES
('HDB001', 'CTHDB001', 'SP001', 5),
('HDB001', 'CTHDB002', 'SP002', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethdn`
--

CREATE TABLE `chitiethdn` (
  `MaHDN` char(250) NOT NULL,
  `MaCTHDN` char(250) NOT NULL,
  `MaSP` char(250) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethdn`
--

INSERT INTO `chitiethdn` (`MaHDN`, `MaCTHDN`, `MaSP`, `SoLuong`) VALUES
('HDN001', 'CTHDN001', 'SP003', 10),
('HDN001', 'CTHDN002', 'SP004', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `MaHDB` char(250) NOT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `TongTienHD` decimal(19,2) DEFAULT NULL,
  `MaSoThue` char(100) DEFAULT NULL,
  `PTThanhToan` char(100) DEFAULT NULL,
  `TrangThai` varchar(100) DEFAULT NULL,
  `GiamGiaHD` float DEFAULT NULL,
  `GhiChu` varchar(100) DEFAULT NULL,
  `MaNV` char(250) DEFAULT NULL,
  `MaKH` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`MaHDB`, `NgayTao`, `TongTienHD`, `MaSoThue`, `PTThanhToan`, `TrangThai`, `GiamGiaHD`, `GhiChu`, `MaNV`, `MaKH`) VALUES
('HDB001', '2023-10-13 00:00:00', 250.00, 'MS001', 'Tiền mặt', 'Hoàn thành', 10, 'Ghi chú hoá đơn bán 1', 'NV001', 'KH001'),
('HDB002', '2023-10-14 00:00:00', 180.00, 'MS002', 'Chuyển khoản', 'Chưa thanh toán', 5, 'Ghi chú hoá đơn bán 2', 'NV002', 'KH002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonnhap`
--

CREATE TABLE `hoadonnhap` (
  `MaHDN` char(250) NOT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `TongTienHD` decimal(19,2) DEFAULT NULL,
  `MaSoThue` char(100) DEFAULT NULL,
  `PTThanhToan` char(100) DEFAULT NULL,
  `TrangThai` varchar(100) DEFAULT NULL,
  `GiamGiaHD` float DEFAULT NULL,
  `GhiChu` varchar(100) DEFAULT NULL,
  `MaNCC` char(250) NOT NULL,
  `MaNV` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonnhap`
--

INSERT INTO `hoadonnhap` (`MaHDN`, `NgayTao`, `TongTienHD`, `MaSoThue`, `PTThanhToan`, `TrangThai`, `GiamGiaHD`, `GhiChu`, `MaNCC`, `MaNV`) VALUES
('HDN001', '2023-10-13 00:00:00', 500.00, 'MSN001', 'Chuyển khoản', 'Hoàn thành', 15, 'Ghi chú hoá đơn nhập 1', 'NCC001', 'NV001'),
('HDN002', '2023-10-14 00:00:00', 350.00, 'MSN002', 'Tiền mặt', 'Chưa thanh toán', 8, 'Ghi chú hoá đơn nhập 2', 'NCC002', 'NV002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(100) NOT NULL,
  `TenKH` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Phone` char(100) DEFAULT NULL,
  `GioiTinh` char(100) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(150) DEFAULT NULL,
  `AnhDaiDien` char(100) DEFAULT NULL,
  `GhiChu` varchar(100) DEFAULT NULL,
  `username` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `email`, `Phone`, `GioiTinh`, `NgaySinh`, `DiaChi`, `AnhDaiDien`, `GhiChu`, `username`) VALUES
('KH001', 'Phạm Minh Tuấn', 'kh1@gmail.com', '123456789', 'Nam', '1990-01-01', 'Hà Nội', 'anh-kh-1.jpg', 'Ghi chú khách hàng 1', 'user1'),
('KH002', 'Nguyễn Tiến Ninh', 'kh2@gmail.com', '123456789', 'Nam', '1990-01-01', 'Hà Nội', 'anh-kh-2.jpg', 'Ghi chú khách hàng 2', 'user2'),
('KH003', 'Nguyễn Văn Hùng', 'kh3@gmail.com', '123456789', 'Nam', '1990-01-01', 'Hà Nội', 'anh-kh-3.jpg', 'Ghi chú khách hàng 3', 'user3'),
('KH004', 'Nguyễn Thị Mai', 'kh4@gmail.com', '987654321', 'Nữ', '1995-05-05', 'Vĩnh Phúc', 'anh-kh-4.jpg', 'Ghi chú khách hàng 4', 'user4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoai` varchar(250) NOT NULL,
  `Loai` varchar(100) DEFAULT NULL,
   `GhiChu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoai`, `Loai`,`GhiChu`) VALUES
('Loai001', 'Cây cảnh',''),
('Loai002', 'Cây Phong Thủy',''),
('Loai003', 'Hoa','');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` char(250) NOT NULL,
  `TenNCC` varchar(100) DEFAULT NULL,
   `phone` varchar(100) DEFAULT NULL,
	`diaChi` varchar(100) DEFAULT NULL,
	`email` varchar(100) DEFAULT NULL,
	`ghiChu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `phone`,`diaChi`,`email`,`ghiChu`) VALUES
('NCC001', 'Nhà cung cấp 1','09009','Hà Nội','ncc1@gmail.com',null),
('NCC002', 'Nhà cung cấp 2','09009','Hà Nội','ncc1@gmail.com',null);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` char(250) NOT NULL,
  `TenNV` varchar(100) DEFAULT NULL,
  `Phone` char(15) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` char(100) DEFAULT NULL,
  `ChucVu` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(150) DEFAULT NULL,
  `SoCCCD` varchar(150) DEFAULT NULL,
  `SoTaiKhoanNH` varchar(150) DEFAULT NULL,
  `AnhDaiDien` char(100) DEFAULT NULL,
  `username` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `Phone`, `NgaySinh`, `GioiTinh`, `ChucVu`, `DiaChi`, `SoCCCD`, `SoTaiKhoanNH`, `AnhDaiDien`, `username`) VALUES

('NV001', 'Trần Văn Quỳnh', '123123123', '2003-05-01', 'Nam', 'Quản lý', 'Vĩnh Phúc', 'CCCDNV1', 'TKNHNV1', 'anh-nv-1.jpg', 'nhanvien1'),
('NV002', 'Nguyễn Phương Uyên', '123123123', '2002-10-01', 'Nữ', 'Nhân viên bán hàng', 'Hà Nội', 'CCCDNV1', 'TKNHNV1', 'anh-nv-1.jpg', 'nhanvien2'),
('NV003', 'Nguyễn Văn Tuấn', '123123123', '2000-01-02', 'Nam', 'Quản lý', 'Cà Mau', 'CCCDNV1', 'TKNHNV1', 'anh-nv-1.jpg', 'nhanvien3'),
('NV004', 'Phùng Văn Mạnh', '456456456', '1999-05-05', 'Nữ', 'Nhân viên bán hàng', 'Tam Dương', 'CCCDNV2', 'TKNHNV2', 'anh-nv-2.jpg', 'nhanvien4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` char(250) NOT NULL,
  `MaLoai` char(250) DEFAULT NULL,
  `TenSP` varchar(150) DEFAULT NULL,
  `DonGiaBan` decimal(10,2) DEFAULT NULL,
   `DonGiaNhap` decimal(10,2) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `ThoiGianBH` decimal(10,2) DEFAULT NULL,
  `MoTaSP` varchar(250) DEFAULT NULL,
   `donViTinh` varchar(250) DEFAULT NULL,
  `AnhDaiDien` varchar(100) DEFAULT NULL,
  `GhiChu` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLoai`, `TenSP`,  `DonGiaNhap`, `DonGiaBan`, `NgayNhap`, `ThoiGianBH`, `MoTaSP`,`donViTinh`, `AnhDaiDien`, `GhiChu`) VALUES
('SP001', 'Loai001', 'Cây cỏ mini', 25.00, 30, '2023-10-13 00:00:00', 12.50, 'Cây cỏ mini trang trí bàn làm việc','cây', 'cayco-mini.jpg', 'Mô tả sản phẩm 1'),
('SP002', 'Loai001', 'Cây phát tài', 35.00, 25, '2023-10-13 00:00:00', 12.50, 'Cây phát tài trong chậu','cây', 'cay-phat-tai.jpg', 'Mô tả sản phẩm 2'),
('SP003', 'Loai001', 'Bonsai cây cỏ', 30.00, 20, '2023-10-13 00:00:00', 12.50, 'Bonsai cây cỏ trang trí nhỏ gọn','cây', 'bonsai-cay-co.jpg', 'Mô tả sản phẩm 3'),
('SP004', 'Loai002', 'Hoa hướng dương', 12.00, 50, '2023-10-13 00:00:00', 10.00, 'Hoa hướng dương cắm bàn làm việc','cây', 'hoa-huong-duong.jpg', 'Mô tả sản phẩm 4'),
('SP005', 'Loai002', 'Hoa tulip', 14.00, 40, '2023-10-13 00:00:00', 10.00, 'Hoa tulip đẹp','cây', 'hoa-tulip.jpg', 'Mô tả sản phẩm 5'),
('SP006', 'Loai002', 'Hoa cúc trắng', 10.00, 60, '2023-10-13 00:00:00', 10.00, 'Hoa cúc trắng tinh khôi','cây', 'hoa-cuc-trang.jpg', 'Mô tả sản phẩm 6'),
('SP007', 'Loai002', 'Hoa hồng đỏ', 15.00, 45, '2023-10-13 00:00:00', 10.00, 'Hoa hồng đỏ tươi','cây', 'hoa-hong-do.jpg', 'Mô tả sản phẩm 7'),
('SP008', 'Loai002', 'Hoa lan hồ điệp', 18.00, 40, '2023-10-13 00:00:00', 10.00, 'Hoa lan hồ điệp phong cách','cây', 'hoa-lan-ho-diep.jpg', 'Mô tả sản phẩm 8'),
('SP009', 'Loai001', 'Cây cây xanh', 28.00, 35, '2023-10-13 00:00:00', 12.50, 'Cây xanh mini','cây', 'cay-cay-xanh.jpg', 'Mô tả sản phẩm 9'),
('SP010', 'Loai001', 'Cây trang trí', 20.00, 25, '2023-10-13 00:00:00', 12.50, 'Cây trang trí nội thất','cây', 'cay-trang-tri.jpg', 'Mô tả sản phẩm 10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTinTuc` varchar(250) NOT NULL,
  `TieuDe` varchar(250) DEFAULT NULL,
  `NoiDung` varchar(1500) DEFAULT NULL,
  `LoaiTinTuc` varchar(200) DEFAULT NULL,
  `Anh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`MaTinTuc`, `TieuDe`, `NoiDung`, `LoaiTinTuc`, `Anh`) VALUES
('TT001', 'Tin tức 1', 'Nội dung tin tức 1', 'Loại 1', 'anh-tin-tuc-1.jpg'),
('TT002', 'Tin tức 2', 'Nội dung tin tức 2', 'Loại 2', 'anh-tin-tuc-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `LoaiUser` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `LoaiUser`) VALUES
('user1', 'abc123', 0),
('user2', 'abc123', 0),
('user3', 'abc123', 0),
('user4', 'abc123', 0),
('nhanvien1', 'abc123', 0),
('nhanvien2', 'abc123', 0),
('nhanvien3', 'abc123', 0),
('nhanvien4', 'abc123', 0),
('nhanvien5', 'abc123', 0),
('admin', 'abc123', 1);


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethdb`
--
ALTER TABLE `chitiethdb`
  ADD PRIMARY KEY (`MaHDB`,`MaSP`),
  ADD KEY `FK_ChiTietHDB_SanPham` (`MaSP`);

--
-- Chỉ mục cho bảng `chitiethdn`
--
ALTER TABLE `chitiethdn`
  ADD PRIMARY KEY (`MaHDN`,`MaSP`),
  ADD KEY `FK_ChiTietHDN_SanPham` (`MaSP`);

--
-- Chỉ mục cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD PRIMARY KEY (`MaHDB`),
  ADD KEY `FK_HoaDonBan_KhachHang` (`MaKH`),
  ADD KEY `FK_HoaDonBan_NhanVien` (`MaNV`);

--
-- Chỉ mục cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD PRIMARY KEY (`MaHDN`),
  ADD KEY `FK_HoaDonNhap_NhaCungCap` (`MaNCC`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD KEY `FK_KhachHang_User` (`username`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `FK_NhanVien_User` (`username`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `FK_SanPham_LoaiSP` (`MaLoai`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTinTuc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethdb`
--
ALTER TABLE `chitiethdb`
  ADD CONSTRAINT `FK_ChiTietHDB_HoaDonBan` FOREIGN KEY (`MaHDB`) REFERENCES `hoadonban` (`MaHDB`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ChiTietHDB_SanPham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `chitiethdn`
--
ALTER TABLE `chitiethdn`
  ADD CONSTRAINT `FK_ChiTietHDN_HoaDonNhap` FOREIGN KEY (`MaHDN`) REFERENCES `hoadonnhap` (`MaHDN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ChiTietHDN_SanPham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD CONSTRAINT `FK_HoaDonBan_KhachHang` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HoaDonBan_NhanVien` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD CONSTRAINT `FK_HoaDonNhap_NhaCungCap` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`) ON DELETE NO ACTION ON UPDATE NO ACTION,
 ADD CONSTRAINT `FK_HoaDonNhap_NhanVien` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `FK_KhachHang_User` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_NhanVien_User` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SanPham_LoaiSP` FOREIGN KEY (`MaLoai`) REFERENCES `loaisp` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
