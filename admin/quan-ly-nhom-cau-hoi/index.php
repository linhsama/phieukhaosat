 <?php
    // require "../models/getModel.php";
    $nhomcauhoi__Get_All = $nhomcauhoi->nhomcauhoi__Get_All();
    $tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();
 ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý nhóm câu hỏi</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Quản lý nhóm câu hỏi</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <section class="content">
         <form class="row form" action="quan-ly-nhom-cau-hoi/action.php?req=add" method="post"
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
                             <label for="">Tên khảo sát <span class="color-crimson">(*)</span></label>
                             <select class="form-control" name="id_ten_khao_sat" required>
                                 <option value="">Chọn Tên khảo sát</option>
                                 <?php foreach ($tenkhaosat__Get_All as $item):?>
                                 <option value="<?=$item->id_ten_khao_sat?>"><?=$item->ten_ten_khao_sat?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="">Tên nhóm câu hỏi <span class="color-crimson">(*)</span></label>
                             <input type="text" id="ten_nhom_cau_hoi" name="ten_nhom_cau_hoi" class="form-control"
                                 required placeholder="Nhập tên nhóm câu hỏi">
                         </div>
                         <div class="form-group">
                             <label for="">Nội dung chi tiết</label>
                             <textarea id="ghi_chu" name="ghi_chu" class="form-control" required
                                 placeholder="Nhập nội dung chi tiết"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="">Thứ tự</label>
                             <input type="number" id="thu_tu" name="thu_tu" class="form-control"
                                 placeholder="Nhập thứ tự"></textarea>
                         </div>

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
                             <th>Tên khảo sát</th>
                             <th>Tên nhóm câu hỏi</th>
                             <th>Ghi chú</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $num = 0;?>
                         <?php foreach($nhomcauhoi__Get_All as $item):?>
                         <tr>
                             <td><?=++$num?></td>
                             <td> <?=$tenkhaosat->tenkhaosat__Get_By_Id($item->id_ten_khao_sat)->ten_khao_sat?></td>
                             <td><?=$item->ten_nhom_cau_hoi?></td>
                             <td><?=$item->ghi_chu?></td>
                             <td>
                                 <a href="#" type=" button" class="btn btn-warning"
                                     onclick="update_obj(<?=$item->id_nhom_cau_hoi?>)">
                                     <i class="fas fa-edit"></i>
                                 </a>
                                 <a href="#" type="button" class="btn btn-danger"
                                     onclick="return confirm_sweet('quan-ly-nhom-cau-hoi/action.php?req=delete&id_nhom_cau_hoi=<?=$item->id_nhom_cau_hoi?>')">
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

function update_obj(id_nhom_cau_hoi) {
    $.post('quan-ly-nhom-cau-hoi/update.php', {
        'id_nhom_cau_hoi': id_nhom_cau_hoi,
    }, function(data) {
        $(".card.card-success").addClass('collapsed-card');
        $('#div_update').html(data);
    });
}
 </script>