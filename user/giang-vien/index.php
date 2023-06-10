<?php
    if(!isset($_SESSION['gv'])){
        header('location: ../auth/');
        exit();
    }
    $id_dot = $dotkhaosat->dotkhaosat__Get_Last()->id_dot;

    if(isset($_GET['id_dot'])){
        $id_dot = $_GET['id_dot'];
    }
        $id_giang_vien = $_SESSION['gv']->id_nguoi_dung;
        $phieukhaosat__Get_By_Id_Giang_Vien = $phieukhaosat->phieukhaosat__Get_By_Id_Giang_Vien($id_giang_vien, $id_dot);

        $giangvien__Get_By_Id = $giangvien->giangvien__Get_By_Id($id_giang_vien);
        $id_nhom_ap_dung = isset($phieukhaosat__Get_By_Id_Giang_Vien->id_nhom_ap_dung) ? $phieukhaosat__Get_By_Id_Giang_Vien->id_nhom_ap_dung : 0;
        $nhomapdung__Get_By_Id = $nhomapdung->nhomapdung__Get_By_Id($id_nhom_ap_dung);
        $dotkhaosat__Get_By_Id = $dotkhaosat->dotkhaosat__Get_By_Id($id_dot);
        $id_hoc_ky = isset($dotkhaosat__Get_By_Id->id_hoc_ky) ? $dotkhaosat__Get_By_Id->id_hoc_ky : 0;
        $hocky__Get_By_Id = $hocky->hocky__Get_By_Id($id_hoc_ky);
        $id_nam_hoc = isset($hocky__Get_By_Id->id_nam_hoc) ? $hocky__Get_By_Id->id_nam_hoc : 0;
    
        $namhoc__Get_By_Id = $namhoc->namhoc__Get_By_Id($id_nam_hoc);
        $id_mau_phieu = isset($nhomapdung__Get_By_Id->id_mau_phieu) ? $nhomapdung__Get_By_Id->id_mau_phieu : 0;
        $mauphieu__Get_By_Id = $mauphieu->mauphieu__Get_By_Id($id_mau_phieu);
        $khoa__Get_By_Id = $khoa->khoa__Get_By_Id($giangvien__Get_By_Id->id_khoa);
        $id_khoa_hoc = isset($khoa__Get_By_Id->id_khoa_hoc) ? $khoa__Get_By_Id->id_khoa_hoc : 0;
    
        $bocauhoi__Get_By_Id_Mau_Phieu = $bocauhoi->bocauhoi__Get_By_Id_Mau_Phieu($id_mau_phieu);

        $ketquagiangvien__Get_By_Id_Phieu = $ketquagiangvien->ketquagiangvien__Get_By_Id_Phieu($id_nhom_ap_dung, $id_dot, $id_giang_vien);

  

