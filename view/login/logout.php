<?php
// Tạo biến session để lưu trữ thông tin đăng nhập
//session_start();
header("Location: ../../index.php");
// Kiểm tra nếu người dùng đã đăng nhập
if (isset($_SESSION['username'])&& isset($_POST['password'])&& isset($_POST['loaiUser'])) {

    // Xóa biến session
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['loaiUser']);

    // Hiển thị thông báo xác nhận đăng xuất
    echo "<script>alert('Bạn đã đăng xuất thành công');</script>";
 // Chuyển hướng người dùng đến trang đăng nhập
 
    

} else {

    // Người dùng chưa đăng nhập
    echo "Bạn chưa đăng nhập";
    header("Location: index.php");
}
?>