 <?php
    // require "../models/getModel.php";
    $mauphieu__Get_All = $mauphieu->mauphieu__Get_All();
    $tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();
 ?>

 <style>
select#bootstrap-duallistbox-nonselected-list_id_ten_khao_sat\[\],
select#bootstrap-duallistbox-nonselected-list_,
select#bootstrap-duallistbox-selected-list_id_ten_khao_sat\[\],
select#bootstrap-duallistbox-selected-list_ {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

button.btn.moveall.btn-outline-secondary:before {
    content: 'Chưa chọn (Click chọn tất cả)';
}

button.btn.removeall.btn-outline-secondary:before {
    content: 'Đã chọn (Click bỏ chọn tất cả)';
}
 </style>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý mẫu phiếu</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Quản lý mẫu phiếu</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <section class="content">
         <form class="row form" action="quan-ly-mau-phieu/action.php?req=add" method="post"
             enctype="multipart/form-data">
             <div class="col-12">
                 <div class="card card-success">
                     <div class="card-header">
                         <h3 class="card-title">Thêm mới</h3>
                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                         </div>
                     </div>
                     <div class="card-body">
                         <div class="form-group">
                             <label for="">Tên mẫu phiếu <span class="color-crimson">(*)</span></label>
                             <input type="text" id="ten_mau_phieu" name="ten_mau_phieu" class="form-control" required
                                 placeholder="Nhập tên mẫu phiếu">
                         </div>
                         <div class="form-group">
                             <label for="">Ghi chú</label>
                             <textarea id="ghi_chu" name="ghi_chu" class="form-control"
                                 placeholder="Nhập ghi chú"></textarea>
                         </div>

                         <div class="form-group">
                             <label for="">Chọn Tên khảo sát</label>
                             <select class="duallistbox" multiple="multiple" name="id_ten_khao_sat[]" required>
                                 <?php foreach($tenkhaosat__Get_All as $item):?>
                                 <option value="<?=$item->id_ten_khao_sat?>"><?=$item->ten_khao_sat?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <!-- /.card-body -->
                         <div class="card-footer">
                             <input type="submit" value="Thêm mới" class="btn btn-success float-right">
                         </div>
                     </div>
                     <!-- /.card -->
                 </div>
         </form>
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
                             <th>Tên mẫu phiếu</th>
                             <th>Tên khảo sát</th>
                             <th>Ghi chú</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $num = 0;?>
                         <?php foreach($mauphieu__Get_All as $item):?>
                         <tr>
                             <td><?=++$num?></td>
                             <td><?=$item->ten_mau_phieu?></td>
                             <td><?php foreach($tenkhaosat->tenkhaosat__Get_All_Selected($item->id_mau_phieu) as $item){echo $item->ten_khao_sat ."<br/>";}?>
                             </td>
                             <td><?=$item->ghi_chu?></td>
                             <td>
                                 <a href="#" type="button" class="btn  btn-warning m-2"
                                     onclick="update_obj_tenkhaosat(<?=$item->id_mau_phieu?>)">
                                     <i class="fas fa-edit">Sửa Tên khảo sát</i>
                                 </a>
                                 <a href="#" type="button" class="btn  btn-warning m-2"
                                     onclick="update_obj(<?=$item->id_mau_phieu?>)">
                                     <i class="fas fa-edit"></i>
                                 </a>

                                 <a href="#" type="button" class="btn  btn-danger m-2"
                                     onclick="return confirm_sweet('quan-ly-mau-phieu/action.php?req=delete&id_mau_phieu=<?=$item->id_mau_phieu?>')">
                                     <i class="fas fa-trash"></i>
                                 </a>
                             </td>
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
    $("#tablejs").DataTable({
        "responsive": true,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#tablejs_wrapper .col-md-6:eq(0)');
});

function update_obj(id_mau_phieu) {
    $.post('quan-ly-mau-phieu/update.php', {
        'id_mau_phieu': id_mau_phieu,
    }, function(data) {
        $(".card.card-success").addClass('collapsed-card');
        $('#div_update').html(data);
    });
}

function update_obj_tenkhaosat(id_mau_phieu) {
    $.post('quan-ly-mau-phieu/update_ten_khao_sat.php', {
        'id_mau_phieu': id_mau_phieu,
    }, function(data) {
        $(".card.card-success").addClass('collapsed-card');
        $('#div_update').html(data);
    });
}
 </script>