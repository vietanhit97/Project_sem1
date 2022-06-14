<div>
    <div class="category-products page-product-list">
        <div class="toolbar-top">
            <div class="toolbar">
                <div class="sorter">
                    <label>View as</label>
                    <p class="view-mode">
                        <strong title="Grid" class="grid">Grid</strong>
                        <a href="list.html" title="List" class="list">List</a>
                    </p>
                    <div class="sort-by">
                        <div class="wrap-sb">
                            <div class="selected-order"></div>
                            <ul class="select-order">
                                <li><a href="#" class="selected">Sắp Xếp</a></li>
                                <li><a href="{{route('user.sort_name')}}">Từ A -> Z</a></li>
                                <li><a href="{{route('user.ascending')}}">Giá Tăng Dần </a></li>
                                <li><a href="{{route('user.decrease')}}">Giá Giảm Dần </a></li>
                            </ul>
                        </div>
                        <a class="desc" href="{{route('user.sort_name_desc')}}"
                            title="Set Descending Direction">
                            <!--<img src="" alt="" class="v-middle" />-->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="products-grid row">
            @foreach($data as $pro)
            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item">
                <div class="item-wrap">
                    <div class="item-image">
                        <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                            <img class="first_image" src="{{url('public/uploads')}}/{{$pro->image}}"
                                alt="Product demo" />
                        </a>
                        <div class="item-btn">
                            <div class="box-inner">
                                @if(auth()->guard('customer')->check())
                                       @if (auth()->guard('customer')->user()->isFavorite($pro->id))
                                        <a title="Add to wishlist" href="{{route('user.unfavorite',$pro->id)}}"
                                            class="link-wishlist" style="background-color:red">&nbsp;</a>
                                    @else
                                         <a title="Add to wishlist" href="{{route('user.favorite',$pro->id)}}"
                                            class="link-wishlist" >&nbsp;</a> 
                                    @endif
                                @else
                                <a title="Add to wishlist" href="{{route('user.login')}}"
                                    class="link-wishlist">&nbsp;</a>
                                @endif
                                <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                <span class="qview"><a href="#"></a>
                                    <a class="vt_quickview_handler" data-original-title="Quick View"
                                        data-placement="left" data-toggle="tooltip"
                                        href="{{Route('user.productSingle',['product'=>$pro->id,'slug'=>Str::slug($pro->name)])}}"><span>Quick
                                            View</span></a>
                                </span>
                            </div>
                        </div>
                        <a title="Add to cart" class="btn-cart" href="{{route('cart.add',$pro->id)}}">&nbsp;</a>
                    </div>
                    <div class="pro-info">
                        <div class="pro-inner">
                            <div class="pro-title product-name"><a href="#">{{$pro->name}}</a></div>
                            <div class="pro-content">
                                <div class="wrap-price">
                                    <div class="price-box">
                                        @if($pro->sale_price>0)
                                        <span class="regular-price">
                                            <span class="price">{{number_format( $pro->sale_price)}} đ</span></span>
                                        <p class="special-price">
                                            <span class="price">{{number_format($pro->price)}}
                                                đ</span>
                                        </p>
                                        @else
                                        <span class="regular-price">
                                            <span class="price " >{{number_format($pro->price)}} đ</span></span>
                                        <p class="special-price">
                                            <span class="price " >0
                                                đ</span>
                                        </p>
                                        @endif
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating" style="width:80%"></div>
                                        </div>
                                        <span class="amount"><a href="detail.html">1(s)</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end item wrap -->
            </li>
            @endforeach
        </ul>
    </div>
</div>