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

class ketquagiangvien extends Database {

    public function ketquagiangvien__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM ketquagiangvien");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function ketquagiangvien__Add($id_phieu, $id_giang_vien, $id_khoa, $id_dot, $ma_giang_vien, $ten_giang_vien, $ten_khoa, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke) {
        $obj = $this->connect->prepare("INSERT INTO ketquagiangvien(id_phieu, id_giang_vien, id_khoa, id_dot, ma_giang_vien, ten_giang_vien, ten_khoa, muc_1, muc_2, muc_3, muc_4, muc_5, gop_y, ngay_thong_ke) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($id_phieu, $id_giang_vien, $id_khoa, $id_dot, $ma_giang_vien, $ten_giang_vien, $ten_khoa, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke));
        return $obj->rowCount();
    }

    public function ketquagiangvien__Update($id_ket_qua, $id_phieu, $id_giang_vien, $id_khoa, $id_dot, $ma_giang_vien, $ten_giang_vien, $ten_khoa, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke) {
        $obj = $this->connect->prepare("UPDATE ketquagiangvien SET id_phieu=?, id_giang_vien=?, id_khoa=?, id_dot=?, ma_giang_vien=?, ten_giang_vien=?, ten_khoa=?, muc_1=?, muc_2=?, muc_3=?, muc_4=?, muc_5=?,  gop_y=?, ngay_thong_ke=? WHERE id_ket_qua=?");
        $obj->execute(array($id_phieu, $id_giang_vien, $id_khoa, $id_dot, $ma_giang_vien, $ten_giang_vien, $ten_khoa, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, $ngay_thong_ke, $muc_2, $muc_3, $muc_4, $muc_5, $id_ket_qua));
        return $obj->rowCount();
    }
    

    public function ketquagiangvien__Delete($id_ket_qua) {
        $obj = $this->connect->prepare("DELETE FROM ketquagiangvien WHERE id_ket_qua= ?");
        $obj->execute(array($id_ket_qua));
        return $obj->rowCount();
    }

  
    public function ketquagiangvien__Get_By_Id($id_ket_qua) {
        $obj = $this->connect->prepare("SELECT * FROM ketquagiangvien WHERE id_ket_qua = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_ket_qua));
        return $obj->fetch();
    }


    public function ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot($id_khoa, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM ketquagiangvien WHERE id_khoa=? AND id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_khoa, $id_dot));
        return $obj->fetchAll();
    }

    public function ketquagiangvien__Get_By_Id_Phieu($id_khoa, $id_dot, $id_giang_vien) {
        $obj = $this->connect->prepare("SELECT * FROM ketquagiangvien WHERE id_khoa=? AND id_dot=? AND id_giang_vien=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_khoa, $id_dot, $id_giang_vien));
        return $obj->fetch();
    }

    public function ketquagiangvien__Get_By_Id_Dot($id_dot, $id_khoa) {
        $obj = $this->connect->prepare("SELECT count(*) as sum_so_luong FROM ketquagiangvien WHERE id_dot=? AND id_khoa=? AND muc_1 != ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $id_khoa, 0));
        return $obj->fetch();
    }


    public function ketquagiangvien__Get_By_Id_Dot_All($id_dot, $id_khoa) {
        $obj = $this->connect->prepare("SELECT COUNT(*) as sum FROM ketquagiangvien WHERE id_dot=? AND id_khoa=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $id_khoa));
        return $obj->fetch();
    }
}
?>