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

<form action="{{route('khachhang.update', $khachhang->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- <div class="mb-3 mt-3">
    <label for="name" class="form-label">id_category:</label>
    <input type="number" class="form-control" id="id_category" placeholder="Enter id_category" name="id_category">
  </div> -->
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Tên khách hàng</label>
        <input type="text" class="form-control" id="tenKhachHang" placeholder="Nhập tên khách hàng" name="tenKhachHang" value="{{$khachhang -> tenKhachHang}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Avatar</label>
        <input type="file" class="form-control" id="avatar" placeholder="Thêm ảnh đại diện" name="avatar" value="{{$khachhang -> avatar}}"></div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="diaChi" placeholder="Nhập địa chỉ" name="diaChi" value="{{$khachhang -> diaChi}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Ngày sinh</label>
        <input type="text" class="form-control" id="ngaySinh" placeholder="Nhập ngày sinh" name="ngaySinh" value="{{$khachhang->ngaySinh}}">
    </div>

    <hr>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
