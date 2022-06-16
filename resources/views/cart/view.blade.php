<?php $stt= 0 ;?>
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
    @if (count($cart->items))
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
            @foreach($cart->items as $item )
            <tr>
                <td>{{$stt+=1}}</td>
                <td><img src="{{url('public/uploads')}}/{{$item -> image}}" alt="" width="50px"></td>
                <td>{{$item -> name}}</td>
                <td>{{number_format($item -> price)}} đ</td>
                <td>
                    <form action="{{ route('cart.update', $item->id)}}" method="GET" class="form-inline" role="form">
                        <div class="form-group">
                            <input type="number" class="input-text qty text" title="Qty"
                                value="{{$item->quantity}}" name="quantity" min="1" step="1">
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">Cập Nhật</button>
                    </form>
                </td>
                <td>{{number_format($item -> price*$item->quantity)}}</td>
                <td>
                    <a href="{{ route('cart.delete', $item->id) }}" class="btn btn-sm btn-danger"
                        onclick="return confirm('Bạn có muốn xóa không ?')"> Xóa</a>
                </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-bordered table-hover">
        <tbody>
            <tr>
                <th>Tổng số lượng</th>
                <td>{{$cart->totalQuantity}}</td>
            </tr>
            <tr>
                <th>Tổng tiền thanh toán</th>
                <td>{{number_format ($cart->totalAmount)}} đ</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <a href="{{route('user')}}" class="btn btn-primary">Tiếp tục mua hàng</a>
    <a href="{{route('cart.clear')}}" class="btn btn-danger" onclick="return confirm('bạn có chắc muốn xóa')">Xóa
        hết</a>
    <a href="{{route('customer.checkout')}}" class="btn btn-success">Đặt hàng ngay</a>
    @else
    <div class="alert alert-danger mt">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Giỏ hàng !</strong> Không có dữ liệu nào... 
        <a href="{{route('user')}}" class="btn btn-primary">Tiếp tục mua hàng</a>
    </div>
    @endif
</div>
@stop