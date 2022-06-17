<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Http\Requests\Product\ProductRequestStore as ReqProductStore;
use App\Http\Requests\Product\ProductRequestUpdate as ReqProductUpdate;
class ProductController extends Controller
{   
    public function index(Request $req){
        $pros = Product::search()->paginate(4);
        return view('admin.product.product',compact('pros'));
    }
    public function create(){
        $cats = Category::all();
        return view('admin.product.create',compact('cats'));
    }
    public function store(ReqProductStore $req){ 
        $image_list = [];
        $ext = request()->upload->extension(); // lấy đuôi ảnh kiểu jpg,
        $file_name = time() . '.' . $ext; // tên ảnh theo thơi gian time () 
        request()->upload->move(public_path('uploads'), $file_name); // lưu ảnh vao thư mục 
        if (request()->has('uploads')) {
            foreach(request()->uploads as $key => $file) {
                $ext1 = $file->extension();
                $file_name1 = time().$key.'.'.$ext1;
                $file->move(public_path('uploads'), $file_name1);
                $image_list[] = $file_name1;
            }
        }
        $data=request()->only('name','price','sale_price','category_id','description','image');
        $data['image'] = $file_name;
        $data['image_list'] = json_encode($image_list);
        if ($pro = Product::create($data)) {
            if (request()->has('uploads')) {
                foreach($image_list as $img) {
                    $image_data = [
                        'image_name' => $img,
                        'product_id' => $pro->id
                    ];

                    ProductImage::create($image_data);
                }
            }
            return redirect()->route('product.index')->with('ok','Thêm mới thành công');
        }
        return redirect()->route('product.index')->with('no','Thêm mới không thành công');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('ok','xóa sản phẩm thành công');
    }
    public function edit(Product $product){
        $cats = Category::all();
        return view('admin.product.edit',compact('product','cats'));
    }
    public function update(ReqProductUpdate $req,Product $product){
        $image_list = [];
        $data = request()->only('name','price','sale_price','category_id','status','desr');
        if (request()->has('upload')) {
            $ext = request()->upload->extension();
            $file_name = time().'.'.$ext;
            request()->upload->move(public_path('uploads'), $file_name);
            $data['image'] = $file_name;
        }
        if (request()->has('uploads')) {
            foreach(request()->uploads as $key => $file) {
                $ext1 = $file->extension();
                $file_name1 = time().$key.'.'.$ext1;
                $file->move(public_path('uploads'), $file_name1);
                $image_list[] = $file_name1;

                $image_data = [
                    'image_name' => $file_name1,
                    'product_id' => $product->id
                ];

                ProductImage::create($image_data);
            }
           $data['image_list'] = json_encode($image_list);
        }
        if ($product->update($data)) {

            return redirect()->route('product.index')->with('ok','Sửa thành công');
        }
        return redirect()->route('product.index')->with('no','Sửa không thành công');
    }
    public function show(Product $product) {
        $image_list1 = $product->images;
        return view('admin.product.show',compact('product','image_list1'));
    }
    public function trashed(){
        $pros = Product::search()->onlyTrashed()->paginate(4);
        return view('admin.product.trashed',compact('pros'));
    }
    public function restore($id){
        $pros = Product::withTrashed()->find($id);
        $pros->restore();
        return redirect()->route('product.index')->with('ok','Khôi phục thành công ');
    }
    public function forceDelete($id){
        $pros = Product::withTrashed()->find($id);
        $pros->forceDelete();
        return redirect()->route('product.trashed')->with('ok','Xóa vĩnh viễn thành công ');
    }
    public function deleteImage(ProductImage $image){
        $image->delete();
        return redirect()->back()->with('ok','xóa hình ảnh thành công');
    }

}