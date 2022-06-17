@extends('master.admin')
@section('title','Quản lí đơn hàng')
@section('content')
<h2 style="text-align: center ;">
    <font color="RED">ĐƠN HÀNG</font>
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
            <th  style="text-align: center ;">ID đơn hàng</th>
            <th  style="text-align: center ;">Tên Người nhận</th>
            <th  style="text-align: center ;">Email người nhận</th>
            <th  style="text-align: center ;">Số Điện Thoại</th>
            <th  style="text-align: center ;">Địa Chỉ</th>
            <th  style="text-align: center ;">Trạng Thái</th>
            <th  style="text-align: center ;">Chi Tiết</th>


            
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr style="text-align: center ;">
            <td>{{$order -> id}}</td>
            <td>{{$order -> name}}</td>
            <td>{{$order -> email}}</td>
            <td>{{$order -> phone}}</td>
            <td>{{$order -> address}}</td>
            <td>{{$order -> status}}</td>
            <td>
            <a href="{{route('order.show',$order->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

{{$orders->appends(request()->all())->links()}}
@stop