    <?php 
        require '../../models/getModel.php';
        $id_ten_khao_sat = $_POST['id_ten_khao_sat'];
        $tenkhaosat__Get_By_Id = $tenkhaosat->tenkhaosat__Get_By_Id($id_ten_khao_sat);
    ?>

    <form class="row form" action="quan-ly-ten-khao-sat/action.php?req=update" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="id_ten_khao_sat" value="<?=$tenkhaosat__Get_By_Id->id_ten_khao_sat?>">
        <div class="col-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Cập nhật</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tên khảo sát <span class="color-crimson">(*)</span></label>
                        <input type="text" id="ten_khao_sat" name="ten_khao_sat" class="form-control" required
                            placeholder="Nhập tên khảo sát" value="<?=$tenkhaosat__Get_By_Id->ten_khao_sat?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nội dung chi tiết</label>
                        <textarea id="ghi_chu" name="ghi_chu" class="form-control" placeholder="Nhập nội dung chi tiết"
                            required><?=$tenkhaosat__Get_By_Id->ghi_chu?></textarea>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="submit" value="Cập nhật" class="btn btn-danger float-right">
                </div>
            </div>
            <!-- /.card -->
        </div>
    </form>