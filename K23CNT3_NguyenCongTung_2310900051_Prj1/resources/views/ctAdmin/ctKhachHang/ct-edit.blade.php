@extends('_ctLayouts.ctAdmin._master')

@section('title', 'Chỉnh Sửa Khách Hàng')    

@section('content-body')
<form action="{{ route('CongTung.Khach.EditSubmit', $ctKhachHang->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa khách hàng</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="ctMaKhach" class="col-sm-2 col-form-label">Mã khách hàng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctMaKhach" value="{{ $ctKhachHang->ctMaKhachHang }}" name="ctMaKhach" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctTenKhach" class="col-sm-2 col-form-label">Tên khách hàng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctTenKhach" value="{{ $ctKhachHang->ctHoTenKhachHang }}" name="ctTenKhach" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="ctEmail" value="{{ $ctKhachHang->ctEmail }}" name="ctEmail" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctMatKhau" class="col-sm-2 col-form-label">Mật khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="ctMatKhau" value="{{ $ctKhachHang->ctMatKhau }}" name="ctMatKhau" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctDienThoai" class="col-sm-2 col-form-label">Điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctDienThoai" value="{{ $ctKhachHang->ctDienThoai }}" name="ctDienThoai" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ctDiaChi" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ctDiaChi" value="{{ $ctKhachHang->ctDiaChi }}" name="ctDiaChi" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="ctTrangThai1" name="ctTrangThai" value="1" {{ $ctKhachHang->ctTrangThai == 1 ? 'checked' : '' }} />
                    <label for="ctTrangThai1">Hiển thị</label>
                    &nbsp;
                    <input type="radio" id="ctTrangThai0" name="ctTrangThai" value="0" {{ $ctKhachHang->ctTrangThai == 0 ? 'checked' : '' }} />
                    <label for="ctTrangThai0">Khóa</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Ghi lại</button>
            <a href="/ctAdmin/Khach/ct-list" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection