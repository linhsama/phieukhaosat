<?php
    $id_dot = $dotkhaosat->dotkhaosat__Get_Last()->id_dot;

    if(isset($_GET['id_dot'])){
        $id_dot = $_GET['id_dot'];
    }
    if($phannhom->phannhom__Get_By_Id($_SESSION["user"]->id_phan_nhom)->cap_bac == 2){
        $sinhvien__Get_By_Id = $sinhvien->sinhvien__Get_By_Id($_SESSION["user"]->id_nguoi_dung);
        if($sinhvien__Get_By_Id->chuc_vu == 0){
           echo "<script>location.href='../user/index.php?page=sinh-vien&id_dot=$id_dot'</script>";
        }
    }
     if($phannhom->phannhom__Get_By_Id($_SESSION["user"]->id_phan_nhom)->cap_bac == 3){
        echo "<script>location.href='../user/index.php?page=giang-vien&id_dot=$id_dot'</script>";
    }
?>