<?php
include_once '../../database/DB.php';

include '../../model/ChiTietHDB.php';
include '../../model/HoaDonBan.php';
include '../../model/NhaCungCap.php';

include '../../model/SanPham.php';
class HoaDonBanController
{
    private $listHDB = [];
    private $listNCC = [];
    private $ctHDB = [];
    private $listSP = [];
    /*----------------Tạo mã hóa đơn bán tự động--------------*/

    public function autoMaHDB()
    {
        //khởi tạo database và kết nối
        $db = new DB();
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM HoaDonBan;";
        $result = $db->executeSQL($sql);

        if ($result->num_rows >= 10) {
            $maHDB = "HDB" . ($result->num_rows + 1);
            return $maHDB;
        } else {
            $maHDB = "HDB0" . ($result->num_rows + 1);
            return $maHDB;
        }
    }
    /*----------------Tạo mã chi tiết hóa đơn bán tự động--------------*/

      public function autoMaCTHDB()
      {
          //khởi tạo database và kết nối
          $db = new DB();
          //câu lện sql cần thực thi
          $sql = "SELECT * FROM chitietHDB;";
          $result = $db->executeSQL($sql);
  
          if ($result->num_rows >= 10) {
              $maCTHDB = "CTHDB" . ($result->num_rows + 1);
              return $maCTHDB;
          } else {
              $maCTHDB = "CTHDB0" . ($result->num_rows + 1);
              return $maCTHDB;
          }
      }
    /*----------------Tính tổng hóa đơn bán --------------*/

    public function sumPage()
    {
        //khởi tạo database và kết nối
        $db = new DB();
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM HoaDonBan;";
        $result = $db->executeSQL($sql);
        return $result->num_rows;
    }

