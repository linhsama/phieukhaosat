<?php

    require '../../models/getModel.php';
    $href = $_SERVER["HTTP_REFERER"];
    if(strlen(strpos($href, "&status")) > 0){
        $href = explode("&status", $href)[0];
    }
    if (isset($_GET['req'])){
        switch($_GET['req']){
            case 'add':
                $status  = 0;
                $id_dot = $_POST['id_dot'];
                $id_phan_nhom = $_POST['id_phan_nhom'];
                $phieukhaosat__Get_By_Id_Dot_And_Id_Phan_Nhom = $phieukhaosat->phieukhaosat__Get_By_Id_Dot_And_Id_Phan_Nhom($id_dot, $id_phan_nhom);

                if($phannhom->phannhom__Get_By_Id($id_phan_nhom)->cap_bac == 2){

                    foreach($phieukhaosat__Get_By_Id_Dot_And_Id_Phan_Nhom as $item){
                        $arr = $phieukhaosat->phieukhaosat__Get_Ket_Qua($item->kq_ks);
                        $muc_1 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 1);
                        $muc_2 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 2);
                        $muc_3 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 3);
                        $muc_4 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 4);
                        $muc_5 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 5);
                        $gop_y = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, -1);

    
                        $sinhvien__Get_By_Id = $sinhvien->sinhvien__Get_By_Id($item->id_doi_tuong);
                        $lophoc__Get_By_Id = $lophoc->lophoc__Get_By_Id($sinhvien__Get_By_Id->id_lop_hoc);
    
                        $status += $ketquasinhvien->ketquasinhvien__Add($item->id_phieu, $sinhvien__Get_By_Id->id_sinh_vien, $lophoc__Get_By_Id->id_lop_hoc, $id_dot, $sinhvien__Get_By_Id->ma_sinh_vien, $sinhvien__Get_By_Id->ten_sinh_vien, $lophoc__Get_By_Id->ten_lop_hoc, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, date("Y-m-d H:i:s"));
                    }
                    
                if($status != "0" ){
                    header("location: ../index.php?page=quan-ly-ket-qua-sinh-vien&id_dot=$id_dot&id_lop_hoc=$lophoc__Get_By_Id->id_lop_hoc&status=success");
                }else{
                    header("location: $href&status=failed");
                }
                }
                if($phannhom->phannhom__Get_By_Id($id_phan_nhom)->cap_bac == 3){
                    foreach($phieukhaosat__Get_By_Id_Dot_And_Id_Phan_Nhom as $item){
                        
                        $arr = $phieukhaosat->phieukhaosat__Get_Ket_Qua($item->kq_ks);
                        $muc_1 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 1);
                        $muc_2 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 2);
                        $muc_3 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 3);
                        $muc_4 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 4);
                        $muc_5 = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, 5);
                        $gop_y = $phieukhaosat->phieukhaosat__Get_Sum_Ket_Qua($arr, -1);

    
                        $giangvien__Get_By_Id = $giangvien->giangvien__Get_By_Id($item->id_doi_tuong);
                        $khoa__Get_By_Id = $khoa->khoa__Get_By_Id($giangvien__Get_By_Id->id_khoa);
    
                        $status += $ketquagiangvien->ketquagiangvien__Add($item->id_phieu, $giangvien__Get_By_Id->id_giang_vien, $khoa__Get_By_Id->id_khoa, $id_dot, $giangvien__Get_By_Id->ma_giang_vien, $giangvien__Get_By_Id->ten_giang_vien, $khoa__Get_By_Id->ten_khoa, $muc_1, $muc_2, $muc_3, $muc_4, $muc_5, $gop_y, date("Y-m-d H:i:s"));
                    }
                         
                if($status != "0" ){
                    header("location: ../index.php?page=quan-ly-ket-qua-giang-vien&id_dot=$id_dot&id_khoa=$khoa__Get_By_Id->id_khoa&status=success");
                }else{
                    header("location: $href&status=failed");
                }
                }
              
                

                
                break;
        }
    }

?>