<?php
    $stt=0;
    $tt=0;
?>
@extends('master.user')
@section('title','Giỏ Hàng')
@section('main')
<div class="container">
    <div class="product-big-title-area">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Giỏ Hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @if (count($carts))
    <table class="table table-hover mt mb">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carts as $pro )
            <tr>
                <td>{{$stt+=1}}</td>
                <td><img src="{{url('public/uploads')}}/{{$pro -> image}}" alt="" width="50px"></td>
                <td>{{$pro -> name}}</td>
                <td>{{number_format($pro -> price)}} đ</td>
                <td>
                    <form action="{{ route('cart.update', $pro->id)}}" method="GET" class="form-inline" role="form">

                        <div class="form-group">
                            <input class="form-control" name="quantity" value="{{$pro->quantity}}">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">Cập Nhật</button>
                    </form>
                </td>
                <td>{{number_format($pro -> price*$pro->quantity)}}</td>
                <td>
                    <a href="{{ route('cart.delete', $pro->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')"> Xóa</a>
                </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h4> Tổng Tiền = {{$tt}}</h4>
    @else
    <div class="alert alert-danger mt">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Title!</strong> Không có dữ liệu nào...
    </div>

    @endif
</div>
@stop