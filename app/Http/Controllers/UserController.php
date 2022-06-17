<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\CustomerRequestStore as reqCus;
use App\Http\Requests\Customer\CustomerRequestLogin as reqCusLogin;
class UserController extends Controller
{
   public function home(Product $product){
        $productSale = $product->orderby('sale_price','desc')->paginate(8);
        $productHot = $product->orderby('id','desc')->limit(4)->get();
       return view('user.home',compact('productSale'),compact('productHot'));
   }
   public function shop(){
       $product = Product::search()->paginate(8);
       return view('user.shop',compact('product'));
   }
   public function category(Category $category){
       $productOfCategory = $category->products()->paginate(4);
       return view('user.category',compact('productOfCategory','category'));
   }
   public function productSingle(Product $product){
         $image_list1 = $product->images;
      return view('user.singleProduct',compact('product','image_list1'));
   }
   public function registration(){
    return view('customer.registration');
    }
    public function createRegistration(reqCus $req){
       if (Customer::createRegisTration()) {
        return redirect()->route('user.login')->with('ok','Đăng ký tài khoản thành công !');
        }
        else {
        return redirect()->back()->with('no','Đăng ký tài khoản thất bại ! ');
        }
    }
    public function login(){

        return view('customer.login');
    }
    public function check_login(reqCusLogin $reqLogin){
        $data=$reqLogin->only('email','password');
        // $password = bcrypt('123456') ; 
        // dd($password); // lấy mã hóa mất khẩu 
        $check = auth()->guard('customer')->attempt($data); // xác thực người dùng thủ công 
        if ($check) {
          return redirect()->route('user')->with('ok','Đăng nhập thành công !');
       }
       return redirect()->back()->with('no','Đăng nhập thất bại, vui lòng kiểm tra lại !');
    }
    public function logout() {
        auth()->guard('customer')->logout();
        return redirect()->route('user')->with('ok','Đăng xuất thành công !');
    }
    // yêu thích sản phẩm 
    
    public function favorite($id)
    {
        Favorite::create([
           'product_id' => $id,
           'customer_id' => auth()->guard('customer')->user()->id
       ]);
       return redirect()->route('user')->with('ok','Yêu Thích Thành Công ');
    }

    public function unfavorite($id)
    {
        Favorite::where([
           'product_id' => $id,
           'customer_id' => auth()->guard('customer')->user()->id
       ])->delete();
       return redirect()->route('user')->with('ok',' Bỏ Yêu Thích Thành Công');
    }

    public function favorite_list()
    {
        $products = auth()->guard('customer')->user()->favorites()->paginate(4);
        return view('user.view-favorite', compact('products'));
    }
    //sắp xếp sản phẩm
    public function ascending(){
        $productAscending = Product::search()-> orderBy('price', 'asc')->paginate(8);
        return view('user.shop-tang-dan', compact('productAscending'));
    }
    public function decrease(){
        $productDecrease = Product::search()-> orderBy('price', 'desc')->paginate(8);
        return view('user.shop-giam-dan', compact('productDecrease'));
    }
    public function sort_name(){
        $productSortName = Product::search()-> orderBy('name', 'asc')->paginate(8);
        return view('user.sap-xep-ten', compact('productSortName'));
    }
    public function sort_name_desc(){
        $productSortNameDesc = Product::search()-> orderBy('name', 'desc')->paginate(8);
        return view('user.sap-xep-ten-desc', compact('productSortNameDesc'));
    }
    // tim kiếm sản phẩm 
    public function search(Request $req){
        $product = Product::search()->paginate(8);
        return view('user.search',compact('product'));
    }
}