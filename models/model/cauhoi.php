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

class cauhoi extends Database {

    public function cauhoi__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM cauhoi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function cauhoi__Add($ten_cau_hoi, $is_text, $ghi_chu, $thu_tu, $id_nhom_cau_hoi) {
        $obj = $this->connect->prepare("INSERT INTO cauhoi(ten_cau_hoi, is_text, ghi_chu, thu_tu, id_nhom_cau_hoi) VALUES (?,?,?,?,?)");
        $obj->execute(array($ten_cau_hoi, $is_text, $ghi_chu, $thu_tu, $id_nhom_cau_hoi));
        return $obj->rowCount();
    }

    public function cauhoi__Update($id_cau_hoi, $ten_cau_hoi, $is_text, $ghi_chu, $thu_tu, $id_nhom_cau_hoi) {
        $obj = $this->connect->prepare("UPDATE cauhoi SET ten_cau_hoi=?, is_text=?,  ghi_chu=?, thu_tu=?, id_nhom_cau_hoi=? WHERE id_cau_hoi=?");
        $obj->execute(array($ten_cau_hoi, $is_text, $ghi_chu, $thu_tu, $id_nhom_cau_hoi, $id_cau_hoi));
        return $obj->rowCount();
    }
    

    public function cauhoi__Delete($id_cau_hoi) {
        $obj = $this->connect->prepare("DELETE FROM cauhoi WHERE id_cau_hoi = ?");
        $obj->execute(array($id_cau_hoi));
        return $obj->rowCount();
    }

  
    public function cauhoi__Get_By_Id($id_cau_hoi) {
        $obj = $this->connect->prepare("SELECT * FROM cauhoi WHERE id_cau_hoi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_cau_hoi));
        return $obj->fetch();
    }

    public function cauhoi__Get_By_Id_nhom_cau_hoi($id_nhom_cau_hoi) {
        $obj = $this->connect->prepare("SELECT * FROM cauhoi WHERE id_nhom_cau_hoi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nhom_cau_hoi));
        return $obj->fetchAll();
    }
}
?>