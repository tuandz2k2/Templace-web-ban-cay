<?php

include_once '../../controller/NhaCungCapController.php';
if (isset($_POST['tenNCC'])) {
    // Lấy dữ liệu từ các trường nhập liệu của nhà cung cấp
    $tenNCC = $_POST['tenNCC'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $diaChi = $_POST['address'];
    $ghiChu = $_POST['ghiChu'];
    $ncc = new NhaCungCapController();
    $maNCC = $ncc->autoMaNCC();
    
    //Kiểm tra xem dữ liệu đã nhập có hợp lệ hay không
    if ($tenNCC == '' || $email == '' || $phone == '') {
        echo '<div class="alert alert-danger">Vui lòng nhập đầy đủ thông tin nhà cung cấp.</div>';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger">Email không hợp lệ.</div>';
    } else {
        // Thêm nhà cung cấp mới vào cơ sở dữ liệu
        $ncc->insertNCC($MaNCC, $TenNCC, $phone, $email, $diaChi, $ghiChu);
        if($insert){
            echo "<script>alert('Thêm thành công');</script>";

        }
        else{
            echo "<script>alert('Thêm thất bại');</script>";

        }
       // Chuyển hướng đến trang danh sách nhà cung cấp
       header('Location: index.php?admin=hienThiNCC');
    }
}
?>
<div class="content-wrapper">
    <form action="admin.php?admin=themNCC" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
        <section class="content-header">
            <h1> Thêm nhà cung cấp</h1>
            <div class="breadcrumb">
                <button type="submit" class="btn btn-primary btn-sm">
                    Lưu [Thêm]
                </button>
                <a class="btn btn-primary btn-sm" href="?admin=hienThiNCC" role="button">
                    Thoát
                </a>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box" id="view">
                        <div class="box-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <label>Tên nhà cung cấp <span class="maudo">(*)</span></label>
                                    <input type="text" class="form-control" name="tenNCC" style="width:100%" >
                                    <div class="error" id="password_error"></div>
                                </div>
                                <div class="form-group">
                                    <label>Username <span class="maudo">(*)</span></label>
                                    <input type="text" class="form-control" name="username" style="width:100%" >
                                    <div class="error" id="password_error"></div>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="maudo">(*)</span></label>
                                    <input type="email" class="form-control" name="email" style="width:100%" >
                                    <div class="error" id="password_error"></div>
                                </div>
                                <div class="form-group">
                                    <label>phone <span class="maudo">(*)</span></label>
                                    <input type="number" class="form-control" name="phone" style="width:100%" >
                                    <div class="error" id="password_error"></div>
                                </div>
                                
                                
                            </div>
                            <div class="col-md-4">
                               
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input name="address" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Ghi chú</label>
                                    <textarea id="my-textarea" rows="5" cols="50" name="ghiChu">
                                    </textarea>
                                 </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </form>
    <!-- /.content -->
    </form>
</div>