@extends('master.admin')

@section('title','Chi tiết sản phẩm')

@section('content')
<h2 style="text-align: center ;">
    <font color="RED">CHI TIẾT SẢN PHẨM</font>
</h2>
<br><br>
<div class="row">
    <div class="col-md-5">
        <img src="{{url('public/uploads')}}/{{$product->image}}" id="big-img" alt="" style="width:300px">
        <hr>
        <div class="row">
            <div class="col-md-4">
                <img src="{{url('public/uploads/'.$product->image)}}" class="product-thumb" alt="" style="width:70%">
            </div>
            @foreach($image_list1 as $img1)
            <div class="col-md-4">
                <img class="product-thumb" src="{{url('public/uploads/'.$img1->image_name)}}" alt="" style="width:70%">
            </div>
            @endforeach
        </div>
    </div>

    <div class="col-md-7">
        <h2>{{$product->name}}</h2>
        <h4>
            Giá gốc: {{ number_format($product->price)}} đ
            <b>
                Giá KM: {{ number_format($product->sale_price)}} đ
            </b>
        </h4>
        <hr>
        <h2>Mô tả </h2>
        <div>
            {!! $product->description !!}
        </div>
    </div>
</div>

@stop()
@section('js')
<script>
$('.product-thumb').click(function() {
    var _src = $(this).attr('src');
    // alert(_src)
    $('#big-img').attr('src', _src);
})
</script>
@stop()