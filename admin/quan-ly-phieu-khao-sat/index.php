 <?php
    $id_dot = -2;
    $id_phan_nhom  = -2;
    $id_doi_tuong  = -2;
    $phieukhaosat__Get_By_Id_Phan_Nhom = $phieukhaosat->phieukhaosat__Get_By_Id_Phan_Nhom($id_phan_nhom, $id_dot);
    $view = "xem-tat-ca";
    $dotkhaosat__Get_All = $dotkhaosat->dotkhaosat__Get_All();
    $phannhom__Get_All = $phannhom->phannhom__Get_All();

  
    if(isset($_GET['id_dot'])){
        $id_dot = $_GET['id_dot'];
    }
    if(isset($_GET['id_phan_nhom'])){
        $id_phan_nhom = $_GET['id_phan_nhom'];
        $sinhvien__Get_By_Id_phan_nhom_Chua_Cham = $phieukhaosat->phieukhaosat__Get_By_Id_Phan_Nhom_Chua_Cham($id_phan_nhom, $id_dot);
        $sinhvien__Get_By_Id_phan_nhom_Da_Cham = $phieukhaosat->phieukhaosat__Get_By_Id_Phan_Nhom_Da_Cham($id_phan_nhom, $id_dot);
        $sinhvien__Get_By_Id_phan_nhom_All = $phieukhaosat->phieukhaosat__Get_By_Id_Phan_Nhom_All($id_phan_nhom, $id_dot);
    }
  
    if(isset($_GET['view'])){
        $view = $_GET['view'];
    }

    if($view == "xem-tat-ca"){
        $phieukhaosat__Get_By_Id_Phan_Nhom = $phieukhaosat->phieukhaosat__Get_By_Id_Phan_Nhom_All($id_phan_nhom, $id_dot);
    }
    if($view == "da-khao-sat"){
        $phieukhaosat__Get_By_Id_Phan_Nhom = $phieukhaosat->phieukhaosat__Get_By_Id_Phan_Nhom_Da_Cham($id_phan_nhom, $id_dot);
    }
    if($view == "chua-khao-sat"){
        $phieukhaosat__Get_By_Id_Phan_Nhom = $phieukhaosat->phieukhaosat__Get_By_Id_Phan_Nhom_Chua_Cham($id_phan_nhom, $id_dot);
    }
   
  
 ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý phiếu khảo sát </h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Quản lý phiếu khảo sát</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <section class="content">
         <form class="row form" action="quan-ly-phieu-khao-sat/action.php?req=add" method="post"
             enctype="multipart/form-data">
             <input type="hidden" name="id_dot" value="<?=$id_dot?>">
             <input type="hidden" name="id_phan_nhom" value="<?=$id_phan_nhom?>">
             <div class="col-12">
                 <div class="card card-success">
                     <div class="card-header">
                         <h3 class="card-title">Xử lý phiếu khảo sát</h3>
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
                                     <option value="?page=quan-ly-phieu-khao-sat&id_dot=<?=$item->id_dot?>"
                                         <?=$id_dot == $item->id_dot ? "selected" : ""?>>
                                         <?=$item->ten_dot?>
                                     </option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>

                             <div class="col">
                                 <?php if(isset($_GET['id_dot'])):?>
                                 <label for="">Chọn phân nhóm (<?=count($phannhom__Get_All)?>)</label>
                                 <select class="form-control" name="" required onchange="location.href=this.value">
                                     <option value="">Chọn phân nhóm</option>
                                     <?php foreach ($phannhom__Get_All as $item):?>
                                     <option
                                         value="?page=quan-ly-phieu-khao-sat&id_dot=<?=$id_dot?>&id_phan_nhom=<?=$item->id_phan_nhom?>&view=<?=$view?>"
                                         <?=$id_phan_nhom == $item->id_phan_nhom ? "selected" : ""?>>
                                         <?=$item->ten_phan_nhom?>
                                     </option>
                                     <?php endforeach; ?>
                                 </select>
                                 <?php endif; ?>
                             </div>

                         </div>

                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                         <input type="submit" value="Xử lý" class="btn btn-success float-right"
                             <?=isset($_GET['id_phan_nhom']) ? "" : "disabled"?>>
                     </div>
                 </div>
             </div>
         </form>
     </section>

     <section class="content" id="div_update">
     </section>

     <section class="content">
         <div class="card card-primary">
             <div class="card-header">
                 <h3 class="card-title">Danh sách</h3>

             </div>
             <!-- /.card-header -->
             <div class="card-body">
                 <table id="tablejs" class="table table-bordered table-striped display responsive nowrap" width="100%">
                     <thead>
                         <tr>
                             <th>#</th>
                             <th>Mã số</th>
                             <th>Tên người khảo sát</th>
                             <th>Kết quả khảo sát</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $num = 0;?>
                         <?php foreach($phieukhaosat__Get_By_Id_Phan_Nhom as $item):?>
                         <?php if($phannhom->phannhom__Get_By_Id($item->id_phan_nhom)->cap_bac == 2):?>
                         <tr
                             onclick="return confirm_sweet_chi_tiet('../user/sinh-vien/chi-tiet.php?id_phan_nhom=<?=$item->id_phan_nhom?>&id_dot=<?=$item->id_dot?>&id_sinh_vien=<?=$item->id_doi_tuong?>')">
                             <td><?=++$num?></td>
                             <td> <?=$sinhvien->sinhvien__Get_By_Id($item->id_doi_tuong)->ma_sinh_vien;?></td>
                             <td> <?=$sinhvien->sinhvien__Get_By_Id($item->id_doi_tuong)->ten_sinh_vien;?></td>
                             <td> <?=$item->kq_ks;?></td>
                         </tr>
                         <?php endif?>
                         <?php if($phannhom->phannhom__Get_By_Id($item->id_phan_nhom)->cap_bac == 3):?>
                         <tr
                             onclick="return confirm_sweet_chi_tiet('../user/giang-vien/chi-tiet.php?id_phan_nhom=<?=$item->id_phan_nhom?>&id_dot=<?=$item->id_dot?>&id_giang_vien=<?=$item->id_doi_tuong?>')">
                             <td><?=++$num?></td>
                             <td> <?=$giangvien->giangvien__Get_By_Id($item->id_doi_tuong)->ma_giang_vien;?></td>
                             <td> <?=$giangvien->giangvien__Get_By_Id($item->id_doi_tuong)->ten_giang_vien;?></td>
                             <td> <?=$item->kq_ks;?></td>
                         </tr>
                         <?php endif?>
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
    $("#tablejs").DataTable({
        "responsive": true,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#tablejs_wrapper .col-md-6:eq(0)');
});
 </script>