<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin khách hàng
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Tên</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $data['name'] ?>" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>" required>

                    </div>
                    <button type="submit" class="btn btn-primary" >Lưu</button>
                    <a type="button" href="./?c=CustomerController&a=index" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>