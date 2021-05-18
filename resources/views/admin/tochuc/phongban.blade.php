@extends('admin.layout.master')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách phòng ban</h1>
</div>
<!--Thêm phòng ban -->
<div class="card">
    <div class="card-body d-flex justify-content-between " >
        <h5 class="mt-2 text-gray-800">Thêm phòng ban</h5>
        <a class="btn btn-primary float-right" onclick="openform()">Thêm mới</a>
    </div>
    @if($errors->any())
    <div class="mb-4" id="form-crnv" style="display:block;">
        <div class="alert alert-danger" id="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @else
    <div class="mb-4" id="form-crnv" style="display:none;">
    @endif
        <form action="{{ route('tochuc.phongban.store')}}", method="POST">
            @csrf
                <div class="row mx-2">
                  <div class="col-sm">
                    <label class="form-label font-weight-bold">Tên</label>
                    <input type="text" class="form-control" name="Ten" placeholder="Tên" required>
                  </div>
                  <div class="col-sm">
                    <label class="form-label font-weight-bold">Địa chỉ</label>
                    <input type="text" class="form-control" name="DiaChi" placeholder="Địa chỉ" required>
                  </div>
                  <div class="col-sm">
                    <label class="form-label font-weight-bold">Số diện thoại</label>
                    <input type="phone" class="form-control" name="sdt" placeholder="Số diện thoại" required>
                  </div>
                </div> 
                <div class="d-flex justify-content-end row mx-4 mt-4">
                    <button type="submit" class="btn btn-primary mb-3 mx-3 "  >Lưu</button>
                    <button type="button" class="btn btn-danger mb-3 " onclick="closeform()" >Hủy</button>
                </div>
        </form>
    </div>
</div>
<!--Danh sách phòng ban -->
<div class="table-settings mb-4 mt-4">
    <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($phongbans))
                @foreach ($phongbans as $key=>$phongban)
                    <tr>
                        <th>{{$key+1}}</th>
                        <th>{{$phongban->Ten}}</th>
                        <th>{{$phongban->sdt}}</th>
                        <th>{{$phongban->DiaChi}}</th>
                        <th>
                            <div class="row ml-1">
                                <button type="submit" class="btn btn-primary mx-1" onclick="editInformation({{$phongban->idPB}})"  >Sửa</button>
                                <button type="button" class="btn btn-danger " onclick="closeform()" >Xóa</button>
                            </div>
                        </th>
                    </tr>
                @endforeach
                @endif
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
        $('#error').css('display','none');
    }
</script>

{{-- <script type="text/javascript">
    function editInformation(id){
        event.preventDefault();
        $.ajax({
            type: 'GET',
            url: "{{route('manager.get.edit')}}",
            data: {id: id},
            success: function(data) {
                console.log(data);
                $('#idUser').val(data['data']['user'].id);
                $("#editInformationModal input[name=name]").val(data['data'].user.name);
                $("#editInformationModal input[name=email]").val(data['data'].user.email);
                $("#editInformationModal input[name=phone]").val(data['data'].user.phone);
                $("#editInformationModal").modal('show');
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function closemodal_pass(text) {
        console.log(`#${text}`);
        $(`#${text}`).removeClass('show');
        $(`#${text}`).css('display', 'none');
        $(`input[name='name']`).val('');
        $(`input[name='email']`).val('');
        $(`input[name='phone']`).val('');
        $('#div_err_pass').css('display', 'none');
        $('#div_err_password').css('display', 'none');
        $(`#${text}`).modal('hide');
    }

    function checkPhone(text) {
        console.log(text);
        var check = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/g;
        if (text && !text.match(check)) {
            $('#err_phone').text('Số điện thoại sai định dạng');
            $('#btn_submit').prop('disabled', true);
        } else {
            $('#err_phone').text('');
            $('#btn_submit').prop('disabled', false);
        }
    }
</script> --}}
@endsection