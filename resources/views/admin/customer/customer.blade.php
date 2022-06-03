@extends('master.admin')
@section('title','Quản lí khách hàng')
@section('content')

<form action="{{route('customer.index')}}" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <input type="text" name='key' class="form-control" id="" placeholder="Tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
    <a href="{{route('customer.create')}}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Thêm
        Mới</a>

</form>
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên Khách Hàng</th>
            <th>Email Khách hàng</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            <th>Chỉnh sửa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr>
            <td>{{$cat -> id}}</td>
            <td>{{$cat -> name}}</td>
            <td>{{$cat -> email}}</td>
            <td>{{$cat -> phone}}</td>
            <td>{{$cat -> address}}</td>
            <td>
                <form action="{{route('customer.destroy',$cat->id)}}" method="POST" role="form">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không ?')"><i
                            class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="text-right">
    <a href="{{route('customer.trashed')}}" class="btn btn-default "><i class="fa fa-trash" aria-hidden="true"></i>Thùng
        Rác</a>
</div>
{{$cats->appends(request()->all())->links()}}
@stop