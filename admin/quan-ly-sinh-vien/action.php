<?php

    require '../../models/getModel.php';
    
    if (isset($_GET['req'])){
        switch($_GET['req']){
            case 'add':
                
                $ma_sinh_vien = $_POST['ma_sinh_vien'];
                $ten_sinh_vien = $_POST['ten_sinh_vien'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $email = $_POST['email'];
                $so_dien_thoai_1 = $_POST['so_dien_thoai_1'];
                $so_dien_thoai_2 = $_POST['so_dien_thoai_2'];
                $dia_chi_lien_lac = $_POST['dia_chi_lien_lac'];
                $dia_chi_thuong_tru = $_POST['dia_chi_thuong_tru'];
                $chuc_vu = $_POST['chuc_vu'];
                $id_lop_hoc = $_POST['id_lop_hoc'];
                
                $status = $sinhvien->sinhvien__Add($ma_sinh_vien, $ten_sinh_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $chuc_vu, $id_lop_hoc);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-sinh-vien&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-sinh-vien&status=failed');
                }
                
                break;
            case 'update':

                $id_sinh_vien = $_POST['id_sinh_vien'];
                $ma_sinh_vien = $_POST['ma_sinh_vien'];
                $ten_sinh_vien = $_POST['ten_sinh_vien'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $email = $_POST['email'];
                $so_dien_thoai_1 = $_POST['so_dien_thoai_1'];
                $so_dien_thoai_2 = $_POST['so_dien_thoai_2'];
                $dia_chi_lien_lac = $_POST['dia_chi_lien_lac'];
                $dia_chi_thuong_tru = $_POST['dia_chi_thuong_tru'];
                $chuc_vu = $_POST['chuc_vu'];
                $id_lop_hoc = $_POST['id_lop_hoc'];

                $status = $sinhvien->sinhvien__Update($id_sinh_vien, $ma_sinh_vien, $ten_sinh_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $chuc_vu, $id_lop_hoc);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-sinh-vien&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-sinh-vien&status=failed');
                }
                
                break;

            case 'delete':

                $id_sinh_vien = $_GET['id_sinh_vien'];

                $status = $sinhvien->sinhvien__Delete($id_sinh_vien);
                if($status !=0 ){
                    header('location: ../index.php?page=quan-ly-sinh-vien&status=success');
                }else{
                    header('location: ../index.php?page=quan-ly-sinh-vien&status=failed');
                }
                
                break;
        }
    }

?>