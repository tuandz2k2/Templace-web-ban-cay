<?php

include '../../database/DB.php';
include '../../model/SanPham.php';
include '../../model/LoaiSP.php';
class SanPhamController
{
    private $listProduct = [];
    private $listLoai = [];
    public function getListProduct()
    {
        return $this->listProduct;
    }
    /*----------------Tạo mã sản phẩm tự động--------------*/
    public function autoMaSP()
    {
        //khởi tạo database và kết nối
        $db = new DB();
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM sanpham;";
        $result = $db->executeSQL($sql);
        if ($result->num_rows >= 10) {
            $maSP = "SP" . ($result->num_rows + 1);
            return $maSP;
        } else {
            $maSP = "SP0" . $result->num_rows;
            return $maSP;
        }
    }
    /*----------------Tạo mã sản phẩm tự động--------------*/
    public function sumPage($nameTable)
    {
        //khởi tạo database và kết nối
        $db = new DB();
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM $nameTable;";
        $result = $db->executeSQL($sql);
        return $result->num_rows;
    }
    /*----------------Lấy tất cả sản phẩm--------------*/
    /*
     * $numberPage : index page đầu vd: lấy 10->20 thì index page sẽ là 10
     * $record_page: số lượng sản phẩm của mỗi page
     */
    public function getAllProduct($page)
    {

        //khởi tạo database và kết nối
        $db = new DB();
        $record_page = 8;
        $numberPage = ($page - 1) * $record_page;
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM sanpham LIMIT $numberPage, $record_page;";
        $result = $db->executeSQL($sql);

        //push các bản ghi vào listProduct
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($this->listProduct, new SanPham(
                    $row["MaSP"],
                    $row["TenSP"],
                    $row["ThoiGianBH"],
                    $row["MoTaSP"],
                    $row["AnhDaiDien"],
                    $row["DonGiaBan"],
                    $row["NgayNhap"],
                    $row["DonGiaNhap"],
                    $row["MaLoai"],
                    $row["GhiChu"],
                    $row["donViTinh"]
                ));
            }
        } else {
            echo "Không có sản phẩm nào.";
        }

        return $this->listProduct;
    }
    public function getAllProduct1()
    {

        //khởi tạo database và kết nối
        $db = new DB();
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM sanpham ;";
        $result = $db->executeSQL($sql);

        //push các bản ghi vào listProduct
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($this->listProduct, new SanPham(
                    $row["MaSP"],
                    $row["TenSP"],
                    $row["ThoiGianBH"],
                    $row["MoTaSP"],
                    $row["AnhDaiDien"],
                    $row["DonGiaBan"],
                    $row["NgayNhap"],
                    $row["DonGiaNhap"],
                    $row["MaLoai"],
                    $row["GhiChu"],
                    $row["donViTinh"]
                ));
            }
        } else {
            echo "Không có sản phẩm nào.";
        }

        return $this->listProduct;
    }
    /*----------------Sửa sản phẩm--------------*/
    function editProduct($product)
    {
        // $sql = "UPDATE sanpham
        // SET TenSP = ".$product->TenSP
        // ."', ThoiGianBH = '".$product->ThoiGianBH
        // ."', MoTaSP = '".$product->MoTaSP
        // ."', AnhDaiDien = '".$product->AnhDaiDien
        // ."', DonGiaBan = '".$product->DonGiaBan
        // ."', NgayNhap = '".$product->NgayNhap
        // ."', SLTon = '".$product->SLTon
        // ."', MaLoai = '".$product->MaLoai
        // ."', GhiChu = '".$product->GhiChu
        // ."'WHERE MaSP = '".$product->MaSP."';";
        // echo $sql;
        // $db = new DB();
        // $db->executeSQL($sql);

    }
    /*----------------Thêm sản phẩm--------------*/
    function insertProduct($product)
    {
        $masp = $this->autoMaSP();
        $sql = "INSERT INTO `sanpham`(`MaSP`, `TenSP`, `ThoiGianBH`, `AnhDaiDien`, `MoTaSP`, `DonGiaBan`, `NgayNhap`, `SLTon`, `GhiChu`, `MaLoai`) VALUES ('
        " . $masp
            . "','" . $product->TenSP
            . "','" . $product->ThoiGianBH
            . "','" . $product->AnhDaiDien
            . "','" . $product->MoTaSP
            . "','" . $product->DonGiaBan
            . "','" . $product->NgayNhap
            . "','" . $product->SLTon
            . "','" . $product->GhiChu
            . "','" . $product->MaLoai
            . "');";
        $db = new DB();
        $db->executeSQL($sql);
    }
    /*----------------Xóa sản phẩm--------------*/
    //   function deleteProduct($id)
    //   {

    //       $sql= "DELETE FROM `sanpham` WHERE MaSP=".$id." ;";
    //       $db = new DB();
    //     $sql += "SELECT * FROM sanpham;";

    //       $db->executeSQL($sql);
    //       
    //   }
    public function getLoaiSP()
    {
        //khởi tạo database và kết nối
        $db = new DB();

        //câu lện sql cần thực thi
        $sql = "SELECT * FROM LoaiSP ;";
        $result = $db->executeSQL($sql);

        //push các bản ghi vào list Loai
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($this->listLoai, new LoaiSP(
                    $row["MaLoai"],
                    $row["Loai"]

                ));
            }
        } else {
            echo "Không có tin tức nào.";
        }

        return $this->listLoai;
    }
}
