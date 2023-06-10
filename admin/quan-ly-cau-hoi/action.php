<?php

    require '../../models/getModel.php';
    
    if (isset($_GET['req'])){
        switch($_GET['req']){
            case 'add':

                $ten_cau_hoi = $_POST['ten_cau_hoi'];
                $ghi_chu = $_POST['ghi_chu'];
                $thu_tu = $_POST['thu_tu'];
                $is_text = $_POST['is_text'];
                $id_nhom_cau_hoi = $_POST['id_nhom_cau_hoi'];

                $status = $cauhoi->cauhoi__Add($ten_cau_hoi, $is_text, $ghi_chu, $thu_tu, $id_nhom_cau_hoi);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-cau-hoi&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-cau-hoi&status=failed');
                }
                
                break;
            case 'update':

                $id_cau_hoi = $_POST['id_cau_hoi'];
                $ten_cau_hoi = $_POST['ten_cau_hoi'];
                $ghi_chu = $_POST['ghi_chu'];
                $thu_tu = $_POST['thu_tu'];
                $is_text = $_POST['is_text'];
                $id_nhom_cau_hoi = $_POST['id_nhom_cau_hoi'];

                $status = $cauhoi->cauhoi__Update($id_cau_hoi, $is_text, $ten_cau_hoi, $ghi_chu, $thu_tu, $id_nhom_cau_hoi);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-cau-hoi&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-cau-hoi&status=failed');
                }
                
                break;

            case 'delete':

                $id_cau_hoi = $_GET['id_cau_hoi'];

                $status = $cauhoi->cauhoi__Delete($id_cau_hoi);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-cau-hoi&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-cau-hoi&status=failed');
                }
                
                break;
        }
    }

?>