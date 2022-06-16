@extends('master.user')
@section('title','Lịch sử Mua Hàng')
@section('main')

<div class="container">
    <div class="product-big-title-area">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Chi Tiết Mua Hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt">
   
    <table class="table table-bordered table-hover">
        <thead>
            <tr>

                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
            </tr>   

        </thead>
        <tbody>
            @foreach ($order->details as $key => $detail)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$detail->product->name}}</td>
                <td>{{$detail->quantity}}</td>
                <td>{{number_format($detail->price)}}</td>
                <td>{{number_format($detail->price * $detail->quantity)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop