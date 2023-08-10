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

<form action="{{route('nhanvien.update', $nhanvien->id)}}" method="post">
    @csrf
    @method('PUT')
    <!-- <div class="mb-3 mt-3">
    <label for="name" class="form-label">id_category:</label>
    <input type="number" class="form-control" id="id_category" placeholder="Enter id_category" name="id_category">
  </div> -->
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Tên nhân viên</label>
        <input type="text" class="form-control" id="tenNhanVien" placeholder="Nhập tên nhân viên" name="tenNhanVien" value="{{$nhanvien -> tenNhanVien}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Giới tính</label>
        <input type="text" class="form-control" id="gioiTinh" placeholder="Nhập giới tính" name="gioiTinh" value="{{$nhanvien->gioiTinh}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="diaChi" placeholder="Nhập địa chỉ" name="diaChi" value="{{$nhanvien -> diaChi}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Điện thoại</label>
        <input type="text" class="form-control" id="dienThoai" placeholder="Nhập điện thoại" name="dienThoai" value ="{{$nhanvien->dienThoai}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Ngày sinh</label>
        <input type="text" class="form-control" id="ngaySinh" placeholder="Nhập ngày sinh" name="ngaySinh" value="{{$nhanvien->ngaySinh}}">
    </div>

    <hr>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
