@extends('layout')
@section('content')
<a href="{{ route('khachhang.create')}}" class="btn btn-primary">Thêm</a>
<table id="list" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên khách hàng</th>
            <th>Avatar</th>
            <th>Địa chỉ</th>
            <th>Ngày sinh</th>
            <!-- <th></th> -->
            <!-- <th>Ngày sinh</th> -->
            <th>Created_at </th>
            <th>Updated_at</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($khachhangs as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->tenKhachHang }}</td>
            <td>
                <img src="{{ asset('storage/images/'.$value->avatar)}}" alt="" style="height: 50px; width: 100px;">
            </td>
            <td>{{ $value->diaChi }}</td>
            <td>{{ $value->ngaySinh }}</td>
            <td>{{ $value->created_at }}</td>
            <td>{{ $value->updated_at }}</td>
            <td>
                <!-- <button class="btn btn-danger" onclick="document.getElementById('value-{{ $value->id }}').submit();">Xóa</button> -->

                <form action="{{ route('khachhang.destroy',$value->id) }}" method="Post" >
                    <a class="btn btn-primary" href="{{ route('khachhang.edit',$value->id) }}">Edit</a>
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
