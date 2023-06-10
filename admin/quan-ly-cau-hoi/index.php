 <?php
    // require "../models/getModel.php";
    $cauhoi__Get_All = $cauhoi->cauhoi__Get_All();
    $nhomcauhoi__Get_All = $nhomcauhoi->nhomcauhoi__Get_All();
 ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý câu hỏi</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Quản lý câu hỏi</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <section class="content">
         <form class="row form" action="quan-ly-cau-hoi/action.php?req=add" method="post" enctype="multipart/form-data">
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
                             <label for="">Nhóm câu hỏi <span class="color-crimson">(*)</span></label>
                             <select class="form-control" name="id_nhom_cau_hoi" required>
                                 <option value="">Chọn Nhóm câu hỏi</option>
                                 <?php foreach ($nhomcauhoi__Get_All as $item):?>
                                 <option value="<?=$item->id_nhom_cau_hoi?>_"><?=$item->ten_nhom_cau_hoi?> -
                                     <?=$nhomcauhoi->nhomcauhoi__Get_By_Id($item->id_nhom_cau_hoi)->ten_nhom_cau_hoi?>
                                 </option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="">Tên câu hỏi <span class="color-crimson">(*)</span></label>
                             <input type="text" id="ten_cau_hoi" name="ten_cau_hoi" class="form-control" required
                                 placeholder="Nhập tên câu hỏi">
                         </div>
                         <div class="form-group">
                             <label for="">Nội dung chi tiết</label>
                             <textarea id="ghi_chu" name="ghi_chu" class="form-control" required
                                 placeholder="Nhập nội dung chi tiết"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="">Loại câu hỏi</label>
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="1" id="flexCheckIndeterminate"
                                     name="is_text">
                                 <label class="form-check-label" for="flexCheckIndeterminate">
                                     Câu hỏi tùy chọn
                                 </label>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="">Thứ tự</label>
                             <input type="number" id="thu_tu" name="thu_tu" class="form-control"
                                 placeholder="Nhập thứ tự" />
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
                             <th>Nhóm câu hỏi</th>
                             <th>Tên câu hỏi</th>
                             <th>Tùy chọn</th>
                             <th>Ghi chú</th>
                             <th>Thao tác</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $num = 0;?>
                         <?php foreach($cauhoi__Get_All as $item):?>
                         <tr>
                             <td><?=++$num?></td>
                             <td> <?=$nhomcauhoi->nhomcauhoi__Get_By_Id($item->id_nhom_cau_hoi)->ten_nhom_cau_hoi?>
                             </td>
                             <td><?=$item->ten_cau_hoi?></td>
                             <td><?=$item->is_text ==1 ? "Tùy chọn" : "Bắt buộc"?></td>
                             <td><?=$item->ghi_chu?></td>
                             <td>
                                 <a href="#" type=" button" class="btn btn-warning"
                                     onclick="update_obj(<?=$item->id_cau_hoi?>)">
                                     <i class="fas fa-edit"></i>
                                 </a>
                                 <a href="#" type="button" class="btn btn-danger"
                                     onclick="return confirm_sweet('quan-ly-cau-hoi/action.php?req=delete&id_cau_hoi=<?=$item->id_cau_hoi?>')">
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

function update_obj(id_cau_hoi) {
    $.post('quan-ly-cau-hoi/update.php', {
        'id_cau_hoi': id_cau_hoi,
    }, function(data) {
        $(".card.card-success").addClass('collapsed-card');
        $('#div_update').html(data);
    });
}
 </script>