 <?php
    // require "../models/getModel.php";
    $id_dot = -2;
    $id_khoa  = -2;
    $ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot = $ketquagiangvien->ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot($id_khoa, $id_dot);
    $dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
    $khoa__Get_All = $khoa->khoa__Get_All();

  
    if(isset($_GET['id_dot'])){
        $id_dot = $_GET['id_dot'];
    }
    if(isset($_GET['id_khoa'])){
        $id_khoa = $_GET['id_khoa'];
        $ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot = $ketquagiangvien->ketquagiangvien__Get_By_Id_Khoa_And_Id_Dot($id_khoa, $id_dot);
    }
  
 ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý kết quả khảo sát giảng viên</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Quản lý kết quả khảo sát giảng viên</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <section class="content">
         <div class="col-12">
             <div class="card card-success">
                 <div class="card-header">
                     <h3 class="card-title"></h3>
                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col">
                             <label for="">Chọn đợt (<?=count($dotkhaosat__Get_All)?>)</label>
                             <select class="form-control" name="" required onchange="location.href=this.value">
                                 <option value="">Chọn đợt</option>
                                 <?php foreach ($dotkhaosat__Get_All as $item):?>
                                 <option value="?page=quan-ly-ket-qua-giang-vien&id_dot=<?=$item->id_dot?>"
                                     <?=$id_dot == $item->id_dot ? "selected" : ""?>>
                                     <?=$item->ten_dot?>
                                 </option>
                                 <?php endforeach; ?>
                             </select>
                         </div>

                         <div class="col">
                             <?php if(isset($_GET['id_dot'])):?>
                             <label for="">Chọn lớp khoa (<?=count($khoa__Get_All)?>)</label>
                             <select class="form-control" name="" required onchange="location.href=this.value">
                                 <option value="">Chọn lớp khoa</option>
                                 <?php foreach ($khoa__Get_All as $item):?>
                                 <option
                                     value="?page=quan-ly-ket-qua-giang-vien&id_dot=<?=$id_dot?>&id_khoa=<?=$item->id_khoa?>"
                                     <?=$id_khoa == $item->id_khoa ? "selected" : ""?>>
                                     <?=$item->ten_khoa?>
                                 </option>
                                 <?php endforeach; ?>
                             </select>
                             <?php endif; ?>
                         </div>

                     </div>

                 </div>
                 <!-- /.card-body -->
                 <div class="card-footer">
                     <!-- <input type="submit" value="Xử lý" class="btn btn-success float-right"
                         <?=isset($_GET['id_khoa']) ? "" : "disabled"?>> -->
                 </div>
             </div>
         </div>
     </section>

     <section class="content" id="div_update">
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

 </div>


 <!-- /.content-wrapper -->


 <script>
window.addEventListener("load", function() {
    // $("#tablejs").DataTable({
    //     "responsive": true,
    //     "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print"],

    // }).buttons().container().appendTo('#tablejs_wrapper .col-md-6:eq(0)');
    $('#tablejs').DataTable({
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


});
 </script>