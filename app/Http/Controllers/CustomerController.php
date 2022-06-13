<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;

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
}