    /*----------------Lấy danh sách hóa đơn bán -------------*/
    public function getListHDB($page)
    {
        $db = new DB();
        $record_page = 10;
        $numberPage = ($page - 1) * $record_page;
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM HoaDonBan LIMIT $numberPage, $record_page;";
        $result = $db->executeSQL($sql);

        //push các bản ghi vào list hóa đơn bán
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                array_push($this->listHDB, new HoaDonBan(
                    $row["MaHDB"],
                    $row["NgayTao"],
                    $row["TongTienHD"],
                    $row["MaSoThue"],
                    $row["GhiChu"],
                    $row["PTThanhToan"],
                    $row["GiamGiaHD"],
                    $row["TrangThai"],
                    $row["MaNV"],
                    $row["MaNCC"]
                ));
            }
        } else {
            echo "Không có hóa đơn bán nào.";
        }
        return $this->listHDB;
    }
    /*----------------Lấy 1 hóa đơn bán -------------*/
    public function getHDB($maHDB)
    {
        $db = new DB();

        //câu lện sql cần thực thi
        $sql = "SELECT * FROM HoaDonBan WHERE MaHDB='$maHDB';";
        $result = $db->executeSQL($sql);

        //push các bản ghi vào list hóa đơn bán
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                return new HoaDonBan(
                    $row["MaHDB"],
                    $row["NgayTao"],
                    $row["TongTienHD"],
                    $row["MaSoThue"],
                    $row["GhiChu"],
                    $row["PTThanhToan"],
                    $row["GiamGiaHD"],
                    $row["TrangThai"],
                    $row["MaNV"],
                    $row["MaNCC"]
                );
            }
        } else {
            echo "Không có hóa đơn bán nào.";
        }
        return $this->listHDB;
    }
     /*----------------Lấy 1 thông tin nhà cung cấp của hóa đơn bán -------------*/
   
    public function getNCC($MaNCC)
    {
        //khởi tạo database và kết nối
        $db = new DB();
        //câu lện sql cần thực thi
       $sql = "SELECT * FROM NhaCungCap WHERE MaNCC='$MaNCC';";
       $result = $db->executeSQL($sql);
        
       //trả về 1 Nhà cung cấp với tham số là mã Nhà cung cấp
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               return new NhaCungCap(
                   $row["MaNCC"],
                   $row["TenNCC"],
                   $row["phone"],
                   $row["email"],
                   $row["diaChi"],
                   $row["ghiChu"]       
                );
                
            }
        } else {
            echo "Không có Nhà cung cấp nào.";
           return false;
        }
      
        
       
    }
    /*----------------chi tiết hóa đơn -------------*/
    public function getChiTietDHN($maHDB)
    {
        $db = new DB();
        //câu lện sql cần thực thi
        $sql = "SELECT * FROM HoaDonBan JOIN chitietHDB ON HoaDonBan.MaHDB=chitietHDB.MaHDB
         WHERE HoaDonBan.MaHDB='$maHDB';";
          $result = $db->executeSQL($sql);
        //push các bản ghi vào list hóa đơn bán
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($this->ctHDB, new ChiTietHDB(
                    $row["MaHDB"],
                    $row["MaCTHDB"],  
                    $row["MaSP"],
                    $row["SoLuong"], 
                ));
            }
        } 
        return $this->ctHDB;
    }
     /*----------------lấy danh sách sản phẩm trong chi tiết sản phẩm-------------*/
 
    public function getListSP($maHDB){
        $db = new DB();
        $sql = "SELECT * FROM chitietHDB
        JOIN sanpham ON chitietHDB.MaSP=sanpham.MaSP 
        WHERE chitietHDB.MaHDB='$maHDB';";
         $result = $db->executeSQL($sql);
       //push các bản ghi vào list hóa đơn bán
       if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
               array_push($this->listSP, new SanPham(
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
       }
        return $this->listSP;
    }
    /*----------------lấy danh sách sản phẩm-------------*/
    public function getAllSP(){
        $db = new DB();
        $sql = "SELECT * FROM sanpham;";
         $result = $db->executeSQL($sql);
       //push các bản ghi vào list hóa đơn bán
       if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
               array_push($this->listSP, new SanPham(
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
       }
        return $this->listSP;
    }
    /*----------------Lấy danh sách Nhà cung cấp--------------*/
      public function getAllNCC()
      {
         
          //khởi tạo database và kết nối
          $db = new DB();
          //câu lện sql cần thực thi
           $sql = "SELECT * FROM nhacungcap;";
            $result = $db->executeSQL($sql);
          echo $sql;
          //push các bản ghi vào list Nhà cung cấp
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  array_push($this->listNCC, new NhaCungCap(
                      $row["MaNCC"],
                      $row["TenNCC"],
                      $row["phone"],
                      $row["email"],
                      $row["diaChi"],
                      $row["ghiChu"]  
                  ));
                  
              }
          } else {
              echo "Không có Nhà cung cấp nào.";
          }
        
           return $this->listNCC;
         
      }
    /*----------------Thêm hóa đơn mới--------------*/
    public function insertHDB($MaHDB, $NgayTao, $TongTienHD, $MaSoThue, $PTThanhToan, $TrangThai, $GiamGiaHD, $GhiChu, $MaNCC, $MaNV, $MaCTHDB, $MaSP, $SoLuong)
    {
        //khởi tạo database và kết nối
        $db = new DB();
        //câu lện sql cần thực thi
        $sql = "INSERT INTO 
         `HoaDonBan`(`MaHDB`, `NgayTao`, `TongTienHD`, `MaSoThue`, `PTThanhToan`, `TrangThai`, `GiamGiaHD`, `GhiChu`, `MaNCC`, `MaNV`) 
         VALUES ('$MaHDB','$NgayTao','$TongTienHD','$MaSoThue','$PTThanhToan','$TrangThai','$GiamGiaHD','$GhiChu','$MaNCC','$MaNV');";
         $sql1=" INSERT INTO `chitietHDB`(`MaHDB`, `MaCTHDB`, `MaSP`, `SoLuong`) VALUES ('$MaHDB','$MaCTHDB','$MaSP','$SoLuong');";
          $result = $db->executeSQL($sql);
          $result1 = $db->executeSQL($sql1);
        echo $sql;
       if($result1){
            return true;
       }
       
            return false;
       
    }
}
?>
