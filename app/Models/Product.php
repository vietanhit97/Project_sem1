<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{   
    use HasFactory,SoftDeletes;
    protected $table = 'product';
    protected $fillable = ['name','status','category_id','price','sale_price','description','image'];
    public function cat(){
       return $this->hasOne(Category::class,'id','category_id');
    }
    public function scopeSearch($query)
    {   
        if(request('key')){
        $key = request('key');
        $query=$query->where('name','like','%'.$key.'%');
        }
            return $query;
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id','id');
    }
    
    
}