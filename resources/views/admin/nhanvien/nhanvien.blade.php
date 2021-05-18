@extends('admin.layout.master')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách nhân viên</h1>
</div>

<div class="card">
    <div class="card-body d-flex justify-content-between " >
        <h5 class="mt-2 text-gray-800">Thêm nhân viên</h5>
        <a class="btn btn-primary float-right" onclick="openform()">Thêm mới</a>
    </div>
    <div class="mb-4" id="form-crnv" style="display:none;">
        <form>
                <div class="row mx-2">
                  <div class="col-sm">
                    <label class="form-label font-weight-bold">Tên</label>
                    <input type="text" class="form-control" placeholder="Tên">
                  </div>
                  <div class="col-sm">
                    <label class="form-label font-weight-bold">Họ</label>
                    <input type="text" class="form-control" placeholder="Họ">
                  </div>
                  <div class="col-sm">
                    <label class="form-label font-weight-bold">Ngày sinh</label>
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                  </div>
                  <div class="col-sm">
                    <label class="form-label font-weight-bold">Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Số điện thoại">
                  </div>
                </div>
                <div class="row mx-2 mt-4 ">
                    <div class="col-sm">
                        <label class="form-label font-weight-bold">Giới tính</label>
                        <select class="form-select form-control">
                            <option selected>Giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                            <option value="3">Khác</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label class="form-label font-weight-bold">Số điện thoại</label>
                        <input type="text" class="form-control" placeholder="Số điện thoại">
                    </div>
                    <div class="col-sm">
                      <label class="form-label font-weight-bold">Địa chỉ thường trú</label>
                      <input type="text" class="form-control" placeholder="Địa chỉ">
                    </div>
                    <div class="col-sm">
                      <label class="form-label font-weight-bold">Địa chỉ tạm trú</label>
                      <input type="text" class="form-control" placeholder="Địa chỉ">
                    </div>
                </div>

                <div class="row mx-2 mt-4 ">
                    <div class="col-sm">
                        <label class="form-label font-weight-bold">Ngày tham gia</label>
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                      </div>
                    <div class="col-sm">
                        <label class="form-label font-weight-bold">Bộ phận chính</label>
                        <select class="form-select form-control">
                            <option selected>Phòng ban</option>
                            <option value="1">Nhân sự</option>
                            <option value="2">Maketing</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label class="form-label font-weight-bold">Chức vụ</label>
                        <select class="form-select form-control">
                            <option selected>Phòng ban</option>
                            <option value="1">Nhân viên</option>
                            <option value="2">Quản lý</option>
                        </select>
                    </div>
                    <div class="col-sm">
                      <label class="form-label font-weight-bold">Phân quyền</label>
                      <select class="form-select form-control">
                        <option selected>Phòng ban</option>
                        <option value="1">Nhân viên</option>
                        <option value="2">Quản lý</option>
                    </select>
                    </div>
                </div>
                <div class="row mx-2 mt-4 ">
                    <div class="col-sm-3">
                        <label class="form-label font-weight-bold">Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Mật khẩu">
                      </div>
                    <div class="col-sm-3">
                        <label class="form-label font-weight-bold">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Xác nhận mật khẩu">
                    </div>
                </div>
                
                <div class="d-flex justify-content-end row mx-4 mt-4">
                    <button type="submit" class="btn btn-primary mb-3 mx-3 " >Lưu</button>
                    <button type="button" class="btn btn-danger mb-3 " onclick="closeform()" >Hủy</button>
                </div>
        </form>
    </div>
</div>

<div class="table-settings mb-4 mt-4">
    <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>STT</th>
                <th>Họ đệm</th>
                <th>Tên</th>
                <th>Tên đăng nhập</th>
                <th>Loại tài khoản</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>
</div>
<script>
    function openform(){
        $('#form-crnv').css('display','block');
    }
    function closeform(){
        $('#form-crnv').css('display','none');
    }
</script>
@endsection