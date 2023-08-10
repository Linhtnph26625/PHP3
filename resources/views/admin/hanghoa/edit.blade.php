@extends('layout')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('hanghoa.update', $hanghoa->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Tên hàng hóa</label>
        <input type="text" class="form-control" id="tenHangHoa" placeholder="Nhập tên hàng hóa" name="tenHangHoa">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Số lượng</label>
        <input type="text" class="form-control" id="soLuong" placeholder="Nhập giới tính" name="soLuong">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Đơn giá nhập</label>
        <input type="text" class="form-control" id="donGiaNhap" placeholder="Nhập đơn giá nhập vào" name="donGiaNhap">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Đơn giá bán</label>
        <input type="text" class="form-control" id="donGiaBan" placeholder="Nhập đơn giá bán" name="donGiaBan">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Ảnh</label>
        <input type="file" class="form-control" id="anh" placeholder="Thêm ảnh" name="anh">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Ghi chú</label>
        <input type="text" class="form-control" id="ghiChu" placeholder="Thêm ghi chú" name="ghiChu">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Chất liệu</label>
        <select name="" id="" id="chatlieu_id" name="chatlieu_id">
            <option value="1">Cotton</option>
            <option value="2">Vải thô dáp</option>
            <option value="3">Vải sợi xịn</option>
        </select>
    </div>
    <hr>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
