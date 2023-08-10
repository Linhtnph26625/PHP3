@extends('layout')
@section('content')
<a href="{{ route('nhanvien.create')}}" class="btn btn-primary">Thêm</a>
<table id="list" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên nhân viên</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Ngày sinh</th>
            <th>Created_at </th>
            <th>Updated_at</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nhanviens as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->tenNhanVien }}</td>
            <td>{{ $value->gioiTinh }}</td>
            <td>{{ $value->diaChi }}</td>
            <td>{{ $value->dienThoai }}</td>
            <td>{{ $value->ngaySinh }}</td>
            <td>{{ $value->created_at }}</td>
            <td>{{ $value->updated_at }}</td>
            <td>
                <!-- <button class="btn btn-danger" onclick="document.getElementById('value-{{ $value->id }}').submit();">Xóa</button> -->

                <form action="{{ route('nhanvien.destroy',$value->id) }}" method="Post" >
                    <a class="btn btn-primary" href="{{ route('nhanvien.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
