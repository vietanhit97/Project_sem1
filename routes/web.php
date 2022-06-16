<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;//lấy bên namespace HomeController
use App\Http\Controllers\UserController;//lấy bên namespace HomeController
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;



 // khai báo router 
 Route::get('admin/login',[AdminController::class,'login'])->name('admin.login'); // giao diện đăng nhập admin
 Route::post('admin/login',[AdminController::class,'check_login']); // gửi dữ liệu form check
 Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout'); // thoát
 
 Route::get('registration',[UserController::class,'registration'])->name('user.registration'); // Giao diện đăng ký tài khoản
 Route::post('registration',[UserController::class,'createRegistration']); // check đăng ký 
 Route::get('login',[UserController::class,'login'])->name('user.login'); // Đăng nhập
 Route::post('login',[UserController::class,'check_login']); //giao diện đăng nhập người dùng
 Route::get('logout',[UserController::class,'logout'])->name('user.logout'); // thoát


Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){ //group truyền 2 tham sô : mảng và function ,'middleware' => 'auth' đăng nhâoj
    Route::get('',[AdminController::class,'dashboard'])->name('admin');
    Route::resources([  // cmd : php artisan route:list 
        'category'=> CategoryController::class,
        'product'=> ProductController::class,
        'customer' => CustomerController::class,
        'order' => OrderController::class,
        
    ]);
    Route::group(['prefix'=>'category'], function(){
        Route::get('delete/trashed',[CategoryController::class,'trashed'])->name('category.trashed');
        Route::get('restore/{category}',[CategoryController::class,'restore'])->name('category.restore');
        Route::delete('force-delete/{category}',[CategoryController::class,'forceDelete'])->name('category.forceDelete');
    });
    Route::group(['prefix'=>'product'], function(){
        Route::get('delete/trashed',[ProductController::class,'trashed'])->name('product.trashed');
        Route::get('show-product/{product}',[ProductController::class,'show'])->name('product.show');
        Route::get('restore/{product}',[ProductController::class,'restore'])->name('product.restore');
        Route::delete('force-delete/{product}',[ProductController::class,'forceDelete'])->name('product.forceDelete');
        Route::get('delete-image/{image}',[ProductController::class,'deleteImage'])->name('product.deleteImage');
    });
    Route::group(['prefix'=>'order'], function(){
        Route::get('show-order/{order}',[OrderController::class,'show'])->name('order.show');
         });

});
Route::group(['prefix'=>'user'], function(){ //group truyền 2 tham sô : mảng và function
    Route::get('',[UserController::class,'home'])->name('user');
    Route::get('shop',[UserController::class,'shop'])->name('user.shop');
    Route::get('tang-dan',[UserController::class,'ascending'])->name('user.ascending');
    Route::get('giam-dan',[UserController::class,'decrease'])->name('user.decrease');
    Route::get('sap-xep-ten',[UserController::class,'sort_name'])->name('user.sort_name');
    Route::get('sap-xep-ten-desc',[UserController::class,'sort_name_desc'])->name('user.sort_name_desc');
    Route::get('search',[UserController::class,'search'])->name('user.search');


    Route::get('/{category}-{slug}',[UserController::class,'category'])->name('user.category');
    Route::get('san-pham/{product}-{slug}',[UserController::class,'productSingle'])->name('user.productSingle');
    Route::get('yeu-thich/{id}', [UserController::class, 'favorite'])->name('user.favorite');
    Route::get('bo-yeu-thich/{id}', [UserController::class, 'unfavorite'])->name('user.unfavorite');
    Route::get('customer/san-pham-yeu-thich', [UserController::class, 'favorite_list'])->name('user.product_favorite');
});

Route::group(['prefix' => 'cart'], function() {
    Route::get('/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/view', [CartController::class, 'view'])->name('cart.view');

});

Route::group(['prefix' => 'customer'], function() {
    Route::get('/checkout', [CustomerController::class, 'checkout'])->name('customer.checkout');
    Route::post('/checkout', [CustomerController::class, 'post_checkout']);
    Route::get('/checkout-ok', [CustomerController::class, 'checkout_ok'])->name('checkout-ok');
    Route::get('/orders', [CustomerController::class, 'orders'])->name('customer.order');
    Route::get('/orders-detail/{order}', [CustomerController::class, 'orders_detail'])->name('customer.orders_detail');

}); 

