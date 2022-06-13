@extends('master.admin')
@section('title','Thư mục rác Danh Mục')
@section('content')
<table class="table table-hover mt-5">


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
            <form action="{{route('customer.forceDelete',$cat->id)}}" method="POST" role="form">
                    @csrf @method('DELETE')
                    <a href="{{route('customer.restore',$cat->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Khôi Phục</a>
            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không ?')"><i class="fa fa-trash-o mr-1" aria-hidden="true"></i>Xóa Vĩnh Viễn</button>
           </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$cats->appends(request()->all())->links()}}
@stop