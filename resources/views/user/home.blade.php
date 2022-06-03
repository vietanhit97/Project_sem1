<?php $px=852;
$tab=0; ?>
@extends('master.user')
@section('title','Trang Chủ')
@section('main')
<div id="box-content">
    <div class="container">
        <div class="row">
            <div class="slide-show">
                <div class="vt-slideshow">
                    <ul>
                        <li class="slide1" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s2.png" alt="" /></li>
                        <li class="slide2" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s1.png" alt="" /></li>
                        <li class="slide3" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s3.png" alt="" /></li>
                        <li class="slide3" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s4.png" alt="" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="position-03">
        <div class="container">
            <div class="row">
                <div class="box-1">
                    <h2>Nổi Bật</h2>
                    <ul class="control">
                        @foreach($categories as $key => $category)
                        <li data-rel="{{$px-=852}}px" class="{{'ct'.$key += 1}}">{{$category->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="box-2">
                    <div class="slide">
                        @foreach($categories as $key1 => $cat)
                        <div class="item">
                            <div class="box-image">
                                <a href="#"><img src="{{url('public/uploads')}}/{{$cat->product->image}}" class="w-100"
                                        alt="" /></a>
                            </div>
                            <div class="product-shop">
                                <div class="pro-info">
                                    <div class="pro-inner">
                                        <div class="pro-title product-name"><a
                                                href="detail.html">{{$cat->product ? $cat->product->name : ''}}</a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="wrap-price">
                                                <div class="price-box">
                                                    @if($cat->product->sale_price > 0)
                                                    <span class="regular-price">
                                                        <span class="price">{{number_format($cat->product->sale_price)}}
                                                            đ</span></span>
                                                    <p class="special-price">
                                                        <span class="price">{{number_format($cat->product->price)}}
                                                            đ</span>
                                                    </p>
                                                    @else
                                                    <span class="regular-price">
                                                        <span class="price">{{number_format($cat->product->price)}}
                                                            đ</span></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount"><a href="#">1(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-btn">
                                    <div class="box-inner">
                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                        <span class="qview">
                                            <a class="vt_quickview_handler" data-original-title="Quick View"
                                                data-placement="left" data-toggle="tooltip" href="{{route('user.productSingle',['product'=>$cat->product->id,'slug'=>Str::slug('$cat->product->name')])}}"><span>Quick
                                                    View</span></a>
                                        </span>
                                        <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Mới Nhất -->
        <div class="position-04">
            <div class="container">
                <div class="row">
                    <div class="title-sp">
                        Mới nhất
                        <div class="std">
                            Sản phẩm mới ra mắt hiện tại
                        </div>
                        <ul class="view-more">
                            @foreach($categories as $category)
                            <li class=""><a
                                    href="{{route('user.category',['category'=>$category->id,'slug'=>Str::slug($category->name)])}}"><span>Xem
                                        Thêm {{$category->name}}</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="block vt-slider vt-slider4">
                        <div class="slider-inner">
                            <div class="container-slider">
                                <div class="products-grid">
                                    <div class="item">
                                        @foreach($productHot as $proHot)
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/uploads')}}/{{$proHot->image}}"
                                                        alt="Product demo" />
                                                </a>
                                            </div>
                                            <div class="product-shop">
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="#">
                                                                {{$proHot->name}}</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    @if($proHot->sale_price > 0)
                                                                    <span class="regular-price">
                                                                        <span
                                                                            class="price">{{number_format($proHot->sale_price)}}
                                                                            đ</span></span>
                                                                    <p class="special-price">
                                                                        <span
                                                                            class="price">{{number_format($proHot->price)}}
                                                                            đ</span>
                                                                    </p>
                                                                    @else
                                                                    <span class="regular-price">
                                                                        <span
                                                                            class="price">{{number_format($proHot->price)}}
                                                                            đ</span></span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        @if(auth()->guard('customer')->check())
                                                        @if (auth()->guard('customer')->user()->isFavorite($proHot->id))
                                                        <a title="Add to wishlist"
                                                            href="{{route('user.unfavorite',$proHot->id)}}"
                                                            class="link-wishlist"
                                                            style="background-color:red">&nbsp;</a>
                                                        @else
                                                        <a title="Add to wishlist"
                                                            href="{{route('user.favorite',$proHot->id)}}"
                                                            class="link-wishlist">&nbsp;</a>
                                                        @endif
                                                        @else
                                                        <a title="Add to wishlist" href="{{route('user.login')}}"
                                                            class="link-wishlist">&nbsp;</a>
                                                        @endif
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip"
                                                                href="{{route('user.productSingle',['product'=>$proHot->id,'slug'=>Str::slug($proHot->name)])}}"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                        <a title="Add to cart" class="btn-cart"
                                                            href="{{route('cart.add',$proHot->id)}}">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!--end item wrap -->
                                </div>
                            </div>
                        </div>
                        <div class="navslider">
                            <a class="prev" href="#">Prev</a>
                            <a class="next" href="#">Next</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Hết Mới Nhất -->
        <!-- Khuyễn Mãi -->
        <div class="position-02">
            <div class="container">
                <div class="row">
                    <div class="title-sp">
                        Khuyễn Mãi
                        <div class="std">
                            Giảm giá sốc nhanh tay mua ngay
                        </div>
                    </div>
                    <div class="block vt-slider vt-slider3">
                        <div class="slider-inner">
                            <div class="container-slider">
                                <div class="products-grid">
                                    @foreach($productSale as $pro)
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/uploads')}}/{{$pro->image}}"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        @if(auth()->guard('customer')->check())
                                                        @if (auth()->guard('customer')->user()->isFavorite($pro->id))
                                                        <a title="Add to wishlist"
                                                            href="{{route('user.unfavorite',$pro->id)}}"
                                                            class="link-wishlist"
                                                            style="background-color:red">&nbsp;</a>
                                                        @else
                                                        <a title="Add to wishlist"
                                                            href="{{route('user.favorite',$pro->id)}}"
                                                            class="link-wishlist">&nbsp;</a>
                                                        @endif
                                                        @else
                                                        <a title="Add to wishlist" href="{{route('user.login')}}"
                                                            class="link-wishlist">&nbsp;</a>
                                                        @endif
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip"
                                                                href="{{route('user.productSingle',['product'=>$pro->id,'slug'=>Str::slug($pro->name)])}}"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart"
                                                    href="{{route('cart.add',$pro->id)}}">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="#">{{$pro->name}}</a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                @if($proHot->sale_price > 0)
                                                                <span class="regular-price">
                                                                    <span
                                                                        class="price">{{number_format($pro->sale_price)}}
                                                                        đ</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">{{number_format($pro->price)}}
                                                                        đ</span>
                                                                </p>
                                                                @else
                                                                <span class="regular-price">
                                                                    <span class="price">{{number_format($pro->price)}}
                                                                        đ</span></span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="navslider">
                                <a class="prev" href="#">Prev</a>
                                <a class="next" href="#">Next</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Hết Khuyễn Mãi -->
        @foreach ($categories as $category)
        <div class="position-08">
            <div class="container">
                <div class="title-sp">
                    <h2>{{$category->name}}</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab1">{{$category->name}} bán chạy </a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <div class="block vt-slider vt-slider7">
                            <div class="slider-inner">
                                <div class="container-slider">
                                    <div class="products-grid">
                                        @foreach($category->products()->limit(4)->get() as $product)
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#"
                                                        title="Ipad Air and iOS7">
                                                        <img class="first_image"
                                                            src="{{url('public/uploads')}}/{{$product->image}}"
                                                            alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            @if(auth()->guard('customer')->check())
                                                            @if(auth()->guard('customer')->user()->isFavorite($product->id))
                                                            <a title="Add to wishlist"
                                                                href="{{route('user.unfavorite',$product->id)}}"
                                                                class="link-wishlist"
                                                                style="background-color:red">&nbsp;</a>
                                                            @else
                                                            <a title="Add to wishlist"
                                                                href="{{route('user.favorite',$product->id)}}"
                                                                class="link-wishlist">&nbsp;</a>
                                                            @endif
                                                            @else
                                                            <a title="Add to wishlist" href="{{route('user.login')}}"
                                                                class="link-wishlist">&nbsp;</a>
                                                            @endif
                                                            <a title="Add to compare" href="#"
                                                                class="link-compare">&nbsp;</a>
                                                            <span class="qview">
                                                                <a class="vt_quickview_handler"
                                                                    data-original-title="Quick View"
                                                                    data-placement="left" data-toggle="tooltip"
                                                                    href="{{route('user.productSingle',['product'=>$product->id,'slug'=>Str::slug($product->name)])}}"><span>Quick
                                                                        View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart"
                                                        href="{{route('cart.add',$product->id)}}">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="">
                                                                {{$product->name}}</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    @if($product->sale_price > 0)
                                                                    <span class="regular-price">
                                                                        <span
                                                                            class="price">{{number_format($product->sale_price)}}
                                                                            đ</span></span>
                                                                    <p class="special-price">
                                                                        <span
                                                                            class="price">{{number_format($product->price)}}
                                                                            đ</span>
                                                                    </p>
                                                                    @else
                                                                    <span class="regular-price">
                                                                        <span
                                                                            class="price">{{number_format($product->price)}}
                                                                            đ</span></span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end item wrap -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="navslider">
                                    <a class="prev" href="#">Prev</a>
                                    <a class="next" href="#">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
        <!-- Tin Tức -->
        <div class="position-06">
            <div class="container">
                <div class="row">
                    <div class="box-newletter">
                        <div class="title">
                            <span>Tin Tức </span>
                        </div>
                        <form action="#" method="post">
                            <input type="text" name="newletter" placeholder="Nhập địa chỉ Gmail " />
                            <button><span>Đăng ký </span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hết Tin Tức -->
    </div>
    <!--end content-->
    @stop