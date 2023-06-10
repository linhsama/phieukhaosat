<?php

    require '../../models/getModel.php';
    
    if (isset($_GET['req'])){
        switch($_GET['req']){
            case 'add':

                $ten_khao_sat = $_POST['ten_khao_sat'];
                $ghi_chu = $_POST['ghi_chu'];

                $status = $tenkhaosat->tenkhaosat__Add($ten_khao_sat, $ghi_chu);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-ten-khao-sat&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-ten-khao-sat&status=failed');
                }
                
                break;
            case 'update':

                $id_ten_khao_sat = $_POST['id_ten_khao_sat'];
                $ten_khao_sat = $_POST['ten_khao_sat'];
                $ghi_chu = $_POST['ghi_chu'];

                $status = $tenkhaosat->tenkhaosat__Update($id_ten_khao_sat, $ten_khao_sat, $ghi_chu);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-ten-khao-sat&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-ten-khao-sat&status=failed');
                }
                
                break;

            case 'delete':

                $id_ten_khao_sat = $_GET['id_ten_khao_sat'];

                $status = $tenkhaosat->tenkhaosat__Delete($id_ten_khao_sat);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-ten-khao-sat&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-ten-khao-sat&status=failed');
                }
                
                break;
        }
    }

?>