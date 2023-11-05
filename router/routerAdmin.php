<?php
if (isset($_GET["admin"])) {
    $admin = $_GET["admin"];
    echo 'admin:' . $admin;
    switch ($admin) {
            /*--------------Quản lý khách hàng------------- */
        case "hienThiKhachHang":
            include "./khachhang/hienThiKhachHang.php";
            break;
        case "suaKhachHang":
            include "./khachhang/suaKhachHang.php";
            break;
        case "themKhachHang":
            include "./khachhang/themKhachHang.php";
            break;
        case "xoaKhachHang":
            include "./khachhang/xoaKhachHang.php";
            break;
            /*--------------Quản lý Sản Phẩm------------- */
        case "hienThiSanPham":
            include './sanpham/hienThiSanPham.php';
            break;
        case "themSanPham":
            include "./sanpham/themSanPham.php";
            break;

            /*----------------Quản lý nhân viên----------*/

        case "hienThiNhanVien":
            include "./nhanvien/hienThiNhanVien.php";
            break;
        case "suaNhanVien":
            include "./nhanvien/suaNhanVien.php";
            break;
        case "themNhanVien":
            include "./nhanvien/themNhanVien.php";
            break;
        case "xoaNhanVien":
            include "./nhanvien/xoaNhanVien.php";
            break;
            /*----------------Quản lý tài khoản----------*/

        case "hienThiTaiKhoan":
            include "./taikhoan/hienThiTaiKhoan.php";
            break;
        case "suaTaiKhoan":
            include "./taikhoan/suaTaiKhoan.php";
            break;

        case "xoaTaiKhoan":
            include "./nhanvien/xoaTaiKhoan.php";
            break;
            /*----------------Quản lý hóa đơn nhập ----------*/
        case "hienThiHoaDonNhap":
            include "./hoadonnhap/hienThiHoaDonNhap.php";
            break;
        case "themHoaDonNhap":
            include "./hoadonnhap/themHoaDonNhap.php";
            break;
        case "xemHDN":
            include "./chitietHDN/chiTietHDN.php";
            break;
        case "suaHDN":
            include "./hoadonnhap/suaHoaDonNhap.php";
            break;
            /*----------------Quản lý tin tức----------*/
        case "hienThiTinTuc":
            include "./tintuc/hienThiTinTuc.php";
            break;
        case "themTinTuc":
            include "./tintuc/themTinTuc.php";
            break;
        case "suaTinTuc":
            include "./tintuc/suaTinTuc.php";
            break;
        case "xoaTinTuc":
            include "./tintuc/xoaTinTuc.php";
            break;
            /*----------------Quản lý loại----------*/
        case "hienThiLoai":
            include "./loaisp/hienThiLoaiSP.php";
            break;
            /*----------------Quản lý nhà cung cấp----------*/
        case "hienThiNCC":
            include "./nhacungcap/hienThiNCC.php";
            break;
        case "themNCC":
            include "./nhacungcap/themNCC.php";
            break;
        case "suaNCC":
            include "./nhacungcap/suaNCC.php";
            break;
        case "xoaNCC":
            include "./nhacungcap/xoaNCC.php";
            break;
    }
} else {
    include './baocao/baoCao.php';
}
