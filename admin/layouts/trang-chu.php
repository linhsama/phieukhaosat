<?php 

$labels_1=[];
$labels_2=[];
$data_1=[];
$data_2=[];

$id_dot = $dotkhaosat->dotkhaosat__Get_Last()->id_dot;
$id_lop_hoc = $lophoc->lophoc__Get_Last()->id_lop_hoc;
$dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
$lophoc__Get_All = $lophoc->lophoc__Get_All();
$ketquasinhvien__Get_By_Id_Lop_Hoc_And_Id_Dot = $ketquasinhvien->ketquasinhvien__Get_By_Id_Lop_Hoc_And_Id_Dot($id_lop_hoc, $id_dot);
$ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot = $ketquagiangvien->ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot($id_lop_hoc, $id_dot);

if(isset($_GET['id_dot'])){
   $id_dot = $_GET['id_dot'];
}
if(isset($_GET['id_lop_hoc'])){
    $id_lop_hoc = $_GET['id_lop_hoc'];
    $ketquasinhvien__Get_By_Id_Lop_Hoc_And_Id_Dot = $ketquasinhvien->ketquasinhvien__Get_By_Id_Lop_Hoc_And_Id_Dot($id_lop_hoc, $id_dot);
    $ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot = $ketquagiangvien->ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot($id_lop_hoc, $id_dot);

 }

$ketquasinhvien__Get_By_Id_Dot_Muc_1 = intval(isset($ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_1")->sum_so_luong) ? $ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_1")->sum_so_luong : 0);
$ketquasinhvien__Get_By_Id_Dot_Muc_2 = intval(isset($ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_2")->sum_so_luong) ? $ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_2")->sum_so_luong : 0);
$ketquasinhvien__Get_By_Id_Dot_Muc_3 = intval(isset($ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_3")->sum_so_luong) ? $ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_3")->sum_so_luong : 0);
$ketquasinhvien__Get_By_Id_Dot_Muc_4 = intval(isset($ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_4")->sum_so_luong) ? $ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_4")->sum_so_luong : 0);
$ketquasinhvien__Get_By_Id_Dot_Muc_5 = intval(isset($ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_5")->sum_so_luong) ? $ketquasinhvien->ketquasinhvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_5")->sum_so_luong : 0);


