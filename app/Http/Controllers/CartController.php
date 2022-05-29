<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


class CartController extends Controller
{
    public function add($id, Cart $cart )
    {
        $pro = Product::find($id);
        $quantity = request('quantity',1);
        $cart->add($pro, $quantity);
        return redirect()->route('cart.view');
    }
    public function update($id, Cart $cart )
    {
        $cart -> update($id, $cart);
        return redirect()->route('cart.view');
    }

    public function delete($id, Cart $cart)
    {
        $cart -> removeItem($id);
        return redirect()->route('cart.view')->with('ok','Xóa sản phẩm thành công !');
    }
    public function clear(){
        session(['cart' => null]);
        return redirect()->route('cart.view')->with('ok','Xóa giỏ hàng thành công !');
    }

    public function view()
    {
        $carts = session('cart')  ? session('cart') : [];
        return view('cart.view', compact('carts'));
    }
}
