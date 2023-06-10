    <?php 
        require '../../models/getModel.php';
        $id_cau_hoi = $_POST['id_cau_hoi'];
        $cauhoi__Get_By_Id = $cauhoi->cauhoi__Get_By_Id($id_cau_hoi);
        $nhomcauhoi__Get_All = $nhomcauhoi->nhomcauhoi__Get_All();
    ?>

    <form class="row form" action="quan-ly-cau-hoi/action.php?req=update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_cau_hoi" value="<?=$cauhoi__Get_By_Id->id_cau_hoi?>">
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
                        <label for="">Nhóm câu hỏi <span class="color-crimson">(*)</span></label>
                        <select class="form-control" name="id_nhom_cau_hoi" required>
                            <option value="<?=$cauhoi__Get_By_Id->id_nhom_cau_hoi?>">
                                <?=$nhomcauhoi->nhomcauhoi__Get_By_Id($cauhoi__Get_By_Id->id_nhom_cau_hoi)->ten_nhom_cau_hoi?>
                            </option>
                            <?php foreach ($nhomcauhoi__Get_All as $item):?>
                            <?php if($item->id_nhom_cau_hoi != $cauhoi__Get_By_Id->id_nhom_cau_hoi):?>
                            <option value="<?=$item->id_nhom_cau_hoi?>"><?=$item->ten_nhom_cau_hoi?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tên Nhóm câu hỏi <span class="color-crimson">(*)</span></label>
                        <input type="text" id="ten_cau_hoi" name="ten_cau_hoi" class="form-control" required
                            placeholder="Nhập tên Nhóm câu hỏi" value="<?=$cauhoi__Get_By_Id->ten_cau_hoi?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nội dung chi tiết</label>
                        <textarea id="ghi_chu" name="ghi_chu" class="form-control" placeholder="Nhập nội dung chi tiết"
                            required><?=$cauhoi__Get_By_Id->ghi_chu?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Loại câu hỏi</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_text"
                                value="<?=$cauhoi__Get_By_Id->is_text == 1 ? "checked" : ""?>"
                                id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Câu hỏi tùy chọn
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Thứ tự <span class="color-crimson">(*)</span></label>
                        <input type="text" id="thu_tu" name="thu_tu" class="form-control" required
                            placeholder="Nhập thứ tự" value="<?=$cauhoi__Get_By_Id->thu_tu?>">
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