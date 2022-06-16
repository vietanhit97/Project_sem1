@extends('master.user')
@section('title','Đăng Nhập')
@section('main')
<div class="container">
    <div class="product-big-title-area">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Đặt Hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
  
        @if (count($cart->items))
        <div class="row">

            <div class="col-md-8">
                @if (auth()->guard('customer')->check())
                <form action="" method="POST" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Thông tin người đặt hàng</h3>
                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <span class="form-control">{{$customer->name}}</span>
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <span class="form-control">{{$customer->email}}</span>
                            </div>

                            <div class="form-group">
                                <label for="">Điện thoại</label>
                                <span class="form-control">{{$customer->phone}}</span>
                            </div>

                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <span class="form-control">{{$customer->address}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Thông tin người nhận hàng</h3>

                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" class="form-control" name="name" value="{{$customer->name}}"
                                    placeholder="Nhập họ tên...">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$customer->email}}"
                                    placeholder="Nhập Email...">
                            </div>

                            <div class="form-group">
                                <label for="">Điện thoại</label>
                                <input class="form-control" name="phone" value="{{$customer->phone}}"
                                    placeholder="Nhập số điện thoại...">
                            </div>

                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input class="form-control" name="address" value="{{$customer->address}}"
                                    placeholder="Nhập địa chỉ...">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Đặt Hàng</button>
                </form>
                @else

                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Chưa đăng nhập!</strong> <a href="{{ route('user.login') }}">click vào đây</a> để đăng nhâp
                </div>


                @endif
            </div>

            <div class="col-md-4">
                <h3>Thông tin giỏ hàng</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart->items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>

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
                            <td>{{$cart->totalAmount}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @else


    <div class="jumbotron">
        <div class="container">
            <h1>Giỏ hàng rỗng</h1>
            <p>Vui lòng tiếp tục mua hàng ...</p>
            <p>
                <a class="btn btn-primary" href="{{ route('user') }}">Tiếp tục mua hàng</a>
            </p>
        </div>
    </div>


    @endif
</div>
@stop