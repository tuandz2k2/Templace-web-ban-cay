<div class="content-wrapper">
    <section class="content-header">
        <h1>Danh sách hóa đơn nhập</h1>
        <div class="breadcrumb">

            <a class="btn btn-primary btn-sm" href="?admin=themHoaDonNhap" role="button">
                <span class="glyphicon glyphicon-plus"></span> Thêm mới
            </a>
            <a class="btn btn-primary btn-sm dropdown-toggle" href="">
                Xuất Exel

            </a>
        </div>
    </section>
    <!-- Main coupon -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box" id="view">
                    <div class="box-header with-border">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row" style='padding:0px; margin:0px;'>
                                <!--ND-->
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Mã hóa đơn nhập </th>
                                                <th class="text-center">Ngày tạo</th>
                                                <th class="text-center">Tổng tiền </th>
                                                <th class="text-center">Mã số thuế</th>
                                                <th class="text-center">Ghi chú</th>
                                                <th class="text-center">Phương thức thanh toán</th>
                                                <th class="text-center">Giảm giá </th>
                                                <th class="text-center">Trạng thái</th>
                                                <th class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../../controller/HoaDonNhapController.php';
                                           
                                           // lấy số trang hiện tại
                                            $currentPage=$_GET['page'];
                                            //gọi đến controller
                                            $hdn = new HoaDonNhapController();
                                            $listHDN = $hdn->getListHDN($currentPage);
                                             /*Hiển thị danh sách hóa đơn nhập*/
                                             foreach ($listHDN as $i) {
                                                $str = '<tr>'
                                                    . '<td class="text-center">' . $i->getMaHDN() . '</td>'
                                                    . '<td class="text-center">' . $i->getNgayTao() . '</td>' 
                                                    . '<td class="text-center">' . $i->getTongTienHD() . '</td>' 
                                                    . '<td class="text-center">' . $i->getMaSoThue() . '</td>'
                                                    . '<td class="text-center">' . $i->getGhiChu() . '</td>'
                                                    . '<td class="text-center">' . $i->getPTThanhToan() . '</td>'
                                                    . '<td class="text-center">' . $i->getGiamGiaHD() . '</td>'
                                                    . '<td class="text-center">' . $i->getTrangThai() . '</td>' 
                                                          
                                                    . "<td><a class='btn btn-success btn-xs' href='?admin=xemHDN&MaHDN=" . $i->getMaHDN() . "'>Xem</a></td>
                                                <td>
                                                <a class='btn btn-danger btn-xs' href='?admin=suaHDN&MaHDN=" . $i->getMaHDN() . "'>Sửa</a>
                                                </td>
                                                </tr>";
                                                echo $str;
                                            }  
                                            ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <ul class="pagination">
                                            <!-- --------------------------------Phân trang----------------------------------- -->
                                             <?php
                                             $n = round($hdn->sumPage()/10);
                                            echo '<li><a href="?admin=hienThiHoaDonNhap&page=' .( $currentPage>=2?$currentPage-1:$currentPage) . '"> <</a></li>';
                                            for ($i = 1; $i <= ($n+1) ;$i++){
                                                $str = '<li><a href="?admin=hienThiHoaDonNhap&page=' . $i . '">' . $i . '</a></li>';
                                                if($i>5&& $i<round($sp->sumPage('nhanvien') / 10)){
                                                    $str = '<li>...</li>';
                                                    $str = '<li><a href="?admin=hienThiHoaDonNhap&page=' . $n . '">' . $n . '</a></li>';
                                                    echo $str;
                                                    break;
                                                }
                                                echo $str;
                                            }
                                            echo '<li><a href="?admin=hienThiHoaDonNhap&page=' . ($currentPage>= $n?$currentPage:$currentPage+1). '">></a></li>'; 
                                            ?> 
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.ND -->
                            </div>
                        </div>
                        <!-- ./box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.coupon -->
</div>