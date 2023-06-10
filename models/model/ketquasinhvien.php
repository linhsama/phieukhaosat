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

class ketquasinhvien extends Database {

    public function ketquasinhvien__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM ketquasinhvien");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function ketquasinhvien__Add($id_phieu, $id_sinh_vien, $id_lop_hoc, $id_dot, $ma_sinh_vien, $ten_sinh_vien, $ten_lop_hoc, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke) {
        $obj = $this->connect->prepare("INSERT INTO ketquasinhvien(id_phieu, id_sinh_vien, id_lop_hoc, id_dot, ma_sinh_vien, ten_sinh_vien, ten_lop_hoc, muc_1, muc_2, muc_3, muc_4, muc_5, gop_y, ngay_thong_ke) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($id_phieu, $id_sinh_vien, $id_lop_hoc, $id_dot, $ma_sinh_vien, $ten_sinh_vien, $ten_lop_hoc, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke));
        return $obj->rowCount();
    }

    public function ketquasinhvien__Update($id_ket_qua, $id_phieu, $id_sinh_vien, $id_lop_hoc, $id_dot, $ma_sinh_vien, $ten_sinh_vien, $ten_lop_hoc, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke) {
        $obj = $this->connect->prepare("UPDATE ketquasinhvien SET id_phieu=?, id_sinh_vien=?, id_lop_hoc=?, id_dot=?, ma_sinh_vien=?, ten_sinh_vien=?, ten_lop_hoc=?, muc_1=?, muc_2=?, muc_3=?, muc_4=?, muc_5=?,  gop_y=?, ngay_thong_ke=? WHERE id_ket_qua=?");
        $obj->execute(array($id_phieu, $id_sinh_vien, $id_lop_hoc, $id_dot, $ma_sinh_vien, $ten_sinh_vien, $ten_lop_hoc, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke, $muc_2, $muc_3, $muc_4, $muc_5, $id_ket_qua));
        return $obj->rowCount();
    }
    

    public function ketquasinhvien__Delete($id_ket_qua) {
        $obj = $this->connect->prepare("DELETE FROM ketquasinhvien WHERE id_ket_qua= ?");
        $obj->execute(array($id_ket_qua));
        return $obj->rowCount();
    }

  
    public function ketquasinhvien__Get_By_Id($id_ket_qua) {
        $obj = $this->connect->prepare("SELECT * FROM ketquasinhvien WHERE id_ket_qua = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_ket_qua));
        return $obj->fetch();
    }


    public function ketquasinhvien__Get_By_Id_Lop_Hoc_And_Id_Dot($id_lop_hoc, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM ketquasinhvien WHERE id_lop_hoc=? AND id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lop_hoc, $id_dot));
        return $obj->fetchAll();
    }

    public function ketquasinhvien__Get_By_Id_Phieu($id_lop_hoc, $id_dot, $id_sinh_vien) {
        $obj = $this->connect->prepare("SELECT * FROM ketquasinhvien WHERE id_lop_hoc=? AND id_dot=? AND id_sinh_vien=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lop_hoc, $id_dot, $id_sinh_vien));
        return $obj->fetch();
    }

    public function ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,  $muc) {
        $obj = $this->connect->prepare("SELECT count(*) as sum_so_luong FROM ketquasinhvien WHERE id_dot=? AND id_lop_hoc=? AND muc_1 != ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $id_lop_hoc, 0));
        return $obj->fetch();
    }

    

    public function ketquasinhvien__Get_By_Id_Dot_All($id_dot, $id_lop_hoc) {
        $obj = $this->connect->prepare("SELECT COUNT(*) as sum FROM ketquasinhvien WHERE id_dot=? AND id_lop_hoc=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $id_lop_hoc));
        return $obj->fetch();
    }
}
?>