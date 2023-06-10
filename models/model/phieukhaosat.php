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

class phieukhaosat extends Database {

    public function phieukhaosat__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function phieukhaosat__Add($id_nhom_ap_dung, $id_doi_tuong, $id_phan_nhom, $kq_ks, $ngay_thuc_hien) {
        $obj = $this->connect->prepare("INSERT INTO phieukhaosat(id_nhom_ap_dung,id_doi_tuong,id_phan_nhom, kq_ks, ngay_thuc_hien) VALUES (?,?,?,?,?)");
        $obj->execute(array($id_nhom_ap_dung, $id_doi_tuong, $id_phan_nhom, $kq_ks, $ngay_thuc_hien));
        return $obj->rowCount();
    }

    public function phieukhaosat__Update($id_phieu, $id_nhom_ap_dung, $id_doi_tuong, $id_phan_nhom, $kq_ks, $ngay_thuc_hien) {
        $obj = $this->connect->prepare("UPDATE phieukhaosat SET id_nhom_ap_dung=?, id_doi_tuong=?, id_phan_nhom=?, kq_ks=?, ngay_thuc_hien=? WHERE id_phieu=?");
        $obj->execute(array ($id_nhom_ap_dung, $id_doi_tuong, $id_phan_nhom, $kq_ks, $ngay_thuc_hien, $id_phieu));
        return $obj->rowCount();
    }
    

    public function phieukhaosat__Delete($id_phieu) {
        $obj = $this->connect->prepare("DELETE FROM phieukhaosat WHERE id_phieu = ?");
        $obj->execute(array($id_phieu));
        return $obj->rowCount();
    }

  
    public function phieukhaosat__Get_By_Id($id_phieu) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_phieu = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phieu));
        return $obj->fetch();
    }

    
    public function phieukhaosat__Get_By_Id_Sinh_Vien($id_sinh_vien, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, nhomapdung, phannhom WHERE phieukhaosat.id_nhom_ap_dung = nhomapdung.id_nhom_ap_dung AND nhomapdung.id_phan_nhom = phannhom.id_phan_nhom AND phannhom.cap_bac = 2 AND id_doi_tuong =?  AND id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_sinh_vien, $id_dot));
        return $obj->fetch();
    }

    public function phieukhaosat__Get_By_Id_Giang_Vien($id_giang_vien, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, nhomapdung, phannhom WHERE phieukhaosat.id_nhom_ap_dung = nhomapdung.id_nhom_ap_dung AND nhomapdung.id_phan_nhom = phannhom.id_phan_nhom AND phannhom.cap_bac = 3 AND id_doi_tuong =?  AND id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_giang_vien, $id_dot));
        return $obj->fetch();
    }

    public function phieukhaosat__Get_By_Id_Ap_Dung($id_nhom_ap_dung) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_nhom_ap_dung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nhom_ap_dung));
        return $obj->fetchAll();
    }

    public function phieukhaosat__Get_By_Id_Dot_And_Id_Phan_Nhom($id_dot, $id_phan_nhom) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, nhomapdung  WHERE   phieukhaosat.id_nhom_ap_dung = nhomapdung.id_nhom_ap_dung  AND id_dot = ? AND nhomapdung.id_Phan_Nhom = ? GROUP BY phieukhaosat.id_phieu");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot, $id_phan_nhom));
        return $obj->fetchAll();
    }

    public function phieukhaosat__Get_Ket_Qua($req) {
        $kq = [];
        $res = explode('|', $req);
        foreach ($res as $item){
            $kq[] = $item;
        }
        return $kq;
    }

    public function phieukhaosat__Get_Sum_Ket_Qua($req, $muc_do) {
        $muc_1 = 0;
        $muc_2 = 0;
        $muc_3 = 0;
        $muc_4 = 0;
        $muc_5 = 0;
        $gop_y = "";
        $kq = 0;
        foreach ($req as $item){
            if(intval($item) == 1){
                $muc_1++;
            }else if(intval($item) == 2){
                $muc_2++;
            }else if(intval($item) == 3){
                $muc_3++;
            }else if(intval($item) == 4){
                $muc_4++;
            }else if(intval($item) == 5){
                $muc_5++;
            }else{
                $gop_y .= $item;
            }
        }
        if($muc_do == -1){
            $kq = $gop_y;
        } 
        if($muc_do == 1){
            $kq = $muc_1;
        }
        if($muc_do == 2){
            $kq = $muc_2;
        }
        if($muc_do == 3){
            $kq = $muc_3;
        }
        if($muc_do == 4){
            $kq = $muc_4;
        }
        if($muc_do == 5){
           $kq = $muc_5;
        }
        return $kq;
    }

    public function phieukhaosat__Get_Sum_Ket_Qua_Per($req, $muc_do) {
        $kq = 0;
        $sum = 0;
        foreach ($req as $item){
            if(intval($item) != -1){
                $sum++;
            }
        }
       
        $kq = floor(($muc_do/$sum));
        return $kq;
    }

   
    public function phieukhaosat__Update_KQ_KS($id_phieu, $kq_ks) {
        $obj = $this->connect->prepare("UPDATE phieukhaosat SET kq_ks=?, ngay_thuc_hien=? WHERE id_phieu=?");
        $obj->execute(array($kq_ks, date('Y-m-d'), $id_phieu));
        return $obj->rowCount();
    }
    

    public function phieukhaosat__Get_By_Id_Phan_Nhom($id_phan_nhom, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, nhomapdung WHERE phieukhaosat.id_nhom_ap_dung = nhomapdung.id_nhom_ap_dung AND nhomapdung.id_phan_nhom = ? AND id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_nhom, $id_dot));
        return $obj->fetchAll();
    }

    public function phieukhaosat__Get_By_Id_Phan_Nhom_Da_Cham($id_phan_nhom, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, nhomapdung WHERE phieukhaosat.id_nhom_ap_dung = nhomapdung.id_nhom_ap_dung AND nhomapdung.id_phan_nhom = ? AND id_dot = ? AND kq_ks !=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_nhom, $id_dot, NULL || ""));
        return $obj->fetchAll();
    }

    public function phieukhaosat__Get_By_Id_Phan_Nhom_Chua_Cham($id_phan_nhom, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, nhomapdung WHERE phieukhaosat.id_nhom_ap_dung = nhomapdung.id_nhom_ap_dung AND nhomapdung.id_phan_nhom = ? AND id_dot = ? AND kq_ks =?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_nhom, $id_dot, NULL || ""));
        return $obj->fetchAll();
    }
    public function phieukhaosat__Get_By_Id_Phan_Nhom_All($id_phan_nhom, $id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat, nhomapdung WHERE phieukhaosat.id_nhom_ap_dung = nhomapdung.id_nhom_ap_dung AND nhomapdung.id_phan_nhom = ? AND id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_nhom, $id_dot));
        return $obj->fetchAll();
    }

    
}
?>