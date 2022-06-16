@extends('master.user')
@section('title','Lịch sử Mua Hàng')
@section('main')

<div class="container">
    <div class="product-big-title-area">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Lịch Sử Mua Hàng</h2>
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
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer->orders as $key => $order)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{number_format($order->getTotalAmount())}}</td>
                <td>
                    @if ($order->status == 0)
                    <span class="label label-primary">Chờ duyệt</span>
                    @elseif($order->status == 1)
                    <span class="label label-success">Đã duyệt</span>
                    @elseif($order->status == 2)
                    <span class="label label-warning">Đã thanh toán</span>
                    @else
                    <span class="label label-danger">Đã hủy</span>
                    @endif
                </td>
                <td>
                    <a  href="{{route('customer.orders_detail',$order->id)}}" class="btn btn-success">Xem</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop