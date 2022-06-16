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
    <P>Tên người nhận : <font color="red"> {{$order -> name}}</font>
    </P>
    <p>Địa chỉ : <font color="red"> {{$order -> address}}</font>
    </p>
    <br>
    <br>
    <table class="table table-hover mt-5">
        <thead>
            <tr>
                <th style="text-align: center ;">ID đơn hàng</th>
                <th style="text-align: center ;">Email người nhận</th>
                <th style="text-align: center ;">Số Điện Thoại</th>




            </tr>
        </thead>
        <tbody>

            <tr style="text-align: center ;">
                <td>{{$order -> id}}</td>
                <td>{{$order -> email}}</td>
                <td>{{$order -> phone}}</td>
            </tr>

        </tbody>


    </table>
    <br>
    <br>

    <h4>Tổng thanh toán :<font color="red">Tổng tiền</font> </h4>

    <br><br>
    <hr>

</div>

@stop()