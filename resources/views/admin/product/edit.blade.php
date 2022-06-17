@extends('master.admin')
@section('title','Sửa sản phẩm')
@section('content')
<h2 style="text-align: center ;">
    <font color="RED">CHỈNH SỬA SẢN PHẨM</font>
</h2>
<br><br>
<form action="{{route('product.update',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
    <legend>Sửa sản phẩm</legend>
    @csrf @method('PUT')
    <div class="row">
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Tên sản phẩm "
                    value="{{$product->name}}">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" id="content" class="form-control" rows="3"
                    placeholder="Mô tả sản phẩm..."></textarea>
            </div>
            <div class="form-group">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Ảnh</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product->images as $img)
                        <tr>
                            <td>{{$img->id}}</td>
                            <td><img src="{{url('public/uploads/'.$img->image_name)}}" alt="" width="60"></td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('product.deleteImage', $img->id) }}">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <div class="form-group">
                <label for="">Danh mục sản phẩm hiện tại </label>
                <input type="text" class="form-control" name="category_id" value="{{$product->cat->name}}"
                    placeholder="Tên sản phẩm " readonly>
            </div>
            <div class="form-group">
                <label for="">Danh mục sản phẩm</label>
                <select id="input" name="category_id" class="form-control" required="required">
                    <option value="">Chọn Danh Mục</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Giá sản phẩm</label>
                <input type="text" class="form-control" name="price" id="" placeholder="Giá sản phẩm "
                    value="{{$product->price}}">
                @error('price')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Giá khuyến mãi</label>
                <input type="text" class="form-control" name="sale_price" id="" placeholder="Giá khuyến mãi "
                    value="{{$product->sale_price}}">
                @error('sale_price')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ảnh :</label>
                <img src="{{url('public/uploads')}}/{{$product->image}}" width="80px" alt="">
            </div>
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="upload" id="upload" placeholder="Ảnh sản phẩm ">
                <img src="" id="show_image" alt="" style="width:300px">
                @error('upload')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ảnh Khác </label>
                <input type="file" class="form-control" name="uploads[]" id="uploads" multiple accept="image/*" />
                <img src="" id="show_images" alt="" style="width:30%">
                @error('upload')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Trạng Thái</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" checked>
                        Hiển thị
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1">
                        Tạm ẩn
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>

    </div>

</form>

@stop()