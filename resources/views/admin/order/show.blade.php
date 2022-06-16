@extends('master.admin')

@section('title','Chi tiết sản phẩm')

@section('content')
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6" style="text-align: center">
            <h3>CỬA HÀNG ĐIỆN TỪ MELLO</h3>
            <p> 686 Hoàng Quốc Việt, Hà Nội.</p>
        </div>
        <div class="col-md-6" style="text-align: center">
            <h2>HOÁ ĐƠN BÁN HÀNG</h2>
            <p>đơn hàng điện tử</p>
        </div>

    </div>
    <P>Mã đơn hàng : <font color="red"> {{$order -> id}}</font>
    </P>
    <P>Tên người nhận : <font color="red"> {{$order -> name}}</font>
    </P>
    <P>Số điện thoại người nhận : <font color="red"> {{$order -> phone}}</font>
    </P>
    <p>Địa chỉ : <font color="red"> {{$order -> address}}</font>
    </p>
    <br>
    <br>
    <table class="table table-hover mt-5">
        <thead>
            <tr>
                <th style="text-align: center ;">STT</th>
                <th style="text-align: center ;">Tên sản phẩm</th>
                <th style="text-align: center ;">Số lượng</th>
                <th style="text-align: center ;">Giá Sản Phẩm</th>





            </tr>
        </thead>
        <tbody>

            @foreach($order->details as $key => $detail)
            <tr style="text-align: center ;">
                <td>{{$key+1}}</td>
                <td>{{$detail->product->name}}</td>
                <td>{{$detail->quantity}}</td>
                <td>{{number_format($detail->price)}} đ</td>
            </tr>
            @endforeach

        </tbody>


    </table>
    <br>
    <br>
    @foreach($order->details as $key => $detail)
    <h4>Tổng thanh toán :<font color="red">{{number_format($detail->price * $detail->quantity)}} đ</font>
    @endforeach
    </h4>

    <br><br>
    <hr>

</div>

@stop()