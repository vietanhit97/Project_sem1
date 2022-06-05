<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
class CustomerController extends Controller
{
    public function index(Request $req){
        $cats = Customer::search()->paginate(4); 
        return view('admin.customer.customer',compact('cats'));
    }
   
    public function destroy(Customer $customer) {
       
        $customer->delete();
        return redirect()->route('customer.index')->with('ok','xóa thành công !');
    }
   
    public function trashed(){
        $cats = Customer::search()->onlyTrashed()->paginate();
        return view('admin.customer.trashed',compact('cats'));
    }
    public function restore($id){
        $customer = Customer::withTrashed()->find($id);
        $customer->restore();
       return redirect()->route('customer.index')->with('ok','Khôi phục thành công ');
    }
    public function forceDelete($id){
        $customer = Customer::withTrashed()->find($id);
        $customer->forceDelete();
        return redirect()->route('customer.trashed')->with('ok','Xóa vĩnh viễn thành công ');
    }

    public function checkout()
    {
        $customer = auth()->guard('customer')->check() ? auth()->guard('customer')->user() : null;
        return view('customer.checkout', compact('customer'));
    }

    public function post_checkout(Cart $cart)
    {
        $customer_id = auth()->guard('customer')->check() ? auth()->guard('customer')->id() : null;
        $data = request()->only('name','email','phone','address');
        $data['customer_id'] = $customer_id;
        if ($order = Order::create($data)) {
           $order_id = $order->id;
           foreach ($cart->items as $item) {
                $detail = [
                    'order_id' => $order_id,
                    'product_id' => $item->id,
                    'price' => $item->price,
                    'quantity' => $item->quantity
                ];
                OrderDetail::create($detail);
           }
        }
        $cart->clear();
        return redirect()->route('checkout-ok');
    }

    public function orders()
    {
        if (auth()->guard('customer')->check()) {
            $customer = auth()->guard('customer')->user();
            return view('customer.orders', compact('customer'));
        } else {
            return abort(401);
        }
    }

    public function checkout_ok()
    {
        return view('customer.checkout-ok');
    }

}