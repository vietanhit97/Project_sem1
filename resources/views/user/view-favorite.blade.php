<?php $stt= 0 ;?>
@extends('master.user')
@section('title','Giỏ Hàng')
@section('main')
<div class="container">
    <div class="product-big-title-area">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Sản Phẩm Yêu Thích</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="row">
            <div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="block block-layered-nav">
                    <div class="block-title-shop-by">
                        <strong><span>Sản Phẩm</span></strong>
                    </div>
                    <div class="block-content">
                        <dl id="narrow-by-list">
                            <dt id="tab2" class="tab-accordion accordion-open"> Price</dt>
                            <dd class="tabcontent2">
                                <div class="price">
                                    <div class="range-wrap">
                                        <div id="slider-range"></div>
                                    </div>
                                    <div class="text-box">
                                        <div class="price-from">
                                            $ <input type="text" name="min" id="minPrice" class="priceTextBox"
                                                value="400" /></div>
                                        <div class="price-to"> <input type="text" name="max" id="maxPrice"
                                                class="priceTextBox" value="1000" /></div>
                                        <a class="go" href="javascript:void(0)">Fillter</a>
                                        <input type="hidden" id="amount" readonly="readonly"
                                            style="background:none; border:none;" value="$400 - $1000" />
                                    </div>
                                </div>
                            </dd>
                            <dt id="tab4" class="tab-accordion accordion-close">Màu</dt>
                            <dd class="tabcontent4" style="display:none;">
                                <ol>
                                    <li class='licolor'><a class='itemcolor colorwhite'
                                            href="gridead2.html?color=25">White_#ffffff</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#e66054'
                                            href="grid2397.html?color=8">Blue _#e66054</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#d0b7cc'
                                            href="gridd37b.html?color=10">Green_#d0b7cc</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#107a8e'
                                            href="grid2686.html?color=9">Yellow _#107a8e</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#a7bc93'
                                            href="grid422e.html?color=24">Pink_#a7bc93</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#d3b627'
                                            href="grid3060.html?color=23">Lightblue_#d3b627</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#b4b3ae'
                                            href="grid3e7c.html?color=22">Gray_#b4b3ae</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#502006'
                                            href="gridaa79.html?color=21">Red_#502006</a></li>
                                    <li class='licolor'><a class='itemcolor' style='background:#311e21'
                                            href="gridc0d9.html?color=20">violet_#311e21</a></li>
                                </ol>
                            </dd>
                            <dt id="tab3" class="tab-accordion accordion-open">Danh Mục</dt>
                            <dd class="tabcontent3">
                                <ol>
                                    @foreach($categories as $category)
                                    <li><a
                                            href="{{route('user.category',['category'=>$category->id,'slug'=>Str::slug($category->name)])}}">{{$category->name}}
                                        </a href="">({{$category->products()->count()}})</li>
                                    @endforeach
                                </ol>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
                <div class="wrap-banner-cate">
                    <a class="cate-img" href="#"><img src="images/banner-2.png" alt="" /></a>
                </div>
                <div class="page-title category-title">
                    <h1>Sản Phẩm Yêu Thích</h1>
                </div>
                <div id="catalog-listing">
                    @if ($products->count())
                    <div class="grids_of_3">
                        <x-product-list :data="$products" />
                    </div>
                    @else
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong> không có </strong> !!!!!
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="text-center">
            {{$products->appends(request()->all())->links()}}
        </div>
    </div>
</div>
@stop