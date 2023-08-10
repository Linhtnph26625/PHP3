@extends('layout')
@section('content')
<a href="{{ route('hanghoa.create')}}" class="btn btn-primary">Thêm</a>
<table id="list" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên hàng hóa</th>
            <th>Số lượng</th>
            <th>Giá nhập</th>
            <th>Giá bán</th>
            <th>Hình ảnh</th>
            <th>Ghi chú</th>
            <th>Chất liệu</th>
            <th>Created_at </th>
            <th>Updated_at</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hanghoas as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->tenHangHoa }}</td>
            <td>{{ $value->soLuong }}</td>
            <td>{{ $value->donGiaNhap }}</td>
            <td>{{ $value->donGiaBan }}</td>
            <td>{{ $value->anh }}</td>
            <td>{{ $value->ghiChu }}</td>
            <td>{{ $tenChatLieu}}</td>
            <td>{{ $value->created_at }}</td>
            <td>{{ $value->updated_at }}</td>
            <td>
                <!-- <button class="btn btn-danger" onclick="document.getElementById('value-{{ $value->id }}').submit();">Xóa</button> -->

                <form action="{{ route('chatlieu.destroy',$value->id) }}" method="Post" >
                    <a class="btn btn-primary" href="{{ route('chatlieu.edit',$value->id) }}">Edit</a>
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
