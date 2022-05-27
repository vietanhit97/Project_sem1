<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function scopeCreateRegisTration(){
        $data = request() -> only('name','email','password','phone','address');
        $data['password'] = bcrypt(request()->password);
        return $this->create($data);
    }
    
    public function isFavorite($product_id)
    {
        // if (auth()->guard('customer')->check()) {
        //     $userId = auth()->guard('customer')->user()->id;
        //     $favorited = Favorite::where([
        //         'customer_id'=> $userId, 
        //         'product_id' => $product_id
        //     ])->first();
        //     return $favorited;
        // }
        return $this->hasOne(Favorite::class, 'customer_id','id')->where('product_id', $product_id)->first();
        return false;
    }

    // JOIN 3 bang
    // customers - favorites - products
    /**
     * customers -> id
     * products  -> id
     * favorites
     *      customer_id
     *      product_id
     */
    public function favorites()
    {
        return $this->belongsToMany(Product::class,'favotites');
    }
}