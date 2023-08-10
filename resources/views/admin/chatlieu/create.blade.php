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

<form action="{{route('chatlieu.store')}}" method="post">
    @csrf
    <!-- <div class="mb-3 mt-3">
    <label for="name" class="form-label">id_category:</label>
    <input type="number" class="form-control" id="id_category" placeholder="Enter id_category" name="id_category">
  </div> -->
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Tên chất liệu</label>
        <input type="text" class="form-control" id="tenChatLieu" placeholder="Nhập tên chất liệu" name="tenChatLieu">
    </div>
    <!-- <div class="mb-3 mt-3">
        <label for="name" class="form-label">Giới tính</label>
        <input type="text" class="form-control" id="gioiTinh" placeholder="Nhập giới tính" name="gioiTinh">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="diaChi" placeholder="Nhập địa chỉ" name="diaChi">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Điện thoại</label>
        <input type="text" class="form-control" id="dienThoai" placeholder="Nhập điện thoại" name="dienThoai">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Ngày sinh</label>
        <input type="text" class="form-control" id="ngaySinh" placeholder="Nhập ngày sinh" name="ngaySinh">
    </div> -->
    <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
