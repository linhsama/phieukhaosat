<?php

$a = "./models/configs/config.php";
$b = "../models/configs/config.php";
$c = "../../models/configs/config.php";
$d = "../../../models/configs/config.php";
$e = "../../../../models/configs/config.php";

if (file_exists($a)) {
    $des = $a;
}
if (file_exists($b)) {
    $des = $b;
}
if (file_exists($c)) {
    $des = $c;
} 
if (file_exists($d)) {
    $des = $d;
} 

if (file_exists($e)) {
    $des = $e;
} 
include_once($des);

class giangvien extends Database {

    public function giangvien__Get_All($trang_thai = 1) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien WHERE trang_thai = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($trang_thai));
        return $obj->fetchAll();
    }
    
    public function giangvien__Get_All_Not_Exits($id_lop_hoc) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien, phancong WHERE giangvien.id_giang_vien = phancong.id_giang_vien AND phancong.id_lop_hoc =?  AND giangvien.id_giang_vien NOT IN (SELECT id_nguoi_dung FROM taikhoan, phannhom WHERE taikhoan.id_phan_nhom = phannhom.id_phan_nhom AND cap_bac = ?)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lop_hoc, 4));
        return $obj->fetchAll();
    }
    public function giangvien__Add($ma_giang_vien, $ten_giang_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do) {
        $obj = $this->connect->prepare("INSERT INTO giangvien(ma_giang_vien, ten_giang_vien, gioi_tinh, ngay_sinh, email, so_dien_thoai_1, so_dien_thoai_2, dia_chi_lien_lac, dia_chi_thuong_tru, id_trinh_do) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($ma_giang_vien, $ten_giang_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do));
        return $obj->rowCount();
    }

    public function giangvien__Update($id_giang_vien, $ma_giang_vien, $ten_giang_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do) {
        $obj = $this->connect->prepare("UPDATE giangvien SET ma_giang_vien=?, ten_giang_vien=?, gioi_tinh=?, ngay_sinh=?, email=?, so_dien_thoai_1=?, so_dien_thoai_2=?, dia_chi_lien_lac=?, dia_chi_thuong_tru=?, id_trinh_do=? WHERE id_giang_vien=?");
        $obj->execute(array($ma_giang_vien, $ten_giang_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do, $id_giang_vien));
        return $obj->rowCount();
    }
    

    public function giangvien__Delete($id_giang_vien) {
        $obj = $this->connect->prepare("DELETE FROM giangvien WHERE id_giang_vien = ?");
        $obj->execute(array($id_giang_vien));
        return $obj->rowCount();
    }

  
    public function giangvien__Get_By_Id($id_giang_vien) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien WHERE id_giang_vien = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_giang_vien));
        return $obj->fetch();
    }

    public function giangvien__Get_By_Id_Trinh_Do($id_trinh_do) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien WHERE id_trinh_do = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_trinh_do));
        return $obj->fetchAll();
    }
    public function giangvien__Update_Trang_Thai($id_giang_vien, $trang_thai) {
        $obj = $this->connect->prepare("UPDATE giangvien SET trang_thai=? WHERE id_giang_vien=?");
        $obj->execute(array($trang_thai, $id_giang_vien));
        return $obj->rowCount();
    }
    public function giangvien__Get_By_Id_Lop_Hoc($id_giang_vien) {
        $obj = $this->connect->prepare("SELECT * FROM giangvien, phancong, lophoc WHERE giangvien.id_giang_vien = phancong.id_giang_vien AND phancong.id_lop_hoc = lophoc.id_lop_hoc AND giangvien.id_giang_vien = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_giang_vien));
        return $obj->fetchAll();
    }

   
}
?>