?>
<link rel="stylesheet" href="../assets/css/user.css">
<?php if(isset($phieukhaosat__Get_By_Id_Giang_Vien->id_nhom_ap_dung)):?>
<!-- Content Wrapper. Contains page content -->
<div class="ml-0 mr-3 content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <div class="card-tools">

                        </div>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <form class="form" action="giang-vien/action.php?req=add" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id_phieu" value="<?=$phieukhaosat__Get_By_Id_Giang_Vien->id_phieu?>">
            <div class="card overflow-auto w-100">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="card-title text-center font-weight-bold w-100 mt-3 mb-3">
                                <?=$mauphieu__Get_By_Id->ten_mau_phieu?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="card-title">Mã giảng viên: <?=$giangvien__Get_By_Id->ma_giang_vien?></h3>
                        </div>

                        <div class="col text-right">
                            <p class="card-title w-100">Khoa: <?=$khoa__Get_By_Id->ten_khoa?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="card-title">Tên giảng viên: <?=$giangvien__Get_By_Id->ten_giang_vien?></h3>
                        </div>
                        <div class="col text-right">
                            <p class="card-title w-100">Học kỳ: <?=$hocky__Get_By_Id->ten_hoc_ky?></p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <p class="card-title w-100">Năm học: <?=$namhoc__Get_By_Id->ten_nam_hoc?></p>
                        </div>
                    </div>
                    <hr>
                    <!-- <div class="row">
                        <div class="col">
                            <p class="card-title">Điểm rèn luyện:
                                <?=isset($ketquagiangvien__Get_By_Id_Phieu->ket_qua) ? $ketquagiangvien__Get_By_Id_Phieu->ket_qua : "Chưa tổng kết"?>
                            </p>
                        </div>

                        <div class="col text-right">
                            <p class="card-title w-100">Ngày xếp loại:
                                <?=isset($ketquagiangvien__Get_By_Id_Phieu->ngay_xep_loai) ? $ketquagiangvien__Get_By_Id_Phieu->ngay_xep_loai : "Chưa tổng kết"?>
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="card-title w-100">Xếp loại:
                                <?=isset($ketquagiangvien__Get_By_Id_Phieu->xep_loai) ? $ketquagiangvien__Get_By_Id_Phieu->xep_loai : "Chưa tổng kết"?>
                            </p>

                        </div>

                        <div class="col text-right">
                            <p class="card-title w-100">Ghi chú:
                                <?=isset($ketquagiangvien__Get_By_Id_Phieu->ghi_chu) ? $ketquagiangvien__Get_By_Id_Phieu->ghi_chu : ""?>
                            </p>

                        </div>
                    </div> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="w-10  text-center vertical-align-middle"></th>
                                <th class="w-90  text-center vertical-align-middle no-padding">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="w-90 no-border full vertical-align-middle">
                                                    Nội dung chấm điểm
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    Không hài lòng
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    Ít hài lòng
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    Khá hài lòng
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    Hài lòng
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    Rất hài lòng
                                                </td>
                                        </tbody>
                                    </table>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;?>

                            <?php foreach($bocauhoi__Get_By_Id_Mau_Phieu as $item_1): ?>
                            <tr>
                                <td class="vertical-align-middle">
                                    <table class="table no-border text-center">
                                        <tbody>
                                            <tr>
                                                <th class="p-0">
                                                    <?=$tenkhaosat->tenkhaosat__Get_By_Id($item_1->id_ten_khao_sat)->ten_khao_sat?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="p-2">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="p-0">
                                                    <?=$tenkhaosat->tenkhaosat__Get_By_Id($item_1->id_ten_khao_sat)->ghi_chu?>
                                                </th>
                                            </tr>

                                        </tbody>
                                    </table>
                                </td>

                                <td class="no-padding">
                                    <?php foreach($nhomcauhoi->nhomcauhoi__Get_By_Id_Ten_Khao_Sat($item_1->id_ten_khao_sat) as $item_2): ?>

                                    <table class="w-100 table-striped">
                                        <tbody>
                                            <tr>
                                                <th class="w-100 table table-border">
                                                    <?=$nhomcauhoi->nhomcauhoi__Get_By_Id($item_2->id_nhom_cau_hoi)->ten_nhom_cau_hoi?>
                                                </th>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php foreach($cauhoi->cauhoi__Get_By_Id_nhom_cau_hoi($item_2->id_nhom_cau_hoi) as $item_3): ?>
                                    <?php $dw = $item_3->ten_cau_hoi?>

                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="w-90 no-border full  h-0 ">
                                                    <?=$dw?>
                                                </td>
                                                <td class="w-10 h-0 no-border full">
                                                    Không hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full">
                                                    Ít hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full">
                                                    Khá hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full">
                                                    Hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full">
                                                    Rất hài lòng
                                                </td>
                                            </tr>

                                            <tr class="border-bottom">
                                                <?php if($item_3->is_text != 1):?>
                                                <td class="w-50 no-border full vertical-align-middle">
                                                    - <?=$cauhoi->cauhoi__Get_By_Id($item_3->id_cau_hoi)->ten_cau_hoi?>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="radio" class="form-control kq_ks_1"
                                                        name="kq_ks[<?=$item_3->id_cau_hoi?>][]" required value="1"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i]) ? ($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i] == 1 ? "checked" : "") : ""?>>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="radio" class="form-control kq_ks_2"
                                                        name="kq_ks[<?=$item_3->id_cau_hoi?>][]" required value="2"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i]) ? ($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i] == 2 ? "checked" : "") : ""?>>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="radio" class="form-control kq_ks_3"
                                                        name="kq_ks[<?=$item_3->id_cau_hoi?>][]" required value="3"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i]) ? ($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i] == 3 ? "checked" : "") : ""?>>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="radio" class="form-control kq_ks_4"
                                                        name="kq_ks[<?=$item_3->id_cau_hoi?>][]" required value="4"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i]) ? ($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i] == 4 ? "checked" : "") : ""?>>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="radio" class="form-control kq_ks_5"
                                                        name="kq_ks[<?=$item_3->id_cau_hoi?>][]" required value="5"
                                                        <?=isset($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i]) ? ($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i] == 5 ? "checked" : "") : ""?>>
                                                </td>
                                                <?php else:?>
                                                <b class="w-100 no-border full vertical-align-middle">
                                                    <textarea class="form-control" name="kq_is_text[]"
                                                        placeholder="Thêm góp ý vào đây"><?=isset($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i]) ? ($phieukhaosat->phieukhaosat__Get_Ket_Qua($phieukhaosat__Get_By_Id_Giang_Vien->kq_ks)[$i]): "" ?></textarea>
                                                </b>
                                                <?php endif?>

                                            </tr>

                                        </tbody>
                                    </table>
                                    <?php $i++?>
                                    <?php endforeach?>

                                    <?php endforeach?>

                                </td>
                            </tr>

                            <?php endforeach?>

                        </tbody>
                        <footer>
                            <tr>
                                <th class="w-10  text-center vertical-align-middle"></th>
                                <th class="w-90  text-center vertical-align-middle no-padding">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="w-90 no-border full  h-0 ">
                                                    <?=$dw?>
                                                </td>
                                                <td class="w-10 h-0 no-border full  h-0">
                                                    Không hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full  h-0">
                                                    Ít hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full  h-0">
                                                    Khá hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full  h-0">
                                                    Hài lòng
                                                </td>
                                                <td class="w-10 h-0 no-border full  h-0">
                                                    Rất lòng
                                                </td>
                                            </tr>
                                            <tr>


                                                <td class="w-50 no-border full vertical-align-middle h-0">
                                                    <?=$dw?>
                                                    Tổng
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="number" class="form-control font-weight-bold"
                                                        placeholder="0" id="sum_muc_1" min="0" pattern="[-+]?[0-9]{1-2}"
                                                        title="max is 100" max="100" readonly required>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="number" class="form-control font-weight-bold"
                                                        placeholder="0" id="sum_muc_2" min="0" pattern="[-+]?[0-9]{1-2}"
                                                        title="max is 100" max="100" readonly required>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="number" class="form-control font-weight-bold"
                                                        placeholder="0" id="sum_muc_3" min="0" pattern="[-+]?[0-9]{1-2}"
                                                        title="max is 100" max="100" readonly required>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="number" class="form-control font-weight-bold"
                                                        placeholder="0" id="sum_muc_4" min="0" pattern="[-+]?[0-9]{1-2}"
                                                        title="max is 100" max="100" readonly required>
                                                </td>
                                                <td class="w-10 no-border full vertical-align-middle">
                                                    <input type="number" class="form-control font-weight-bold"
                                                        placeholder="0" id="sum_muc_5" min="0" pattern="[-+]?[0-9]{1-2}"
                                                        title="max is 100" max="100" readonly required>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </th>
                            </tr>
                            <tr>

                        </footer>

                    </table>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Cập nhật" class="btn btn-danger float-right" id="submit">
            </div>
        </form>

    </section>
