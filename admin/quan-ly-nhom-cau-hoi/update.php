    <?php 
        require '../../models/getModel.php';
        $id_nhom_cau_hoi = $_POST['id_nhom_cau_hoi'];
        $nhomcauhoi__Get_By_Id = $nhomcauhoi->nhomcauhoi__Get_By_Id($id_nhom_cau_hoi);
        $tenkhaosat__Get_All = $tenkhaosat->tenkhaosat__Get_All();
    ?>

    <form class="row form" action="quan-ly-nhom-cau-hoi/action.php?req=update" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="id_nhom_cau_hoi" value="<?=$nhomcauhoi__Get_By_Id->id_nhom_cau_hoi?>">
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
                        <select class="form-control" name="id_ten_khao_sat" required>
                            <option value="<?=$nhomcauhoi__Get_By_Id->id_ten_khao_sat?>">
                                <?=$tenkhaosat->tenkhaosat__Get_By_Id($nhomcauhoi__Get_By_Id->id_ten_khao_sat)->ten_khao_sat?>
                            </option>
                            <?php foreach ($tenkhaosat__Get_All as $item):?>
                            <?php if($item->id_ten_khao_sat != $nhomcauhoi__Get_By_Id->id_ten_khao_sat):?>
                            <option value="<?=$item->id_ten_khao_sat?>"><?=$item->ten_khao_sat?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tên nhóm câu hỏi <span class="color-crimson">(*)</span></label>
                        <input type="text" id="ten_nhom_cau_hoi" name="ten_nhom_cau_hoi" class="form-control" required
                            placeholder="Nhập tên nhóm câu hỏi" value="<?=$nhomcauhoi__Get_By_Id->ten_nhom_cau_hoi?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nội dung chi tiết</label>
                        <textarea id="ghi_chu" name="ghi_chu" class="form-control"
                            placeholder="Nhập nội dung chi tiết"><?=$nhomcauhoi__Get_By_Id->ghi_chu?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Thứ tự <span class="color-crimson">(*)</span></label>
                        <input type="text" id="thu_tu" name="thu_tu" class="form-control" required
                            placeholder="Nhập thứ tự" value="<?=$nhomcauhoi__Get_By_Id->thu_tu?>">
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