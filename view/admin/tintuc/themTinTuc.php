<?php
include_once '../../controller/TinTucController.php';
$tt = new TinTucController();  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Lấy dữ liệu từ các trường input
    $tieuDe = $_POST['tieuDe'];
    $moTaNgan = $_POST['moTaNgan'];
    $text = $_POST['text'];
    $img = $_FILES['img']['name'];
    $MaTT = $tt->autoMaTT();
    $NgayTao = $_POST['ngayTao'];
    // Lưu dữ liệu vào database
    $kq=$tt->insertNews($MaTT,$tieuDe, $moTaNgan, $text, $img,$NgayTao);
    if($kq){
        echo "<script>alert('Thêm thành công');window.location='?admin=hienThiTinTuc&page=1'</script>";
    }
    else{
        echo "<script>alert('Thêm thất bại');window.location='?admin=hienThiTinTuc&page=1'</script>";
   
    }
}                                      
?>
<div class="content-wrapper">
            <form action="?admin=themTinTuc" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                <section class="content-header">
                    <h1> Thêm bài viết mới</h1>
                    <div class="breadcrumb">
                        <button type="submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
                        <a class="btn btn-primary btn-sm" href="admin/content" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box" id="view">
                                <div class="box-body">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Tiêu đề bài viết</label>
                                            <input type="text" class="form-control" name="tieuDe" style="width:100%" placeholder="Tên bài viết">
                                            <div class="error" id="password_error"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả ngắn</label>
                                            <textarea name="moTaNgan" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày đăng:</label>
                                            <input type="date" class="form-control" name="ngayTao" style="width:100%" placeholder="Tên bài viết">
                                            </div>
                                        <div class="form-group">
                                            <label>Chi tiết bài viết</label>
                                            <textarea name="text" id="fulltext" class="form-control"></textarea>
                                            <script>
                                                CKEDITOR.replace('fulltext');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Hình đại diện</label>
                                            <input type="file" id="image_list" name="img" style="width: 100%" required>
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
        </div>