</div>

<script>
window.addEventListener('load', function() {

    var kq_ks_1_load = 0;
    var kq_ks_1 = document.getElementsByClassName("kq_ks_1");
    for (i = 0; i < kq_ks_1.length; i++) {
        if (kq_ks_1[i].checked) {
            kq_ks_1_load++;
        }
    }
    document.getElementById("sum_muc_1").value = kq_ks_1_load;


    $('.kq_ks_1').change(function(event) {
        var kq_ks_1_load = 0;
        var kq_ks_1 = document.getElementsByClassName("kq_ks_1");
        for (i = 0; i < kq_ks_1.length; i++) {
            if (kq_ks_1[i].checked) {
                kq_ks_1_load++;
            }
        }
        document.getElementById("sum_muc_1").value = kq_ks_1_load;

    });





    var kq_ks_2_load = 0;
    var kq_ks_2 = document.getElementsByClassName("kq_ks_2");
    for (i = 0; i < kq_ks_2.length; i++) {
        if (kq_ks_2[i].checked) {
            kq_ks_2_load++;
        }
    }
    document.getElementById("sum_muc_2").value = kq_ks_2_load;


    $('.kq_ks_2').change(function(event) {
        var kq_ks_2_load = 0;
        var kq_ks_2 = document.getElementsByClassName("kq_ks_2");
        for (i = 0; i < kq_ks_2.length; i++) {
            if (kq_ks_2[i].checked) {
                kq_ks_2_load++;
            }
        }
        document.getElementById("sum_muc_2").value = kq_ks_2_load;

    });


    var kq_ks_3_load = 0;
    var kq_ks_3 = document.getElementsByClassName("kq_ks_3");
    for (i = 0; i < kq_ks_3.length; i++) {
        if (kq_ks_3[i].checked) {
            kq_ks_3_load++;
        }
    }
    document.getElementById("sum_muc_3").value = kq_ks_3_load;


    $('.kq_ks_3').change(function(event) {
        var kq_ks_3_load = 0;
        var kq_ks_3 = document.getElementsByClassName("kq_ks_3");
        for (i = 0; i < kq_ks_3.length; i++) {
            if (kq_ks_3[i].checked) {
                kq_ks_3_load++;
            }
        }
        document.getElementById("sum_muc_3").value = kq_ks_3_load;

    });

    var kq_ks_4_load = 0;
    var kq_ks_4 = document.getElementsByClassName("kq_ks_4");
    for (i = 0; i < kq_ks_4.length; i++) {
        if (kq_ks_4[i].checked) {
            kq_ks_4_load++;
        }
    }
    document.getElementById("sum_muc_4").value = kq_ks_4_load;


    $('.kq_ks_4').change(function(event) {
        var kq_ks_4_load = 0;
        var kq_ks_4 = document.getElementsByClassName("kq_ks_4");
        for (i = 0; i < kq_ks_4.length; i++) {
            if (kq_ks_4[i].checked) {
                kq_ks_4_load++;
            }
        }
        document.getElementById("sum_muc_4").value = kq_ks_4_load;

    });

    var kq_ks_5_load = 0;
    var kq_ks_5 = document.getElementsByClassName("kq_ks_5");
    for (i = 0; i < kq_ks_5.length; i++) {
        if (kq_ks_5[i].checked) {
            kq_ks_5_load++;
        }
    }
    document.getElementById("sum_muc_5").value = kq_ks_5_load;


    $('.kq_ks_5').change(function(event) {
        var kq_ks_5_load = 0;
        var kq_ks_5 = document.getElementsByClassName("kq_ks_5");
        for (i = 0; i < kq_ks_5.length; i++) {
            if (kq_ks_5[i].checked) {
                kq_ks_5_load++;
            }
        }
        document.getElementById("sum_muc_5").value = kq_ks_5_load;

    });
});
</script>


<?php endif?>