$ketquagiangvien__Get_By_Id_Dot_Muc_1 = intval(isset($ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_1")->sum_so_luong) ? $ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_1")->sum_so_luong : 0);
$ketquagiangvien__Get_By_Id_Dot_Muc_2 = intval(isset($ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_2")->sum_so_luong) ? $ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_2")->sum_so_luong : 0);
$ketquagiangvien__Get_By_Id_Dot_Muc_3 = intval(isset($ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_3")->sum_so_luong) ? $ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_3")->sum_so_luong : 0);
$ketquagiangvien__Get_By_Id_Dot_Muc_4 = intval(isset($ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_4")->sum_so_luong) ? $ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_4")->sum_so_luong : 0);
$ketquagiangvien__Get_By_Id_Dot_Muc_5 = intval(isset($ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_5")->sum_so_luong) ? $ketquagiangvien->ketquagiangvien__Get_By_Id_Dot($id_dot, $id_lop_hoc,"muc_5")->sum_so_luong : 0);



$labels_1=["Không hài lòng", "Ít hài lòng", "Khá hài lòng","Hài lòng", "Rất hài lòng"];
$data_1=[$ketquasinhvien__Get_By_Id_Dot_Muc_1, $ketquasinhvien__Get_By_Id_Dot_Muc_2, $ketquasinhvien__Get_By_Id_Dot_Muc_3, $ketquasinhvien__Get_By_Id_Dot_Muc_4, $ketquasinhvien__Get_By_Id_Dot_Muc_5];
$labels_2=["Không hài lòng", "Ít hài lòng", "Khá hài lòng","Hài lòng", "Rất hài lòng"];
$data_2=[$ketquasinhvien__Get_By_Id_Dot_Muc_1, $ketquasinhvien__Get_By_Id_Dot_Muc_2, $ketquasinhvien__Get_By_Id_Dot_Muc_3, $ketquasinhvien__Get_By_Id_Dot_Muc_4, $ketquasinhvien__Get_By_Id_Dot_Muc_5];
$data_2=[$ketquagiangvien__Get_By_Id_Dot_Muc_1, $ketquagiangvien__Get_By_Id_Dot_Muc_2, $ketquagiangvien__Get_By_Id_Dot_Muc_3, $ketquagiangvien__Get_By_Id_Dot_Muc_4, $ketquagiangvien__Get_By_Id_Dot_Muc_5];



$ketquasinhvien__Get_By_Id_Dot_All = $ketquasinhvien->ketquasinhvien__Get_By_Id_Dot_All($id_dot, $id_lop_hoc)->sum;
$ketquagiangvien__Get_By_Id_Dot_All = $ketquagiangvien->ketquagiangvien__Get_By_Id_Dot_All($id_dot, $id_lop_hoc)->sum;


?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Page</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Chọn đợt (<?=count($dotkhaosat->dotkhaosat__Get_All() )?>)</label>

                <select name="" id="" onchange="location.href=this.value" required class="form-control">
                    <option value="">Chọn đợt</option>
                    <?php foreach($dotkhaosat->dotkhaosat__Get_All() as $item):?>
                    <option <?=$item->id_dot == $id_dot ? "selected" : ""?>
                        value="?page=trang-chu&id_dot=<?=$item->id_dot?>">
                        <?=$item->ten_dot." - ".$item->ten_hoc_ky."(".$item->ten_nam_hoc.")"?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <?php if(isset($_GET['id_dot'])):?>
            <div class="col">
                <label for="">Chọn lớp (<?=count($lophoc__Get_All)?>)</label>
                <select class="form-control" name="id_lop_hoc" required onchange="location.href=this.value">
                    <option value="">Chọn lớp</option>
                    <?php foreach ($lophoc__Get_All as $item):?>
                    <option <?=$item->id_lop_hoc == $id_lop_hoc ? "selected" : ""?>
                        value="?page=trang-chu&id_dot=<?=$id_dot?>&id_lop_hoc=<?=$item->id_lop_hoc?>"
                        <?=$id_lop_hoc == $item->id_lop_hoc ? "selected" : ""?>>
                        <?=$item->ten_lop_hoc?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php endif?>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <!-- pie CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Sinh viên</h3>
                            <!-- 
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div> -->
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách sinh viên </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tablejs" class="table table-bordered table-striped display responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã sinh viên</th>
                            <th>Tên sinh viên</th>
                            <th>Tên lớp</th>
                            <th>Mức 1</th>
                            <th>Mức 2</th>
                            <th>Mức 3</th>
                            <th>Mức 4</th>
                            <th>Mức 5</th>
                            <th>Góp ý</th>
                            <th>Ngày thống kê</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $num = 0?>
                        <?php foreach($ketquasinhvien__Get_By_Id_Lop_Hoc_And_Id_Dot as $item):?>
                        <?php
                         $kq = 0 + intval(intval($item->muc_1) + intval($item->muc_2) + intval($item->muc_3) +
                         intval($item->muc_4) + intval($item->muc_5));
                                $sum= $kq == 0 ? 1 : $kq;
                         ?>
                        <tr>
                            <td><?=++$num?></td>
                            <td><?=$item->ma_sinh_vien?></td>
                            <td><?=$item->ten_sinh_vien?></td>
                            <td><?=$item->ten_lop_hoc?></td>
                            <td><?=$item->muc_1?> (<?=round($item->muc_1/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_2?> (<?=round($item->muc_2/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_3?> (<?=round($item->muc_3/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_4?> (<?=round($item->muc_4/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_5?> (<?=round($item->muc_5/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->gop_y?>
                            </td>
                            <td><?=date('d-m-Y', strtotime($item->ngay_thong_ke))?></td>
                            <td><?=$item->ghi_chu?></td>

                        </tr>
                        <?php endforeach?>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class=" card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Giảng viên</h3>

                            <!-- <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div> -->
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tablejs" class="table table-bordered table-striped display responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã giang viên</th>
                            <th>Tên giảng viên</th>
                            <th>Tên lớp</th>
                            <th>Mức 1</th>
                            <th>Mức 2</th>
                            <th>Mức 3</th>
                            <th>Mức 4</th>
                            <th>Mức 5</th>
                            <th>Góp ý</th>
                            <th>Ngày thống kê</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $num = 0?>
                        <?php foreach($ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot as $item):?>
                        <?php
                         $kq = 0 + intval(intval($item->muc_1) + intval($item->muc_2) + intval($item->muc_3) +
                         intval($item->muc_4) + intval($item->muc_5));
                                $sum= $kq == 0 ? 1 : $kq;
                         ?>
                        <tr>
                            <td><?=++$num?></td>
                            <td><?=$item->ma_giang_vien?></td>
                            <td><?=$item->ten_giang_vien?></td>
                            <td><?=$item->ten_khoa?></td>
                            <td><?=$item->muc_1?> (<?=round($item->muc_1/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_2?> (<?=round($item->muc_2/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_3?> (<?=round($item->muc_3/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_4?> (<?=round($item->muc_4/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->muc_5?> (<?=round($item->muc_5/ $sum * 100)?>%)
                            </td>
                            <td><?=$item->gop_y?>
                            </td>
                            <td><?=date('d-m-Y', strtotime($item->ngay_thong_ke))?></td>
                            <td><?=$item->ghi_chu?></td>

                        </tr>
                        <?php endforeach?>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- ChartJS -->
    <script src="../assets/theme/plugins/chart.js/Chart.min.js"></script>
    <script>
    window.addEventListener('load', function() {

        $('#tablejs').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ],
            columnDefs: [{
                targets: -1,
                visible: false
            }]
        }).buttons().container().appendTo('#tablejs_wrapper .col-md-6:eq(0)');
    })
    // //- pie CHART -
    // //-------------
    // // Get context with jQuery - using jQuery's .get() method.


    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: <?=json_encode($labels_2)?>,
        datasets: [{
            label: "Tỷ lệ",
            data: <?=json_encode($data_1)?>,
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'bar',
        data: donutData,
        options: donutOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barData = {
        labels: <?=json_encode($labels_2)?>,
        datasets: [{
            label: "Số lượng",
            data: <?=json_encode($data_2)?>,
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
    }
    var barOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    new Chart(barChartCanvas, {
        type: 'bar',
        data: barData,
        options: barOptions
    })
    </script>