@extends('master.user')
@section('title','Chi tiết'.' '. $product->name)
@section('main')
<div class="content">
    <div class="container">
        <div class="row">
            <div id="main">
                <div class="product-essential">
                    <div class="product-big-title-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-bit-title text-center">
                                        <h2>Chi Tiết Sản Phẩm</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-content-right">
                                        <div class="product-breadcroumb">
                                            <a href="{{route('user')}}">Trang Chủ</a>
                                            <a href="{{route('user.shop')}}">Sản Phẩm</a>
                                            <a href="">{{$product->name}}</a>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="product-images">
                                                    <div class="product-main-img">
                                                        <img src="{{url('public/uploads')}}/{{$product->image}} " id="big-img"
                                                            width="50%" alt="">
                                                    </div>
                                                    
                                                    <div class="product-gallery">
                                                    <img src="{{url('public/uploads/'.$product->image)}}" class="product-thumb" alt="" style="width:100px">
                                                        @foreach($image_list1 as $img1)
                                                        <img class="product-thumb"
                                                            src="{{url('public/uploads/'.$img1->image_name)}}" alt=""
                                                            style="width:120px">
                                                            @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="product-inner">
                                                    <h2 class="product-name">{{$product->name}}</h2>
                                                    <div class="product-inner-price">
                                                        @if($product->sale_price > 0 )
                                                        <ins>{{number_format($product->sale_price)}} đ</ins>
                                                        <del>{{number_format($product->price)}} đ</del>
                                                        @else
                                                        <ins>{{number_format($product->price)}} đ</ins>
                                                        @endif
                                                    </div>

                                                    <form action="{{route('cart.add', $product->id )}}" method="GET"
                                                        class="cart">
                                                        <div class="quantity">
                                                            <input type="number" size="4" class="input-text qty text"
                                                                title="Qty" value="1" name="quantity" min="1" step="1">
                                                        </div>
                                                        <button class="add_to_cart_button " type="submit"><i
                                                                class="fa fa-shopping-cart"></i> Giỏ
                                                            Hàng </button>
                                                    </form>
                                                    <div role="tabpanel">
                                                        <ul class="product-tab" role="tablist">
                                                            <li role="presentation" class="active"><a href="#home"
                                                                    aria-controls="home" role="tab"
                                                                    data-toggle="tab">Chi Tiết</a></li>
                                                            <li role="presentation"><a href="#profile"
                                                                    aria-controls="profile" role="tab"
                                                                    data-toggle="tab">Đánh Giá</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane fade in active"
                                                                id="home">
                                                                <h2>Chi tiết Sản Phẩm</h2>
                                                                {!! $product->description !!}
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                                <h2>Reviews</h2>
                                                                <div class="submit-review">
                                                                    <p><label for="name">Họ Tên</label> <input
                                                                            name="name" type="text"></p>
                                                                    <p><label for="email">Email</label> <input
                                                                            name="email" type="email">
                                                                    </p>
                                                                    <div class="rating-chooser">
                                                                        <p>Vote</p>

                                                                        <div class="rating-wrap-post">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                    <p><label for="review">Đánh giá</label>
                                                                        <textarea name="review" id="" cols="30"
                                                                            rows="10"></textarea>
                                                                    </p>
                                                                    <p><input type="submit" value="Đánh Giá"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('js')
<script>
$('.product-thumb').click(function() {
    var _src = $(this).attr('src');
    // alert(_src)
    $('#big-img').attr('src', _src);
})
</script>
@stop()