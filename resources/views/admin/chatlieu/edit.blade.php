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
<form action="{{route('chatlieu.update', $chatlieu->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Tên chất liệu</label>
        <input type="text" class="form-control" id="tenChatLieu" placeholder="Nhập tên chất liệu" name="tenChatLieu" value="{{$chatlieu -> tenChatLieu}}">
    </div>
    <hr>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
