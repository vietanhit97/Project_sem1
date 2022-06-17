@extends('master.admin')
@section('title','Quản lí khách hàng')
@section('content')
<h2 style="text-align: center ;">
    <font color="RED">KHÁCH HÀNG</font>
</h2>
<form action="{{route('customer.index')}}" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <input type="text" name='key' class="form-control" id="" placeholder="Tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>

</form>
<table class="table table-hover mt-5">
    <thead>
        <tr >
            <th  style="text-align: center ;">STT</th>
            <th  style="text-align: center ;">Tên Khách Hàng</th>
            <th  style="text-align: center ;">Email Khách hàng</th>
            <th  style="text-align: center ;">Số Điện Thoại</th>
            <th  style="text-align: center ;">Địa Chỉ</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $key => $cat)
        <tr style="text-align: center ;">
            <td>{{$key+=1}}</td>
            <td>{{$cat -> name}}</td>
            <td>{{$cat -> email}}</td>
            <td>{{$cat -> phone}}</td>
            <td>{{$cat -> address}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>

{{$cats->appends(request()->all())->links()}}
@stop