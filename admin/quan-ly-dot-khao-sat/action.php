<?php

    require '../../models/getModel.php';
    
    if (isset($_GET['req'])){
        switch($_GET['req']){
            case 'add':
                $status  = 0;
                $ten_dot = $_POST['ten_dot'];
                $ghi_chu = $_POST['ghi_chu'];
                $thoi_gian_bat_dau = $_POST['thoi_gian_bat_dau'];
                $thoi_gian_ket_thuc = $_POST['thoi_gian_ket_thuc'];
                $id_hoc_ky = $_POST['id_hoc_ky'];

                $id_phan_nhom = $_POST['id_phan_nhom'];
                $id_mau_phieu = $_POST['id_mau_phieu'];

                $id_dot = $dotkhaosat->dotkhaosat__Add($ten_dot, $ghi_chu, $thoi_gian_bat_dau, $thoi_gian_ket_thuc, $id_hoc_ky);
                $status .= $id_dot;
                foreach($id_phan_nhom as $item_1){
                    $id_nhom_ap_dung = $nhomapdung->nhomapdung__Add($id_dot, $id_mau_phieu, $item_1);

                    
                        if($phannhom->phannhom__Get_By_Id($item_1)->cap_bac == 2){
                        
                            $sinhvien__Get_All = $sinhvien->sinhvien__Get_All();
                            $status .= count($sinhvien__Get_All);
        
                            foreach($sinhvien__Get_All as $item){
                                $status .= $phieukhaosat->phieukhaosat__Add($id_nhom_ap_dung, $item->id_sinh_vien, $item_1, "", date("Y-m-d"));
                            }
                    }
                    if($phannhom->phannhom__Get_By_Id($item_1)->cap_bac == 3){
                        
                            $giangvien__Get_All = $giangvien->giangvien__Get_All();
                            $status .= count($giangvien__Get_All);
        
                            foreach($giangvien__Get_All as $item){
                                $status .= $phieukhaosat->phieukhaosat__Add($id_nhom_ap_dung, $item->id_giang_vien, $item_1, "", date("Y-m-d"));
                            }
                    }
                }
                  
            
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-dot-khao-sat&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-dot-khao-sat&status=failed');
                }
                
                break;
            case 'update':
                $status  = 0;
                $id_dot = $_POST['id_dot'];
                $ten_dot = $_POST['ten_dot'];
                $ghi_chu = $_POST['ghi_chu'];
                $thoi_gian_bat_dau = $_POST['thoi_gian_bat_dau'];
                $thoi_gian_ket_thuc = $_POST['thoi_gian_ket_thuc'];
                $id_hoc_ky = $_POST['id_hoc_ky'];


                $status += $dotkhaosat->dotkhaosat__Update($id_dot, $ten_dot, $ghi_chu, $thoi_gian_bat_dau, $thoi_gian_ket_thuc, $id_hoc_ky);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-dot-khao-sat&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-dot-khao-sat&status=failed');
                }
                
                break;

            case 'delete':

                $id_dot = $_GET['id_dot'];

                $status = $nhomapdung->nhomapdung__Delete_By_Id_Dot($id_dot);
                $status = $dotkhaosat->dotkhaosat__Delete($id_dot);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-dot-khao-sat&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-dot-khao-sat&status=failed');
                }
                
                break;
        }
    }

?>