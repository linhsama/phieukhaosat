<?php

    require '../../models/getModel.php';
    
    if (isset($_GET['req'])){
        switch($_GET['req']){
            case 'add':

                $ten_nhom_cau_hoi = $_POST['ten_nhom_cau_hoi'];
                $ghi_chu = $_POST['ghi_chu'];
                $thu_tu = $_POST['thu_tu'];
                $id_ten_khao_sat = $_POST['id_ten_khao_sat'];

                $status = $nhomcauhoi->nhomcauhoi__Add($ten_nhom_cau_hoi, $ghi_chu,  $thu_tu, $id_ten_khao_sat);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-nhom-cau-hoi&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-nhom-cau-hoi&status=failed');
                }
                
                break;
            case 'update':

                $id_nhom_cau_hoi = $_POST['id_nhom_cau_hoi'];
                $ten_nhom_cau_hoi = $_POST['ten_nhom_cau_hoi'];
                $ghi_chu = $_POST['ghi_chu'];
                $thu_tu = $_POST['thu_tu'];
                $id_ten_khao_sat = $_POST['id_ten_khao_sat'];

                $status = $nhomcauhoi->nhomcauhoi__Update($id_nhom_cau_hoi, $ten_nhom_cau_hoi, $ghi_chu,  $thu_tu, $id_ten_khao_sat);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-nhom-cau-hoi&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-nhom-cau-hoi&status=failed');
                }
                
                break;

            case 'delete':

                $id_nhom_cau_hoi = $_GET['id_nhom_cau_hoi'];

                $status = $nhomcauhoi->nhomcauhoi__Delete($id_nhom_cau_hoi);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-nhom-cau-hoi&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-nhom-cau-hoi&status=failed');
                }
                
                break;
        }
    }

?>