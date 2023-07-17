<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới khách hàng
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Tên</label>
                        <input type="text" name="name" class="form-control" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" required>

                    </div>
                    <button type="submit" href="./?c=CustomerController&a=index"  class="btn btn-primary">Lưu</button>
                    <a type="button" href="./?c=CustomerController&a=index" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>